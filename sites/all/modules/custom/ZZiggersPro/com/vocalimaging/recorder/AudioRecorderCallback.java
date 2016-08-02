package com.vocalimaging.recorder;

public interface AudioRecorderCallback {

    public void recorderStarted();
    public void recorderStopped(double length);
    public void recorderUpdate(double time, double level, boolean isSilent);
    public void recorderException(Throwable t);
    
}
