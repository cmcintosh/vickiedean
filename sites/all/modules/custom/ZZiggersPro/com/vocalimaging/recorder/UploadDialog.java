package com.vocalimaging.recorder;

import java.awt.BorderLayout;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.File;
import java.io.IOException;
import java.net.URI;
import java.net.URL;
import java.util.HashMap;
import java.util.List;

import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JProgressBar;
import javax.swing.JTextField;

import org.json.JSONException;
import org.json.JSONObject;

public class UploadDialog extends JDialog implements ActionListener, UploadProgressCallback {

    private static final long serialVersionUID = 1L;

    private JComboBox reportType;
    private JComboBox reportOptions;
    
    //private ReportTypeWrapper[] types;
    private ReportOptionsWrapper[][] options;
    
    private JComboBox cbAccount;
    private JComboBox cbDeliver;
    private JTextField tfName;
    private JTextField tfContact;
    private JTextField tfPhone;
    private JTextField tfEmail;
    private JButton btnGo;
    private JButton btnCancel;
    private VIRecorder app;
    
    private JPanel buttonPanel;
    private JPanel progPanel;
    
    private JProgressBar progBar;
    private JLabel progLabel;
    
    private String username;
    private String password;
    
    private String accountNum = "";
    private String doctorRef = ""; // FIXME populate from server
    
    private class UploadTask implements Runnable {
        
        private int repid;
        
        public UploadTask(int reportid) {
            this.repid = reportid;
        }
        
        public void run() {
            progLabel.setText("Preparing audio files for upload...");
            File[] outs = app.getFilesHelper().saveAudioFiles(accountNum,doctorRef);
            app.getFilesHelper().saveVListProperties(accountNum,doctorRef);

            /* Do the uploads separately */
            for(int i=0; i < outs.length; i++) {
                /* Upload */
                boolean success = true;
                try {
                    progLabel.setText("Uploading file " + (i+1) + " of " + app.getRecordedFileCount() + "...");
                    success = app.getUploadHelper().uploadFile(username,password,repid,
                                  app.getRecordingShortCode(i),app.getRecordingName(i),outs[i],UploadDialog.this);
                } catch (IOException e1) {
                    // TODO Auto-generated catch block
                    e1.printStackTrace();
                }
                if(!success) {
                    // TODO take what action when upload fails?
                }
            }
            /* If all completed OK, display message and kill entire application */
            uploadCompleted(repid);
        }
    }
    
    public void uploadUpdated(double progress) {
        progBar.setValue((int)(progress*100));
    }
    @SuppressWarnings("unchecked")
    public void uploadCompleted(int reportid) {
        JOptionPane.showMessageDialog(this,"All files have been uploaded. You will now be taken to the \n" +
            "report customisation Web page in your browser.","Upload Completed",JOptionPane.INFORMATION_MESSAGE);

        /* The authentication token to use for login is SHA1("passwordhash/reportid") 
         * where the passwordhash = SHA1("userid/password") */
        String userId = app.getUploadHelper().getLastPhysicianID();
        String token = "";
        try {
            token = Utils.SHA1(Utils.SHA1(userId + "/" + password) + "/" + reportid);
        } catch (Exception e1) {
            e1.printStackTrace();
        }
        String queryStr = "?un=" + username + "&tk=" + token + "&id=" + reportid;
        
        /* Show the browser session: first try JNLP and if that is unavailable, try Desktop */
        boolean success = false;
        try {
            /* These next lines will terminate this block if the javax.jnlp classes are not available */
            Class smc = Class.forName("javax.jnlp.ServiceManager");
            java.lang.reflect.Method m = smc.getMethod("lookup",String.class);
            Object bs = m.invoke(null,"javax.jnlp.BasicService");
            /* The "bs" object is of type javax.jnlp.BasicService */
            Class bsc = Class.forName("javax.jnlp.BasicService");
            m = bsc.getMethod("showDocument",URL.class);
            Boolean b = (Boolean) m.invoke(bs,new URL(app.getPortalReportURL() + queryStr));
            success = b.booleanValue();
            //javax.jnlp.BasicService bs = (javax.jnlp.BasicService)javax.jnlp.ServiceManager.lookup("javax.jnlp.BasicService");
            //success = bs.showDocument(new URL("http://www.connetu.com"));
        } catch(Throwable ue) {}
        
        if(!success) {
            try {
                Class dskc = Class.forName("java.awt.Desktop");
                java.lang.reflect.Method m = dskc.getMethod("getDesktop",(Class[])null);
                Object desk = m.invoke(null,(Object[])null);
                m = dskc.getMethod("browse",URI.class);
                m.invoke(desk,new URI(app.getPortalReportURL() + queryStr));
                success = true;
            } catch (Throwable e) {
                e.printStackTrace();
            }
        }
        
        if(!success) {
            JOptionPane.showMessageDialog(this,"It has not been possible to open your Web browser to customise\n" +
              "the report. Please login to your account at \n" +
              "http://www.vocalimaging.com/ to complete the process.","Browser Error",JOptionPane.ERROR_MESSAGE);
        }
        
        app.shutdown();
    }
    
    private static class JSONComboWrapper {
        protected JSONObject obj;
        
        public JSONComboWrapper(JSONObject obj) {
            this.obj = obj;
        }
        public String toString() {
            try {
                return obj.getString("name");
            } catch (JSONException e) {}
            return null;
        }
        public int getId() {
            try {
                return obj.getInt("id");
            } catch (JSONException e) {}
            return 0;
        }
    }
    
//    private static class AccountsWrapper extends JSONComboWrapper {
//        
//        public AccountsWrapper(JSONObject obj) {
//            super(obj);
//        }
//        public String toString() {
//            try {
//                String s = "#" + obj.getString("accnum") + ": " + obj.getString("name");
//                if(obj.getBoolean("clinic")) s += " (this clinic)";
//                else s += " (your account)";
//                return s;
//            } catch (JSONException e) {}
//            return null;
//        }
//    }
    
    private static class ReportOptionsWrapper extends JSONComboWrapper {
        
        public ReportOptionsWrapper(JSONObject obj) {
            super(obj);
        }
        public String toString() {
            try {
                return obj.getString("name") + " ($" + obj.getString("price") + ")";
            } catch (JSONException e) {}
            return null;
        }
        public int getId() {
            try {
                return obj.getInt("id");
            } catch (JSONException e) {}
            return 0;
        }
    }
    
//    private static class ReportTypeWrapper extends JSONComboWrapper {
//        
//        public ReportTypeWrapper(JSONObject obj) {
//            super(obj);
//        }
//        public String toString() {
//            try {
//                return obj.getString("name");
//            } catch (JSONException e) {}
//            return null;
//        }
//        public int getId() {
//            try {
//                return obj.getInt("id");
//            } catch (JSONException e) {}
//            return 0;
//        }
//    }
    
    private static class LocationWrapper extends JSONComboWrapper {
        
        private int id;
        
        public LocationWrapper(JSONObject obj) {
            super(obj);
            try {
                this.id = obj.getInt("id");
            } catch (JSONException e) {}
        }
        public LocationWrapper(int newid) {
            super(null);
            this.id = newid;
        }
        public String toString() {
            if(id==0) {
                return "Other (specify below)";
            } else {
                try {
                    String s = obj.getString("name") + " (" + obj.getString("email") + ")";
                    return s;
                } catch (JSONException e) {}
                return null;
            }
        }
        public int getId() {
            return id;
        }
    }

    public UploadDialog(VIRecorder parent, String user, String pw) {
        super(parent, "Upload Files", true);
        this.username = user;
        this.password = pw;

        setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
        this.app = parent;

        JPanel panel = new JPanel(new GridBagLayout());
        GridBagConstraints cs = new GridBagConstraints();

        cs.fill = GridBagConstraints.HORIZONTAL;

//        JLabel lbAccount = new JLabel("Billing Account: ");
//        cs.gridx = 0;
//        cs.gridy = 0;
//        cs.gridwidth = 1;
//        panel.add(lbAccount, cs);

        UploadHelper uh = app.getUploadHelper();
        
        int clinicid = app.getClinicID();
        List<JSONObject> obj;
//        try {
//            obj = uh.getAccounts(username,pw,clinicid);
//        } catch (Exception e1) {
//            e1.printStackTrace();
//            return;
//        }
//        Object[] opts = new Object[obj.size()];
//        for(int i=0; i < obj.size(); i++) {
//            opts[i] = new AccountsWrapper(obj.get(i));
//        }
//        
//        cbAccount = new JComboBox(opts);
//        cs.gridx = 1;
//        cs.gridy = 0;
//        cs.gridwidth = 2;
//        panel.add(cbAccount, cs);
        
//        /* Lookup all the report types and options */
//        try {
//            obj = uh.getReportTypes(username,pw);
//        } catch (Exception e1) {
//            e1.printStackTrace();
//            return;
//        }
//        types = new ReportTypeWrapper[obj.size()];
//        options = new ReportOptionsWrapper[obj.size()][];
//        if(obj!=null) {
//            try {
//                for(int i=0; i < obj.size(); i++) {
//                    JSONObject o = obj.get(i);
//                    types[i] = new ReportTypeWrapper(o);
//                    JSONArray opts2 = o.getJSONArray("options");
//                    options[i] = new ReportOptionsWrapper[opts2.length()];
//                    for(int j=0; j < opts2.length(); j++) {
//                        options[i][j] = new ReportOptionsWrapper(opts2.getJSONObject(j));
//                    }
//                }
//            } catch (JSONException e) {
//                e.printStackTrace();
//                return;
//            }
//        }
//        
//        JLabel lbReportType = new JLabel("Report Type: ");
//        cs.gridx = 0;
//        cs.gridy = 1;
//        cs.gridwidth = 1;
//        panel.add(lbReportType,cs);
//        
//        reportType = new JComboBox(types);
//        reportType.addActionListener(this);
//        cs.gridx = 1;
//        cs.gridy = 1;
//        cs.gridwidth = 2;
//        panel.add(reportType,cs);
//        
//        JLabel lbReportOptions = new JLabel("Report Option: ");
//        cs.gridx = 0;
//        cs.gridy = 2;
//        cs.gridwidth = 1;
//        panel.add(lbReportOptions,cs);
//        
//        reportOptions = new JComboBox(options[0]);
//        cs.gridx = 1;
//        cs.gridy = 2;
//        cs.gridwidth = 2;
//        panel.add(reportOptions,cs);
        

        JLabel lbDeliver = new JLabel("Deliver To: ");
        cs.gridx = 0;
        cs.gridy = 3;
        cs.gridwidth = 1;
        panel.add(lbDeliver, cs);

        try {
            obj = uh.getLocations(username, pw);
        } catch (Exception e1) {
            // TODO Auto-generated catch block
            e1.printStackTrace();
            return;
        }
        Object[] opts2 = new Object[obj.size()+1];
        for(int i=0; i < obj.size(); i++) {
            opts2[i] = new LocationWrapper(obj.get(i));
        }
        opts2[obj.size()] = new LocationWrapper(0); // "other"
        
        cbDeliver = new JComboBox(opts2);
        cbDeliver.addActionListener(this);
        cs.gridx = 1;
        cs.gridy = 3;
        cs.gridwidth = 2;
        panel.add(cbDeliver, cs);
        //panel.setBorder(new LineBorder(java.awt.Color.GRAY));

        
        JLabel lbName = new JLabel("Location Name: ");
        cs.gridx = 0;
        cs.gridy = 4;
        cs.gridwidth = 1;
        panel.add(lbName, cs);
        
        tfName = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 4;
        cs.gridwidth = 2;
        panel.add(tfName, cs);
        
        JLabel lbContact = new JLabel("Contact Person: ");
        cs.gridx = 0;
        cs.gridy = 5;
        cs.gridwidth = 1;
        panel.add(lbContact, cs);
        
        tfContact = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 5;
        cs.gridwidth = 2;
        panel.add(tfContact, cs);
        
        JLabel lbPhone = new JLabel("Contact Phone: ");
        cs.gridx = 0;
        cs.gridy = 6;
        cs.gridwidth = 1;
        panel.add(lbPhone, cs);
        
        tfPhone = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 6;
        cs.gridwidth = 2;
        panel.add(tfPhone, cs);
        
        JLabel lbEmail = new JLabel("Contact E-mail: ");
        cs.gridx = 0;
        cs.gridy = 7;
        cs.gridwidth = 1;
        panel.add(lbEmail, cs);
        
        tfEmail = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 7;
        cs.gridwidth = 2;
        panel.add(tfEmail, cs);
        
        refreshLocations();
        
        /* Create button panel */
        btnGo = new JButton("Continue Upload");
        btnGo.addActionListener(this);
        btnCancel = new JButton("Cancel");
        btnCancel.addActionListener(this);
        buttonPanel = new JPanel();
        buttonPanel.add(btnGo);
        buttonPanel.add(btnCancel);
        
        /* Create progress panel */
        progLabel = new JLabel();
        progBar = new JProgressBar(0,100);
        progPanel = new JPanel();
        progPanel.setLayout(new GridLayout(2,1));
        progPanel.add(progLabel);
        progPanel.add(progBar);
        
        getContentPane().add(panel, BorderLayout.CENTER);
        getContentPane().add(buttonPanel, BorderLayout.PAGE_END);
        pack();
        setResizable(false);
        setLocationRelativeTo(parent);
    }
    
    private void refreshLocations() {
        LocationWrapper w = (LocationWrapper) cbDeliver.getSelectedItem();
        if(w.getId()==0) {
            /* New location: clear and enable all fields */
            tfName.setText("");
            tfName.setEnabled(true);
            tfContact.setText("");
            tfContact.setEnabled(true);
            tfPhone.setText("");
            tfPhone.setEnabled(true);
            tfEmail.setText("");
            tfEmail.setEnabled(true);
        } else {
            /* Existing location: update values and disable all fields */
            try {
                tfName.setText(w.obj.getString("name"));
                tfName.setEnabled(false);
                tfContact.setText(w.obj.getString("contact"));
                tfContact.setEnabled(false);
                tfPhone.setText(w.obj.getString("phone"));
                tfPhone.setEnabled(false);
                tfEmail.setText(w.obj.getString("email"));
                tfEmail.setEnabled(false);
            } catch (JSONException e1) {}
        }
    }
    
    private void refreshReportOptions() {
        /* Get index of the selected report */
        int index = reportType.getSelectedIndex();
        Object[] opts = options[index];
        reportOptions.removeAllItems();
        for(int i=0; i < opts.length; i++) {
            reportOptions.addItem(opts[i]);
        }
    }
    
//    public boolean validateLocations() {
//        LocationWrapper w = (LocationWrapper) cbDeliver.getSelectedItem();
//        if(w.getId()!=0) return true;
//        /* Otherwise validate */
//        if(tfName.getText().length()==0) return false;
//        if(tfContact.getText().length()==0) return false;
//        if(tfPhone.getText().length()==0) return false;
//        if(tfEmail.getText().length()==0) return false;
//        /* Validate e-mail */
//        
//    }

    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==btnCancel) {
            this.dispose();
            return;
        }
        if(e.getSource()==cbDeliver) {
            refreshLocations();
        }
        if(e.getSource()==reportType) {
            refreshReportOptions();
        }
        if(e.getSource()==btnGo) {
            int locnid = ((LocationWrapper)cbDeliver.getSelectedItem()).getId();
            /* (1) If a new location, submit that first and get ID */
            if(locnid==0) {
                /* Validate fields - if an error, popup a message dialog and abort */
                HashMap<String,String> params = new HashMap<String, String>();
                params.put("n",tfName.getText());
                params.put("c",tfContact.getText());
                params.put("p",tfPhone.getText());
                params.put("e",tfEmail.getText());
                try {
                    locnid = app.getUploadHelper().createNewLocation(username, password, params);
                } catch (IOException e1) {
                    // TODO Auto-generated catch block
                    e1.printStackTrace();
                }
                if(locnid==0) {
                    /* Abort */
                    JOptionPane.showMessageDialog(this,"All location fields must be completed and contain valid data!","Please Complete Location",JOptionPane.WARNING_MESSAGE);
                    return;
                }
            }
            /* (2) Submit a new report and get the new report ID */
            HashMap<String,String> params = new HashMap<String,String>();
            //params.put("a",cbAccount.getSelectedItem()==null ? "0" : Integer.toString(((AccountsWrapper) cbAccount.getSelectedItem()).getId()));
            params.put("d",locnid>0 ? "0" : "1"); // fix to a supplied location for now (unless error)
            params.put("l",Integer.toString(locnid));
            params.put("p",app.getClientID());
            params.put("g",app.getGender());
            params.put("r",app.getAgeRange());
            params.put("c",Integer.toString(app.getClinicID()));
            //if(app.isExpress()) params.put("x","1");
            //params.put("m",app.getPromoCode());
            //params.put("o",app.getClientOptions());
            //params.put("t",app.getReportType());
            //params.put("t",Integer.toString(((ReportOptionsWrapper) reportOptions.getSelectedItem()).getId()));
            int repid=0;
            try {
                repid = app.getUploadHelper().createNewReport(username, password, params);
            } catch (IOException e1) {
                // TODO Auto-generated catch block
                e1.printStackTrace();
            }
            if(repid==0) {
                // TODO error handling
                return;
            }
            
//            try {
//                accountNum = ((AccountsWrapper)(cbAccount.getSelectedItem())).obj.getString("accnum");
//            } catch (JSONException e2) {
//                // TODO Auto-generated catch block
//                e2.printStackTrace();
//            }
            doctorRef = app.getUploadHelper().getLastPhysicianRef();
            
            /* (3) Encode each file into WAV and upload, showing progress dialog, then move to archive */
            getContentPane().remove(buttonPanel);
            getContentPane().add(progPanel, BorderLayout.PAGE_END); // change the view to a progress bar
            getContentPane().validate();
            
            UploadTask task = new UploadTask(repid);
            Thread t = new Thread(task);
            t.start();
            
//            for(int i=0; i < app.getRecordedFileCount(); i++) {
//                File rawf = app.getRecordingFile(i);
//                File out = new File(rawf.getParent(),app.getFinalRecordingFileName(accountNum,doctorRef,i));
//                /* Transcode to WAV */
//                try {
//                    AudioInputStream ais = new AudioInputStream(new FileInputStream(rawf),AudioRecordHelper.AUDIO_FORMAT,rawf.length());
//                    AudioSystem.write(ais,AudioFileFormat.Type.WAVE,out);
//                } catch (IOException e1) {
//                    // TODO Auto-generated catch block
//                    e1.printStackTrace();
//                }
//                /* Upload */
//                boolean success = true;
//                try {
//                    progLabel.setText("Uploading file " + (i+1) + " of " + app.getRecordedFileCount() + "...");
//                    success = app.getUploadHelper().uploadFile(username,password,repid,out,this);
//                } catch (IOException e1) {
//                    // TODO Auto-generated catch block
//                    e1.printStackTrace();
//                }
//                if(!success) {
//                    // TODO take what action when upload fails?
//                }
//                /* Move the file to the archive location */
//                out.renameTo(app.getArchiveFile(accountNum,doctorRef,i));
//            }
//            
//            /* If all completed OK, display message and kill entire application */
//            JOptionPane.showMessageDialog(this,"All files have been uploaded. This recording session will now close.","Upload Completed",JOptionPane.INFORMATION_MESSAGE);
//            System.exit(0);
        }
    }

}
