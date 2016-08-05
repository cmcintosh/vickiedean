package com.vocalimaging.recorder;

public interface AudioPlaybackCallback {

    public void playbackStarted();
    public void playbackStopped(double length, boolean end);
    public void playbackUpdate(double time, double level);
    public void playbackException(Throwable t);
    
}
