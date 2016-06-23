package com.vocalimaging.recorder;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.sound.sampled.AudioFormat;
import javax.sound.sampled.AudioSystem;
import javax.sound.sampled.Line;
import javax.sound.sampled.LineUnavailableException;
import javax.sound.sampled.Mixer;
import javax.sound.sampled.TargetDataLine;
import javax.sound.sampled.Mixer.Info;

public class AudioRecordHelper implements Runnable {

    /* Milliseconds that will be considered for the auto-pause function */
    private static final int THRESHOLD_PAUSE_MS = 1000;
    
    /* Buffer size - must be enough to evenly hold multiples of CHANNELS*SAMPLE_BITS/8.
     * Total time stored in the buffer is (8*BUFFER_SIZE) / (CHANNELS*SAMPLE_RATE*SAMPLE_BITS)
     */
    private static final int BUFFER_SIZE = 2048;
    
    // FIXME set this from the application properties
//    private static final int SAMPLE_RATE = 22050;
//    private static final int SAMPLE_BITS = 16;
//    private static final int CHANNELS = 1;
//    private static final boolean BIG_ENDIAN = false;
//    public static final AudioFormat AUDIO_FORMAT = new AudioFormat(SAMPLE_RATE,SAMPLE_BITS,CHANNELS,true,BIG_ENDIAN);
   
//    private static final double SAMPLE_MAXP = Math.pow(2,SAMPLE_BITS)-1;
//    private static final double SAMPLE_MAXN = -Math.pow(2,SAMPLE_BITS);
    
    private boolean[] sampleThresholds;
    private int sampleThresholdsPosn;
    private double sampleThresholdsLevel; // in LINEAR [0,1]
    
    
    public static class MixerTargetLine {
        private Mixer.Info mixer;
        private Line.Info line;
        
        public MixerTargetLine(Info mixer, javax.sound.sampled.Line.Info line) {
            super();
            this.mixer = mixer;
            this.line = line;
        }
        
        public Line.Info getLine() {
            return line;
        }
        public Mixer.Info getMixer() {
            return mixer;
        }
        
        @Override
        public String toString() {
            return mixer.toString(); //mixer.getDescription(); //mixer.getVendor() + " " + mixer.getName() + ": " + ((TargetDataLine.Info)line).
        }
    }
    
    private ArrayList<MixerTargetLine> inputLines;
    private List<MixerTargetLine> _inputLines;
    
    private AudioFormat audioFormat;
    private int SAMPLE_RATE; // e.g. 22050
    private int SAMPLE_BITS; // 8 or 16
    private int CHANNELS; // 1 or 2
    private double SAMPLE_MAXP;
    private double SAMPLE_MAXN;
    
    private boolean recordRunning = false;
    private MixerTargetLine recordInput;
    private AudioRecorderCallback recordCback;
    private File outFile;
    private double peakLevel = 0.0;
    private int length = 0; // seconds to fix the recording length at, set to <=0 for "unlimited"
    
    public AudioRecordHelper(AudioFormat af) {
        this.audioFormat = af;
        SAMPLE_RATE = (int) af.getSampleRate();
        SAMPLE_BITS = af.getSampleSizeInBits();
        CHANNELS = af.getChannels();
        SAMPLE_MAXP = Math.pow(2,SAMPLE_BITS)-1;
        SAMPLE_MAXN = -Math.pow(2,SAMPLE_BITS);
        af.getSampleRate();
        inputLines = new ArrayList<MixerTargetLine>();
        Mixer.Info[] minfos = AudioSystem.getMixerInfo();
        for(Mixer.Info mi : minfos) {
            Mixer m = AudioSystem.getMixer(mi);
            Line.Info[] linfos = m.getTargetLineInfo();
            if(linfos!=null && linfos.length>0) {
                for(Line.Info li : linfos) {
                    if(!(li instanceof TargetDataLine.Info)) continue;
                    TargetDataLine.Info tdli = (TargetDataLine.Info)li;
                    if(!tdli.isFormatSupported(af)) continue;
                    inputLines.add(new MixerTargetLine(mi,li));
                }
            }
        }
        _inputLines = java.util.Collections.unmodifiableList(inputLines);
    }
    
    public List<MixerTargetLine> getAudioInputs() {
        return _inputLines;
    }
    
    public void record(MixerTargetLine input, AudioRecorderCallback cback, File output, int fixedLengthInSecs) {
        if(isRecording()) return;
        recordInput = input;
        recordCback = cback;
        outFile = output;
        this.length = fixedLengthInSecs; 
        Thread t = new Thread(this);
        t.start();
    }
    public void stopRecording() {
        recordRunning = false;
    }
    public boolean isRecording() {
        return recordRunning;
    }
    public double getPeakLevel() {
        return peakLevel;
    }
    public double getPeakDb() {
        return 10*Math.log10(peakLevel);
    }
    
    public void setQuietThreshold(double dBLevel) {
        if(dBLevel==Double.NEGATIVE_INFINITY) sampleThresholdsLevel = 0;
        else sampleThresholdsLevel = Math.pow(10.0,dBLevel/10);        
    }
    private void resetThresholds() {
        /* The thresholds is a continuous barrel which stores 
         * whether the last sampleThresholds.length sample BLOCKS were 
         * above the quiet threshold (true) or not (false).
         * Default is to set first value true.
         */
        sampleThresholds = new boolean[(CHANNELS*SAMPLE_RATE*SAMPLE_BITS*THRESHOLD_PAUSE_MS)/(1000*8*BUFFER_SIZE)];
        sampleThresholdsPosn = 0;
    }
    private boolean isSilent() {
        /* All values must be below the threshold (i.e. false) */
        for(boolean b : sampleThresholds) {
            if(b) return false; // any sample above threshold aborts
        }
        return true; // all samples below threshold
    }
    private void pushThresholdBuffer(double level) {
        sampleThresholds[sampleThresholdsPosn] = level>sampleThresholdsLevel;
        sampleThresholdsPosn = (sampleThresholdsPosn+1)>=sampleThresholds.length ? 0 : (sampleThresholdsPosn+1);
    }
    
    public void run() {
        Mixer m = AudioSystem.getMixer(recordInput.getMixer());
        TargetDataLine tdl;
        try {
            tdl = (TargetDataLine) m.getLine(recordInput.getLine());
            tdl.open(audioFormat);
        } catch (LineUnavailableException e) {
            if(recordCback!=null) recordCback.recorderException(e);
            else e.printStackTrace();
            return;
        }
        long maxSample = 0;
        if(length>0) maxSample = length * SAMPLE_RATE * CHANNELS * SAMPLE_BITS/8;
        long counter = 0;
        byte[] buf = new byte[BUFFER_SIZE];
        int nread = 0;
        
        resetThresholds();
        
        recordRunning = true;
        if(recordCback!=null) recordCback.recorderStarted();
        double level=0,tmp=0;
        boolean isFirst = true;
        tdl.start();
        peakLevel = 0.0;
        FileOutputStream os = null;
        if(outFile!=null) {
            try {
                os = new FileOutputStream(outFile);
            } catch (FileNotFoundException e) {
                if(recordCback!=null) recordCback.recorderException(e);
                else e.printStackTrace();
                return;
            }
        }
        /* Write format data */
        try {
            if(os!=null) {
                os.write(AudioPlaybackHelper.getSampleRateIndex(SAMPLE_RATE));
                os.write(AudioPlaybackHelper.getFormatInfoByte(SAMPLE_BITS,false,true,false)); // FIXME
            }
        } catch (IOException e) {
            if(recordCback!=null) recordCback.recorderException(e);
            else e.printStackTrace();
            return;
        }
        boolean bigEndian = audioFormat.isBigEndian();
        while(recordRunning && (maxSample<=0 || counter<maxSample)) {
            /* toRead will always be buf.length unless we get to the last sample 
             * of a fixed recording session (maxSample>0), when it is (maxSample-counter) which is < buf.length.
             */
            int toRead = buf.length;
            if(maxSample>0) toRead = buf.length <= (maxSample-counter) ? buf.length : (int)(maxSample-counter);
            nread = tdl.read(buf,0,toRead);
            if(nread<0) break;
            /* Analyse peak level (skip first sample) */
            if(!isFirst) {
                level = 0.0;
                if(SAMPLE_BITS==8) {
                    for(int i=0; i < nread; i++) {
                        if(buf[i]<0) tmp = buf[i]/SAMPLE_MAXN;
                        else tmp = buf[i]/SAMPLE_MAXP;
                        if(tmp>level) level = tmp;
                    }
                } else {
                    /* Analyse each pair of bytes */
                    for(int i=0; i < nread/2; i++) {
                        if(bigEndian) tmp = (buf[2*i]<<8) | buf[2*i+1];
                        else tmp = (buf[2*i+1]<<8) | buf[2*i];
                        /* Adjust for negatives */
                        if(tmp>SAMPLE_MAXP) tmp = tmp+SAMPLE_MAXN;
                        if(tmp<0) tmp = tmp/SAMPLE_MAXN;
                        else tmp = tmp/SAMPLE_MAXP;
                        if(tmp>level) level = tmp;
                    }
                }
                if(level>peakLevel) peakLevel = level;
                pushThresholdBuffer(level);
                /* Write to output if not silent */
                if(!isSilent()) {
                    try {
                        if(os!=null) os.write(buf,0,nread);
                        counter += nread;
                    } catch(IOException ioe) {
                        if(recordCback!=null) recordCback.recorderException(ioe);
                        else ioe.printStackTrace();
                        try {
                            if(os!=null) os.close();
                        } catch(IOException e) {}
                        break;
                    }
                }
            }
            isFirst = false;
            if(recordCback!=null) {
                double time = (8.0*counter)/(SAMPLE_RATE*SAMPLE_BITS);
                recordCback.recorderUpdate(time,level,isSilent());
            }
        }
        tdl.stop();
        tdl.close();
        try {
            if(os!=null) os.close();
        } catch(IOException e) {}
        recordRunning = false;
        if(recordCback!=null) recordCback.recorderStopped((8.0*counter)/(SAMPLE_RATE*SAMPLE_BITS));
    }
}
