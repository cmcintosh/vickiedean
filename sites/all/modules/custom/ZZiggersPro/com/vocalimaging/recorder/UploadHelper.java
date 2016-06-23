package com.vocalimaging.recorder;

import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.io.UnsupportedEncodingException;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Set;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

/**
 * This class is used to upload the report data and audio files
 * to the server via POST.
 * 
 * It requires login credentials to be supplied, and for
 * the physician to then choose a clinic for billing and a 
 * delivery location.
 * 
 * @author main
 */
public class UploadHelper {
    
    private VIRecorder app;
    
    /* Last headers received */
    private String physicianID;
    private String physicianRef;
    
    public UploadHelper(VIRecorder r) {
        this.app = r;
    }
    
    private String doGETRequest(String script, String uname, String pw, Map<String,String> params) throws IOException {
        String qstr = "";
        try {
            qstr = "un=" + java.net.URLEncoder.encode(uname, "ISO-8859-1") +
                   "&pw=" + java.net.URLEncoder.encode(pw, "ISO-8859-1");
        } catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }
        if(params!=null) {
            Set<String> keys = params.keySet();
            Iterator<String> iter = keys.iterator();
            try {
                while(iter.hasNext()) {
                    String key = iter.next();
                    if(key==null || params.get(key)==null) continue;
                    qstr += "&" + key + "=" + java.net.URLEncoder.encode(params.get(key), "ISO-8859-1");
                }
            } catch (UnsupportedEncodingException e) {
                e.printStackTrace();
            }
        }
        
        URL url;
        try {
            url = new URL(app.getPortalAppBaseURL() + script + "?" + qstr);
        } catch (MalformedURLException e) { // should never happen
            e.printStackTrace();
            return null;
        }

            HttpURLConnection urlc = (HttpURLConnection) url.openConnection();
            int code = urlc.getResponseCode();
            System.err.println("Response code: " + code + " Action: " + script);
            
            if(code<=0) {
                throw new IOException("Invalid HTTP server response");
            }
            if(code!=200&&code!=204) {
                return null;
            }
            /* Get the headers */
            physicianID = urlc.getHeaderField("X-Physician-ID");
            physicianRef = urlc.getHeaderField("X-Physician-Ref");
            
            /* Otherwise read body and return as string */
            StringBuilder sb = new StringBuilder();
            InputStream is = urlc.getInputStream();
            byte[] buf = new byte[1024];
            int read = 0;
            while((read = is.read(buf))>0) {
                sb.append(new String(buf,0,read));
            }
            return sb.toString();
    }
    
    public boolean authenticate(String username, String pw) throws JSONException, IOException {
        String s = doGETRequest("pro/authenticate",username,pw,null);
        return s!=null;
    }
    
    /**
     * Returns a list of locations, or null if username/pw is invalid
     */
    public List<JSONObject> getLocations(String username, String pw) throws JSONException, IOException {
        String s = doGETRequest("pro/getLocations",username,pw,null);
        if(s==null) return null;
        JSONArray arr = new JSONArray(s);
        ArrayList<JSONObject> locns = new ArrayList<JSONObject>();
        for(int i=0; i < arr.length(); i++) {
            locns.add(arr.getJSONObject(i));
        }
        return locns;
    }
    
    /**
     * Returns a list of accounts, or null if username/pw is invalid
     */
    public List<JSONObject> getAccounts(String username, String pw, int clinicid) throws JSONException, IOException {
        Map<String,String> params = null;
        if(clinicid>0) {
            params = new HashMap<String, String>();
            params.put("c",Integer.toString(clinicid));
        }
        String s = doGETRequest("pro/getAccounts",username,pw,params);
        if(s==null) return null;
        JSONArray arr = new JSONArray(s);
        ArrayList<JSONObject> accs = new ArrayList<JSONObject>();
        for(int i=0; i < arr.length(); i++) {
            accs.add(arr.getJSONObject(i));
        }
        return accs;
    }
    
    /**
     * Returns a list of report types, or null if username/pw is invalid.
     * Each report type object has an "options" array
     */
    public List<JSONObject> getReportTypes(String username, String pw) throws JSONException, IOException {
        Map<String,String> params = null;
        String s = doGETRequest("pro/getReportTypes",username,pw,params);
        if(s==null) return null;
        JSONArray arr = new JSONArray(s);
        ArrayList<JSONObject> accs = new ArrayList<JSONObject>();
        for(int i=0; i < arr.length(); i++) {
            accs.add(arr.getJSONObject(i));
        }
        return accs;
    }
    
    /**
     * Creates a new report and returns the new report ID, or 0 on failure.
     */
    public int createNewReport(String username, String pw, Map<String,String> params) throws IOException {
        String s = doGETRequest("pro/add/report",username,pw,params);
        if(s==null) return 0;
        try {
            return Integer.parseInt(s);
        } catch(Exception e) {}
        return 0;
    }
    
    /**
     * Creates a new location and returns the new report ID, or 0 on failure.
     */
    public int createNewLocation(String username, String pw, Map<String,String> params) throws IOException {
        String s = doGETRequest("pro/add/location",username,pw,params);
        if(s==null) return 0;
        try {
            return Integer.parseInt(s);
        } catch(Exception e) {}
        return 0;
    }
    
    public boolean uploadFile(String username, String pw, int reportid, String shortCode, String desc, File f, UploadProgressCallback cb) throws IOException {
        
        long length = f.length();
        long totaldone = 0;
        
        URL url;
        try {
            url = new URL(app.getPortalAppBaseURL() + "pro/add/file");
        } catch (MalformedURLException e) { // should never happen
            e.printStackTrace();
            return false;
        }
        HttpURLConnection urlc = (HttpURLConnection) url.openConnection();
        urlc.setDoOutput(true);

        /* Here we create the multipart form request body */
        final String mpBoundary = "----------V2ymHFg03ehbqgZCaKO6jy";
        final String fileType = "audio/wav";

        StringBuilder res = new StringBuilder("--").append(mpBoundary).append("\r\n");
        
        HashMap<String,String> params = new HashMap<String, String>();
        params.put("un",username);
        params.put("pw",pw);
        params.put("r",Integer.toString(reportid));
        params.put("c_file",shortCode);
        params.put("n_file",desc);
        
        Set<String> keys = params.keySet();
        Iterator<String> i = keys.iterator();
        while(i.hasNext()) {
            String key = i.next();
            String value = (String)params.get(key);
            
            System.err.println("Upload Key: " + key + " : " + value );
            
            res.append("Content-Disposition: form-data; name=\"").append(key).append("\"\r\n")    
            .append("\r\n").append(value).append("\r\n")
            .append("--").append(mpBoundary).append("\r\n");
        }
        res.append("Content-Disposition: form-data; name=\"").append("file").append("\"; filename=\"").append(f.getName()).append("\"\r\n") 
           .append("Content-Type: ").append(fileType).append("\r\n\r\n");

        
        String end = "\r\n--" + mpBoundary + "--\r\n";
        
        long contentLength = res.length() + end.length() + f.length();
        
        urlc.setRequestProperty("Content-Type", "multipart/form-data; boundary=" + mpBoundary);
        urlc.setFixedLengthStreamingMode((int)contentLength);
        OutputStream os = urlc.getOutputStream();

        /* Add the starting content */
        os.write(res.toString().getBytes());
        
        /* Add the file bytes */
        InputStream is = new FileInputStream(f);
        byte[] buf = new byte[1024];
        int read = 0;
        while((read=is.read(buf))>0) {
            os.write(buf,0,read);
            totaldone += read;
            if(cb!=null) cb.uploadUpdated(totaldone*1.0/length);
        }
        is.close();
        
        /* Append end boundary */
        os.write(end.getBytes());
        
        int code = urlc.getResponseCode();
        return code==200;
    }
    
    public String getLastPhysicianID() {
        return physicianID;
    }
    public String getLastPhysicianRef() {
        return physicianRef;
    }
    
}
