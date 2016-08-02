package com.vocalimaging.recorder;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Properties;

import javax.sound.sampled.AudioFileFormat;
import javax.sound.sampled.AudioFormat;
import javax.sound.sampled.AudioInputStream;
import javax.sound.sampled.AudioSystem;

public class FilesHelper {
    
    private VIRecorder app;
    
    public FilesHelper(VIRecorder app) {
        this.app = app;
    }

    public File[] saveAudioFiles(String accountNum, String doctorRef) {
        File[] outs = new File[app.getRecordedFileCount()];
        for(int i=0; i < app.getRecordedFileCount(); i++) {
            File rawf = app.getRecordingFile(i);
            File out = new File(rawf.getParent(),app.getFinalRecordingFileName(accountNum,doctorRef,i));
            /* Transcode to WAV */
            try {
                FileInputStream fis = new FileInputStream(rawf);
                /* Extract format information */
                int srate;
                int ssize;
                srate = fis.read();
                ssize = fis.read();
                int samplerate = AudioPlaybackHelper.getSampleRate(srate);
                int samplesize = (ssize&1)>0 ? 16 : 8;
                int channels = (ssize&2)>0 ? 2 : 1;
                boolean signed = (ssize&4)>0;
                boolean bigEndian = (ssize&8)>0;
                
                //System.err.println("Format: " + samplerate + "," + samplesize + "," + channels + "," + bigEndian + "," + signed);
                AudioFormat af = new AudioFormat(samplerate,samplesize,channels,signed,bigEndian);
                
                AudioInputStream ais = new AudioInputStream(fis,af,(rawf.length()-2)*8/(channels*samplesize));
                AudioSystem.write(ais,AudioFileFormat.Type.WAVE,out);
            } catch (IOException e1) {
                // TODO Auto-generated catch block
                e1.printStackTrace();
            }
            /* Move the file to the archive location */
            File out2 = app.getArchiveFile(accountNum,doctorRef,i);
            if(out.renameTo(out2)) {
                outs[i] = out2;
            } else {
                outs[i] = out;
            }
        }
        return outs;
    }
    
    
    public boolean saveVListProperties(String accountRef, String doctorRef) {
        Properties p = new Properties();
        //p.put("account_ref",accountRef);
        p.put("physician_ref",doctorRef);
        p.put("patient",app.getClientID());
        SimpleDateFormat sdf = new SimpleDateFormat("MM/dd/yyyy HH:mm z");
        Date d = new Date();
        p.put("date_readable",sdf.format(d));
        p.put("date",Long.toString(d.getTime()));
        p.put("gender",app.getGender());
        p.put("age",app.getAgeRange());
        p.put("clinic",Integer.toString(app.getClinicID()));
        //p.put("report_type",app.getReportType());
        //p.put("express",app.isExpress() ? "Y" : "N");
        //p.put("promo",app.getPromoCode());
        //p.put("options",app.getClientOptions());
        for(int i=0; i < app.getRecordedFileCount(); i++) {
            p.put("recording_" + app.getRecordingShortCode(i),app.getRecordingName(i));
        }
        try {
            File f = app.getArchiveVList(accountRef,doctorRef);
            p.store(new FileWriter(f),null);
        } catch (IOException e) {
            e.printStackTrace();
            return false;
        }
        return true;
    }
    
}
