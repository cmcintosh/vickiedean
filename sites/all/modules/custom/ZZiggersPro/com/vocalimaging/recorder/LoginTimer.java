package com.vocalimaging.recorder;

import java.util.TimerTask;

public class LoginTimer extends TimerTask {

    private static final int TIMEOUT = 25; //300; // timeout in seconds
    
    private VIRecorder app;
    private long lastTouch;
    
    public LoginTimer(VIRecorder app) {
        this.app = app;
    }
    
    public void touch() {
        lastTouch = System.currentTimeMillis();
    }
    
    @Override
    public void run() {
        long now = System.currentTimeMillis();
        if((now-lastTouch)>TIMEOUT*1000) {
            /* Force the login prompt to show */
            app.showLoginDialog();
        }
    }
    
}
