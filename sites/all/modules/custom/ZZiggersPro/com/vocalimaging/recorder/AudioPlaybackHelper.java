package com.vocalimaging.recorder;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;

import javax.sound.sampled.AudioFormat;
import javax.sound.sampled.AudioSystem;
import javax.sound.sampled.Line;
import javax.sound.sampled.LineUnavailableException;
import javax.sound.sampled.Mixer;
import javax.sound.sampled.SourceDataLine;
import javax.sound.sampled.Mixer.Info;

public class AudioPlaybackHelper implements Runnable {

    //private static final AudioFormat EXAMPLE_AUDIO_FORMAT = new AudioFormat(22050,16,1,true,false);

    public static class MixerSourceLine {
        private Mixer.Info mixer;
        private Line.Info line;

        public MixerSourceLine(Info mixer, javax.sound.sampled.Line.Info line) {
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

    private ArrayList<MixerSourceLine> outputLines;
    private List<MixerSourceLine> _outputLines;

    private boolean playRunning = false;
    private MixerSourceLine playOutput;
    private AudioPlaybackCallback playCback;
    private File inFile;
    private InputStream inStream;    
    private double peakLevel = 0.0;

    public AudioPlaybackHelper(AudioFormat af) {
        outputLines = new ArrayList<MixerSourceLine>();
        Mixer.Info[] minfos = AudioSystem.getMixerInfo();
        for(Mixer.Info mi : minfos) {
            Mixer m = AudioSystem.getMixer(mi);
            Line.Info[] linfos = m.getSourceLineInfo();
            if(linfos!=null && linfos.length>0) {
                for(Line.Info li : linfos) {
                    /* Workaround: filter to remove name "Clip" as we can't do this by class */
                    if(li.toString().startsWith("interface Clip")) continue;
                    if(!(li instanceof SourceDataLine.Info)) continue;
                    SourceDataLine.Info sdli = (SourceDataLine.Info)li;
                    if(!sdli.isFormatSupported(af)) continue;
                    outputLines.add(new MixerSourceLine(mi,li));
                }
            }
        }
        _outputLines = java.util.Collections.unmodifiableList(outputLines);
    }

    public List<MixerSourceLine> getAudioOutputs() {
        return _outputLines;
    }

    public void play(MixerSourceLine output, AudioPlaybackCallback cback, File input) {
        if(isPlaying()) return;
        playOutput = output;
        playCback = cback;
        inStream = null;
        inFile = input;
        Thread t = new Thread(this);
        t.start();
    }
    public void play(MixerSourceLine output, AudioPlaybackCallback cback, InputStream input) {
        if(isPlaying()) return;
        playOutput = output;
        playCback = cback;
        inStream = input;
        inFile = null;
        Thread t = new Thread(this);
        t.start();
    }
    public void stopPlaying() {
        playRunning = false;
    }
    public boolean isPlaying() {
        return playRunning;
    }
    public double getPeakLevel() {
        return peakLevel;
    }
    public double getPeakDb() {
        return 10*Math.log10(peakLevel);
    }

    public static int getSampleRate(int index) {
        /* 1=8k, 2=11.025k, 3=16k, 4=22.05k, 5=32k, 6=44.1k, 7=48k */
        switch(index) {
        case 1: return 8000;
        case 2: return 11025;
        case 3: return 16000;
        case 4: return 22050;
        case 5: return 32000;
        case 6: return 44100;
        case 7: return 48000;
        }
        return 0;
    }
    public static int getSampleRateIndex(int rate) {
        /* 1=8k, 2=11.025k, 3=16k, 4=22.05k, 5=32k, 6=44.1k, 7=48k */
        switch(rate) {
        case 8000: return 1;
        case 11025: return 2;
        case 16000: return 3;
        case 22050: return 4;
        case 32000: return 5;
        case 44100: return 6;
        case 48000: return 7;
        }
        return 0;
    }
    public static int getFormatInfoByte(int sampleSizeInBits, boolean isStereo, boolean isSigned, boolean bigEndian) {
        return (sampleSizeInBits==16 ? 1 : 0) | (isStereo ? 2 : 0) | (isSigned ? 4 : 0) | (bigEndian ? 8 : 0);
    }

    public void run() {
        InputStream is = inStream;
        if(is==null) {
            try {
                is = new FileInputStream(inFile);
            } catch (FileNotFoundException e) {
                if(playCback!=null) playCback.playbackException(e);
                else e.printStackTrace();
                return;
            }
        }
        /* 
         * Read format from the raw file; structure is:
         * First byte: sample rate 1=8k, 2=11.025k, 3=16k, 4=22.05k, 5=32k, 6=44.1k, 7=48k
         * Second byte: 
         * First bit: sample size in bytes (0=8, 1=16) 
         * Second bit: is stereo? (0=mono, 1=stereo)
         * Third bit: is signed? (0=false, 1=true)
         * Fourth bit: is big endian? (0=false, 1=true)
         */
        int srate;
        int ssize;
        try {
            srate = is.read();
            ssize = is.read();
        } catch (IOException e) {
            if(playCback!=null) playCback.playbackException(e);
            else e.printStackTrace();
            return;
        }
        int samplerate = getSampleRate(srate);
        int samplesize = (ssize&1)>0 ? 16 : 8;
        int channels = (ssize&2)>0 ? 2 : 1;
        boolean signed = (ssize&4)>0;
        boolean bigEndian = (ssize&8)>0;
        
        double SAMPLE_MAXP = 127.0;
        double SAMPLE_MAXN = -128.0;
        if(samplesize==16) {
            SAMPLE_MAXP = 32767;
            SAMPLE_MAXN = -32768;
        }

        Mixer m = AudioSystem.getMixer(playOutput.getMixer());
        SourceDataLine sdl;
        try {
            sdl = (SourceDataLine) m.getLine(playOutput.getLine());
            AudioFormat af = new AudioFormat(samplerate,samplesize,channels,signed,bigEndian);
            sdl.open(af);
        } catch (LineUnavailableException e) {
            if(playCback!=null) playCback.playbackException(e);
            else e.printStackTrace();
            return;
        }
        
        long counter = 0;
        byte[] buf = new byte[2048];
        int nread = 0;
        playRunning = true;
        if(playCback!=null) playCback.playbackStarted();
        double level=0,tmp=0;
        //boolean isFirst = true;
        peakLevel = 0.0;
        
        sdl.start();
        outer:
        while(playRunning) {
            try {
                nread = 0;
                do {
                    tmp = is.read(buf,nread,buf.length-nread);
                    if(tmp>0) nread+=tmp;
                    else {
                        if(nread==0) break outer; // completely done
                        else break; // done but some left to play out
                    }
                } while(nread<buf.length);
            } catch(IOException ioe) {
                if(playCback!=null) playCback.playbackException(ioe);
                else ioe.printStackTrace();
                try {
                    is.close();
                } catch(IOException e) {}
                break;
            }
            //if(nread<0) break;
            counter += nread;
            /* Analyse peak level (skip first sample) */
            level = 0.0;
            if(samplerate==16) {
                int samp;
                for(int i=0; i < nread/2; i++) {
                    if(bigEndian) samp = (buf[i]<<8) | buf[i+1];
                    else samp = buf[i] | (buf[i+1]<<8);
                    if(samp<0) tmp = samp/SAMPLE_MAXN;
                    else tmp = samp/SAMPLE_MAXP;
                    if(tmp>level) level = tmp;
                }
            } else {
                for(int i=0; i < nread; i++) {
                    if(buf[i]<0) tmp = buf[i]/SAMPLE_MAXN;
                    else tmp = buf[i]/SAMPLE_MAXP;
                    if(tmp>level) level = tmp;
                }
            }
            if(level>peakLevel) peakLevel = level;
            /* Write to output */
            sdl.write(buf,0,nread);
            
            if(playCback!=null) {
                double time = (8.0*counter)/(samplerate*samplesize);
                playCback.playbackUpdate(time,level);
            }
        }
        sdl.drain();
        sdl.stop();
        sdl.close();
        try {
            is.close();
        } catch(IOException e) {}
        playRunning = false;
        if(playCback!=null) playCback.playbackStopped(counter*1.0/samplerate,true);
    }
}
