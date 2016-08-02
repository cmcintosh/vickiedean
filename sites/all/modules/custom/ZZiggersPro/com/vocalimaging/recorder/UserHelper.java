package com.vocalimaging.recorder;

import java.io.IOException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;

public class UserHelper {

    private static final boolean SERVER_SSL = false;
    private static final String SERVER_HOST = "localhost:8081";
    private static final String SERVER_ROOT = "/viauth";
    private static final String AUTH_URL = "/applogin.php";
    private static final String BASE_URL = (SERVER_SSL ? "https://" : "http://" ) + SERVER_HOST + SERVER_ROOT;
    
    public UserHelper() {}

    public Object authenticate(String username, String password) throws IOException {
        URL url;
        try {
            String un = URLEncoder.encode(username,"UTF-8");
            String pw = URLEncoder.encode(password,"UTF-8");
            url = new URL(BASE_URL + AUTH_URL + "?un=" + un + "&pw=" + pw);
        } catch (MalformedURLException e) { // should never happen
            e.printStackTrace();
            return null;
        }
        HttpURLConnection urlc = (HttpURLConnection) url.openConnection();
        int code = urlc.getResponseCode();
        if(code==200||code==204) {
            /* All OK - get the user UID in the response */
            return Boolean.TRUE;
        } else if(code==401) {
            /* Unauthorized */
            return null;
        }
        /* Unexpected error */
        System.err.println("Authentication request returned " + code);
        return null;
    }

}
