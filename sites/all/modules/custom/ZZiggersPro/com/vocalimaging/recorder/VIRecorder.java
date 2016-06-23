package com.vocalimaging.recorder;

import java.awt.Color;
import java.awt.Component;
import java.awt.Dimension;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.Insets;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.io.PrintStream;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Properties;
import java.util.Set;

import javax.imageio.ImageIO;
import javax.sound.sampled.AudioFormat;
import javax.swing.BorderFactory;
import javax.swing.Box;
import javax.swing.ButtonGroup;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenu;
import javax.swing.JMenuBar;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JProgressBar;
import javax.swing.JRadioButton;
import javax.swing.JTextField;
import javax.swing.border.Border;
import javax.swing.border.TitledBorder;

import com.vocalimaging.recorder.AudioPlaybackHelper.MixerSourceLine;
import com.vocalimaging.recorder.AudioRecordHelper.MixerTargetLine;

public class VIRecorder extends JFrame implements AudioRecorderCallback, AudioPlaybackCallback, ActionListener {

    private static final long serialVersionUID = 1L;
    
    private static final String DEFAULT_PORTAL_APP_URL = "http://zigpro.wembassy.com/";
    private static final String DEFAULT_PORTAL_REPORT_URL = "http://zigpro.wembassy.com/pro/customreport";
    
    /* Configurable application properties */
    private Properties props;
    private int clinicID;
    private String ARCHIVE_DIR;
    
    private String[] RECORDINGS = {"Ambient Room","Base","Best Case","Worst Case"};
    private String[] RECORDINGS_FILENAMES = {"A","B","BD","S"};
    private int[] RECORDINGS_MINLENGTHS = {1,5,5,5}; //10,50,50,50}; // in seconds
    private int RECORDINGS_CUSTOM = 0; // count of how many custom recordings there are
    private double quietThreshold = -20; // -20dB is the default "low volume" threshold 
    private String portalAppURL = DEFAULT_PORTAL_APP_URL;
    private String portalReportURL = DEFAULT_PORTAL_REPORT_URL;
    
    private long FILE_UID;
    private String FILE_DATE;
    
    //private JMenuItem accountSettingsMenuItem;
    //private JMenuItem audioSettingsMenuItem;
    private JMenuItem exitMenuItem;
    //private JMenuItem indexMenuItem;
    //private JMenuItem aboutMenuItem;
    
    private AudioRecordHelper audioHelper;
    private AudioPlaybackHelper audioPlayHelper;
    private JComboBox audioInputsCombo;
    private JProgressBar audioMeter;
    private JButton audioTestButton;
    private JComboBox audioOutputsCombo;
    private JButton audioTestPlayButton;
    
    private JTextField clientID;
    private ButtonGroup gender;
    private JRadioButton gender_m;
    private JRadioButton gender_f;
    private JComboBox age;
    //private ButtonGroup typeReport;
    private JRadioButton type_f;
    private JRadioButton type_m;
    private JRadioButton type_n;
    private JTextField promoCode;
    private JCheckBox expressService;
    private JTextField options;
    
    private JLabel[] recordingLabels;
    private JPanel recordingPanel;
    private JButton[] recordButtons;
    private JProgressBar[] recordMeters;
    private JLabel[] recordStatus;
    private JButton[] playButtons;
    
    private JButton uploadButton;
    private Box addDeleteRecordingsBox;
    private JButton addRecordingButton;
    private JButton deleteRecordingButton;
    //private JButton exitButton;
    
    private double[] recordingLengths;
    private int currentlyRecording; // keeps track of which recording is in progress, -1 for none, 0 for test, 1 for 1st file, 2 for 2nd file eetc.
    
    //private UserHelper userHelper;
    private LoginDialog loginDialog;
    private OfflineDialog offlineDialog;
    /* We're not using the loginTimer for now */
    //private LoginTimer loginTimer;
    private UploadHelper uploadHelper;
    private FilesHelper filesHelper;
    
    private Border createStepBorder(String title) {
        Border blackline = BorderFactory.createLineBorder(Color.black);
        TitledBorder t = BorderFactory.createTitledBorder(blackline,title);
        Border outer = BorderFactory.createCompoundBorder(BorderFactory.createEmptyBorder(0,0,0,5),t);
        return BorderFactory.createCompoundBorder(outer,BorderFactory.createEmptyBorder(2,10,5,10));
    }
    
    private static void setBackground(Component c) {
        c.setBackground(Color.WHITE);
    }
    
    public VIRecorder() {
        super("Vocal Imaging Recorder");
        try {
            BufferedImage miniIcon = ImageIO.read(getClass().getResourceAsStream("/appicon.jpg"));
            setIconImage(miniIcon);
        } catch(IOException e) {
            e.printStackTrace();
        }
        loadProperties();
        FILE_UID = System.currentTimeMillis();
        SimpleDateFormat sdf = new SimpleDateFormat("MMddyy");
        FILE_DATE = sdf.format(new Date());
        
        /* If the config tells us to pop up the audio settings dialog, do it now */
        if(Boolean.parseBoolean(props.getProperty("audiosettings","false"))) {
            AudioSettingsDialog asd = new AudioSettingsDialog(this);
            asd.setVisible(true);
            /* Will block here until it returns */
            if(!asd.isCancelled()) {
                props.setProperty("samplerate",Integer.toString(asd.getSampleRate()));
                props.setProperty("samplebits",Integer.toString(asd.getSampleBits()));
                props.setProperty("numchannels",Integer.toString(asd.getChannels()));
                int voltmp = asd.getQuietThreshold();
                props.setProperty("lowthreshold",Integer.toString(voltmp));
                if(voltmp<0) quietThreshold = voltmp;
                else quietThreshold = Double.NEGATIVE_INFINITY;
            }
        }
        audioHelper = new AudioRecordHelper(getAudioFormat());
        audioPlayHelper = new AudioPlaybackHelper(getAudioFormat());
        
        
        recordingLengths = new double[RECORDINGS.length];
        //userHelper = new UserHelper();
        loginDialog = new LoginDialog(this);
        //loginTimer = new LoginTimer(this);
        //Timer t = new Timer();
        //t.schedule(loginTimer,0,30000);
        VIRecorder.setBackground(getContentPane());
        
        //accountSettingsMenuItem = new JMenuItem("Account Settings");
        //audioSettingsMenuItem = new JMenuItem("Audio Settings");
        exitMenuItem = new JMenuItem("Exit");
        exitMenuItem.addActionListener(this);
        //indexMenuItem = new JMenuItem("Index");
        //aboutMenuItem = new JMenuItem("About");
        JMenuBar mb = new JMenuBar();
        JMenu m = new JMenu("File");
        //m.add(accountSettingsMenuItem);
        //m.add(audioSettingsMenuItem);
        m.add(exitMenuItem);
        mb.add(m);
        /*m = new JMenu("Help");
        m.add(indexMenuItem);
        m.add(aboutMenuItem);
        mb.add(m);*/
//        setJMenuBar(mb);
        
        Box b = Box.createVerticalBox();
        b.setAlignmentX(Component.LEFT_ALIGNMENT);
        
        /* Step 1: Audio Input */
        Box b3 = Box.createHorizontalBox();
        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
        audioOutputsCombo = new JComboBox(audioPlayHelper.getAudioOutputs().toArray());
        audioTestPlayButton = new JButton("Test Playback");
        audioTestPlayButton.addActionListener(this);
        b3.add(audioOutputsCombo);
        b3.add(Box.createHorizontalStrut(4));
        b3.add(audioTestPlayButton);
        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        
        JLabel label = new JLabel("Select your audio input, press Test Record and ensure the red meter follows your voice:");
        label.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        audioInputsCombo = new JComboBox(audioHelper.getAudioInputs().toArray());
        audioMeter = new JProgressBar();
        audioMeter.setForeground(java.awt.Color.RED);
        audioTestButton = new JButton("Test Record");
        //audioTestButton.setBackground(java.awt.Color.RED);
        audioTestButton.addActionListener(this);
        JPanel testPanel = new JPanel(new GridBagLayout()); //FlowLayout(FlowLayout.LEFT));
        VIRecorder.setBackground(testPanel);
        GridBagConstraints c = new GridBagConstraints();
        c.insets = new Insets(2,2,2,2);
        c.fill = GridBagConstraints.BOTH;
        c.anchor = GridBagConstraints.FIRST_LINE_START;
        c.gridx = 0;
        c.gridy = 0;
        testPanel.add(audioInputsCombo,c);
        c.gridx = 1;
        testPanel.add(audioTestButton,c);
        c.gridx = 2;
        testPanel.add(audioMeter,c);
        c.gridx = 3;
        c.weightx = 1;
        JPanel tmpPanel = new JPanel();
        VIRecorder.setBackground(tmpPanel);
        testPanel.add(tmpPanel,c);
        testPanel.setAlignmentX(JPanel.LEFT_ALIGNMENT);
        
        Box b2 = Box.createVerticalBox();
        b2.setAlignmentX(Box.LEFT_ALIGNMENT);
        //TitledBorder title = BorderFactory.createTitledBorder("Step 1: Select and Confirm Audio Input Device");
        //b2.setBorder(title);
        b2.setBorder(createStepBorder("Step 1: Select and Confirm Audio Recording and Playback Devices"));
        b2.add(label);
        b2.add(Box.createVerticalStrut(2));
        b2.add(testPanel);
        b2.add(Box.createVerticalStrut(2));
        label = new JLabel("If the red meter does not move with your voice, press Stop Test and choose another input from the list");
        b2.add(label);
        b2.add(Box.createVerticalStrut(10));
        label = new JLabel("Select your audio output below and press Test Playback:");
        b2.add(label);
        b2.add(Box.createVerticalStrut(4));
        b2.add(b3);
        b2.add(Box.createVerticalStrut(4));
        label = new JLabel("If you do not hear a steady continuous tone, press Stop Test and choose another output from the list");
        b2.add(label);
        //b2.add(Box.createVerticalGlue());
        b.add(Box.createVerticalStrut(10));
        b.add(b2);
        b.add(Box.createVerticalStrut(10));

        
        /* Step 2: Enter personal details */
        b2 = Box.createVerticalBox();
        b2.setAlignmentX(Box.LEFT_ALIGNMENT);
        //TitledBorder title = BorderFactory.createTitledBorder("Step 2: Enter Client Details (all required)");
        //b2.setBorder(title);
        b2.setBorder(createStepBorder("Step 2: Enter Client Details (all required)"));
        
        //label = new JLabel("Enter the following anonymous data (for your legal protection, do not use the client's name):");
        //b2.add(label);
        //b2.add(Box.createVerticalStrut(5));
        
        b3 = Box.createHorizontalBox();
        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
        clientID = new JTextField(60);
        label = new JLabel("Client ID: ");
        b3.add(label);
        b3.add(clientID);
        b3.add(Box.createHorizontalStrut(10));
        label = new JLabel("Gender: ");
        b3.add(label);
        gender = new ButtonGroup();
        gender_m = new JRadioButton("Male");
        gender.add(gender_m);
        VIRecorder.setBackground(gender_m);
        b3.add(gender_m);
        gender_f = new JRadioButton("Female");
        gender.add(gender_f);
        VIRecorder.setBackground(gender_f);
        b3.add(gender_f);
        
//        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
//        b2.add(b3);
//        b2.add(Box.createVerticalStrut(2));
        
//        b3 = Box.createHorizontalBox();
//        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
//        label = new JLabel("Gender: ");
//        b3.add(label);
//        gender = new ButtonGroup();
//        gender_m = new JRadioButton("Male");
//        gender.add(gender_m);
//        VIRecorder.setBackground(gender_m);
//        b3.add(gender_m);
//        gender_f = new JRadioButton("Female");
//        gender.add(gender_f);
//        VIRecorder.setBackground(gender_f);
//        b3.add(gender_f);
        
//        rb = new JRadioButton("Child Male");
//        ageGender.add(rb);
//        b3.add(rb);
//        rb = new JRadioButton("Child Female");
//        ageGender.add(rb);
//        b3.add(rb);
        String[] ages = { "(select one)","5-10","11-15","16-25","26-39","40-60","61-75","76+" };
        age = new JComboBox(ages);
        label = new JLabel(" Age: ");
        b3.add(Box.createHorizontalStrut(5));
        b3.add(label);
        b3.add(age);

        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        b2.add(b3);
        b2.add(Box.createVerticalStrut(2));
        
//        b3 = Box.createHorizontalBox();
//        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
//        label = new JLabel("Type Report: ");
//        b3.add(label);
//        typeReport = new ButtonGroup();
//        type_f = new JRadioButton("Full");
//        typeReport.add(type_f);
//        type_f.setSelected(true);
//        VIRecorder.setBackground(type_f);
//        b3.add(type_f);
//        type_m = new JRadioButton("Mini");
//        typeReport.add(type_m);
//        VIRecorder.setBackground(type_m);
//        b3.add(type_m);
//        type_n = new JRadioButton("Nutritional");
//        typeReport.add(type_n);
//        VIRecorder.setBackground(type_n);
//        b3.add(type_n);
//        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
//        b2.add(b3);
        
        b.add(b2);
        b.add(Box.createVerticalStrut(10));
        
        /* Step 3: Options */
        b2 = Box.createVerticalBox();
        b2.setAlignmentX(Box.LEFT_ALIGNMENT);
        //title = BorderFactory.createTitledBorder("Step 3: Enter Options (all optional)");
        //b2.setBorder(title);
        b2.setBorder(createStepBorder("Step 3: Enter Options (all optional)"));
        
        b3 = Box.createHorizontalBox();
        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
        label = new JLabel("Promo Code: ");
        b3.add(label);
        promoCode = new JTextField(40);
        b3.add(promoCode);
        label = new JLabel(" Express Service?");
        b3.add(label);
        expressService = new JCheckBox();
        VIRecorder.setBackground(expressService);
        b3.add(expressService);
        //b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        //b2.add(b3);
        
        //b2.add(Box.createVerticalStrut(5));
        //b3 = Box.createHorizontalBox();
        //b3.setAlignmentX(Box.LEFT_ALIGNMENT);
        label = new JLabel(" Options: ");
        b3.add(label);
        options = new JTextField(100);
        b3.add(options);
        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        b2.add(b3);
        
//        b.add(b2);
//        b.add(Box.createVerticalStrut(10));
        
        /* Step 4: Recordings */
        //JPanel recordLogoPanel = new JPanel(new java.awt.BorderLayout());
        //recordLogoPanel.setBorder(createStepBorder("Step 4: Record Audio"));
        //VIRecorder.setBackground(recordLogoPanel);
        
//        b2 = Box.createVerticalBox();
//        b2.setAlignmentX(Box.LEFT_ALIGNMENT);
//        b2.setBorder(createStepBorder("Step 4: Record Audio"));
        
        //title = BorderFactory.createTitledBorder("Step 4: Record Audio");
        //b2.setBorder(title);
        label = new JLabel("You must record each one of the following scenarios:");
        //b2.add(label);
        //b2.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        
        JPanel p = new JPanel();
        recordingPanel = p;
        p.setAlignmentX(JPanel.LEFT_ALIGNMENT);
        p.setBorder(createStepBorder("Step 3: Record Audio and Upload Data"));
        VIRecorder.setBackground(p);
        p.setLayout(new GridBagLayout());
        c = new GridBagConstraints();
        c.insets = new Insets(2,2,2,2);
        c.fill = GridBagConstraints.BOTH;
        c.anchor = GridBagConstraints.FIRST_LINE_START;
        /* Add instruction label */
        c.gridx = 0;
        c.gridy = 0;
        c.gridwidth = 5;
        c.gridheight = 1;
        p.add(label,c);
        
        c.gridwidth = 1; // reset to default
        /* Add left column labels */
        recordingLabels = new JLabel[RECORDINGS.length];
        for(int i=0; i < RECORDINGS.length; i++) {
            recordingLabels[i] = new JLabel(RECORDINGS[i],JLabel.RIGHT);
            c.gridx = 0;
            c.gridy = i+1;
            p.add(recordingLabels[i],c);
        }
        c.anchor = GridBagConstraints.FIRST_LINE_START;
        /* Add second column Record buttons */
        recordButtons = initRecordButtons();
        for(int i=0; i < recordButtons.length; i++) {
            c.gridx = 1;
            c.gridy = i+1;
            p.add(recordButtons[i],c);
        }
        /* Add third column level meters */
        recordMeters = initRecordMeters();
        for(int i=0; i < recordMeters.length; i++) {
            c.gridx = 2;
            c.gridy = i+1;
            p.add(recordMeters[i],c);
        }
        /* Add play buttons */
        playButtons = initPlayButtons();
        for(int i=0; i < playButtons.length; i++) {
            c.gridx = 3;
            c.gridy = i+1;
            p.add(playButtons[i],c);
        }
        /* Add four column labels */
        recordStatus = initRecordStatus();
        for(int i=0; i < recordStatus.length; i++) {
            c.gridx = 4;
            c.gridy = i+1;
            p.add(recordStatus[i],c);
        }
        /* Final filler column */
        try {
            BufferedImage inLogo = ImageIO.read(getClass().getResourceAsStream("/inlogo.jpg"));
            JLabel logoLabel = new JLabel(new ImageIcon(inLogo),JLabel.RIGHT);
            c.gridx = 5;
            c.gridy = 0;
            c.weightx = 1.0;
            c.gridheight = GridBagConstraints.REMAINDER;
            c.gridwidth = 1;
            c.anchor = GridBagConstraints.WEST;
            //recordLogoPanel.add(logoLabel,java.awt.BorderLayout.EAST);
            p.add(logoLabel,c);
        } catch(IOException e) {
            e.printStackTrace();
        }
        
        addRecordingButton = new JButton("Add Another");
        addRecordingButton.addActionListener(this);
        
        deleteRecordingButton = new JButton("Delete Last");
        deleteRecordingButton.addActionListener(this);
        deleteRecordingButton.setEnabled(false);
        
        uploadButton = new JButton("Upload Files To vocalimaging.com");
        uploadButton.setEnabled(false);
        uploadButton.addActionListener(this);
        
        addDeleteRecordingsBox = Box.createHorizontalBox();
        VIRecorder.setBackground(addDeleteRecordingsBox);
        addDeleteRecordingsBox.add(addRecordingButton);
        addDeleteRecordingsBox.add(Box.createHorizontalStrut(10));
        addDeleteRecordingsBox.add(deleteRecordingButton);
        
        c.gridy = recordStatus.length+1;
        c.gridx = 1;
        c.fill = GridBagConstraints.NONE;
        c.gridheight = 1;
        c.gridwidth = 2;
        c.weightx = 0;
        p.add(addDeleteRecordingsBox,c);
        
        c.gridy = recordStatus.length+2;
        c.gridx = 1;
        c.fill = GridBagConstraints.NONE;
        c.gridheight = 1;
        c.gridwidth = 2;
        c.weightx = 0;
        p.add(uploadButton,c);
        
        
        
//        for(int i=0; i<3; i++) {
//            c.gridx = 5;
//            c.gridy = i;
//            c.fill = GridBagConstraints.HORIZONTAL;
//            c.weightx = 1.0;
//            tmpPanel = new JPanel();
//            VIRecorder.setBackground(tmpPanel);
//            p.add(tmpPanel,c);
//        }
        //b2.add(p);
        
        //recordLogoPanel.add(b2,java.awt.BorderLayout.CENTER);
        
        b.add(p); //recordLogoPanel);
        b.add(Box.createVerticalStrut(10));
        
        /* Step 5: upload */
        b2 = Box.createVerticalBox();
        b2.setAlignmentX(Box.LEFT_ALIGNMENT);
        //title = BorderFactory.createTitledBorder("Step 5: Upload All Data");
        //b2.setBorder(title);
        b2.setBorder(createStepBorder("Step 5: Upload All Data"));
        
        label = new JLabel("Press the button below to upload all collected data to us:");
        b2.add(label);
        b2.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
        
        b3 = Box.createHorizontalBox();
        b3.setAlignmentX(Box.LEFT_ALIGNMENT);
//        b3.add(uploadButton);
        b3.add(Box.createHorizontalStrut(20));
        //exitButton = new JButton("Exit");
        //exitButton.addActionListener(this);
        //b2.add(exitButton);
//        b3.add(new Box.Filler(new Dimension(0,5),new Dimension(2000,5),new Dimension(2000,5)));
//        b2.add(b3);
//        b.add(b2);
        
        b.add(new Box.Filler(new Dimension(10,10),new Dimension(10,10),new Dimension(10,10)));
        b.add(new JLabel("Copyright \u00A9 2011 Vocal Imaging"));
        
        Box.Filler f = new Box.Filler(new Dimension(10,0),new Dimension(10,2000),new Dimension(10,2000));
        b.add(f);
        add(b);
        
        setSize(750,600);
        setMinimumSize(new Dimension(700,600));
        setDefaultCloseOperation(JFrame.DO_NOTHING_ON_CLOSE);
        addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                VIRecorder.this.shutdown();
            }
        });
        setVisible(true);
        
        //loginDialog.setVisible(true);
        
        offlineDialog = new OfflineDialog(this);
        uploadHelper = new UploadHelper(this);
        filesHelper = new FilesHelper(this);
    }
    
    private void loadProperties() {
        props = new Properties();
        try {
            //props.load(new FileInputStream("config.props"));
            props.load(getClass().getResourceAsStream("/config.properties"));
        } catch(IOException e) {
            e.printStackTrace();
        }
        /* Check system properties */
        Properties sysprops = System.getProperties();
        Set<Object> syskeys = sysprops.keySet();
        for(Object key : syskeys) {
            if(!(key instanceof String)) continue;
            String k = (String) key;
            if(k.startsWith("jnlp.virecorder.")) {
                props.setProperty(k.substring(16),sysprops.getProperty(k));
            } else if(k.startsWith("virecorder.")) {
                props.setProperty(k.substring(11),sysprops.getProperty(k));
            }
        }
        //System.err.println(props.toString());
        /* Parse default properties */
        try {
            clinicID = Integer.parseInt(props.getProperty("clinic","0"));
        } catch(NumberFormatException e) {
            e.printStackTrace();
        }
        String sep = System.getProperty("file.separator") ;
        String archivetmp = System.getProperty("user.home") + sep + "VocalImaging" + sep;
        ARCHIVE_DIR = props.getProperty("archivedir",archivetmp);
        if(ARCHIVE_DIR.endsWith(sep)) ARCHIVE_DIR = ARCHIVE_DIR + sep;
        File f = new File(ARCHIVE_DIR);
        if(!f.exists()) f.mkdirs();
        String[] labels = null;
        String[] suffixes = null;
        int[] lengths = null;
        if(props.containsKey("recordlabel")) {
            labels = props.getProperty("recordlabel").split("\\s*,\\s*");
        }
        if(props.containsKey("recordsuffix")) {
            suffixes = props.getProperty("recordsuffix").split("\\s*,\\s*");
        }
        if(props.containsKey("recordmin")) {
            String[] tmp = props.getProperty("recordmin").split("\\s*,\\s*");
            lengths = new int[tmp.length];
            for(int i=0; i < tmp.length; i++) {
                try {
                    lengths[i] = Integer.parseInt(tmp[i]);
                } catch (NumberFormatException e) {
                    System.err.println("recordmin property has non-integer value");
                }
                if(lengths[i]<0) lengths[i] = 0;
            }
        }
        /* Check that all the arrays still have the same lengths */
        if(labels!=null && suffixes!=null && lengths!=null) {
            if(labels.length==suffixes.length && suffixes.length==lengths.length) {
                RECORDINGS = labels;
                RECORDINGS_FILENAMES = suffixes;
                RECORDINGS_MINLENGTHS = lengths;
            } else {
                System.err.println("recordlabel, recordsuffix and recordmin properties must have the same number of entries");
            }
        }
        /* Decibel "low volume" threshold */
        try {
            double voltmp = Double.parseDouble(props.getProperty("lowthreshold","-20"));
            if(voltmp<0) quietThreshold = voltmp;
            else quietThreshold = Double.NEGATIVE_INFINITY;
        } catch (NumberFormatException e) {
            e.printStackTrace();
        }
        String tmp = props.getProperty("portalappurl");
        if(tmp!=null && tmp.length()>0) portalAppURL = tmp;
        tmp = props.getProperty("portalreporturl");
        if(tmp!=null && tmp.length()>0) portalReportURL = tmp;
        //System.err.println("loadProperties() set portalappurl=" + portalAppURL);
        //System.err.println("loadProperties() set portalreporturl=" + portalReportURL);
    }
    public String getProperty(String name) {
        return props.getProperty(name);
    }
    public int getClinicID() {
        return clinicID;
    }
    public double getQuietThreshold() {
        return quietThreshold;
    }
    public AudioFormat getAudioFormat() {
        int rate = Integer.parseInt(props.getProperty("samplerate","22050"));
        int bits = Integer.parseInt(props.getProperty("samplebits","16"));
        int chan = Integer.parseInt(props.getProperty("numchannels","1"));
        return new AudioFormat(rate,bits,chan,true,false); // signed and little endian
    }
    public String getPortalAppBaseURL() {
        return portalAppURL;
    }
    public String getPortalReportURL() {
        return portalReportURL;
    }
    
    public UploadHelper getUploadHelper() {
        return uploadHelper;
    }
    public FilesHelper getFilesHelper() {
        return filesHelper;
    }
    
    public String getClientID() {
        return clientID.getText();
    }
    public String getGender() {
        if(gender_m.isSelected()) return "M";
        else if(gender_f.isSelected()) return "F";
        return "";
    }
    public String getAgeRange() {
        return (String) age.getSelectedItem();
    }
    
    public void showLoginDialog() {
        loginDialog.resetAndShow();
    }
    public void showOfflineDialog() {
        offlineDialog.setVisible(true);
    }
    public void showUploadDialog() {
        UploadDialog ud = new UploadDialog(this,loginDialog.getLoggedInUsername(),loginDialog.getLoggedInPassword());
        ud.setVisible(true); // modal blocking
    }
    
    private JButton[] initRecordButtons() {
        JButton[] arr = new JButton[RECORDINGS.length];
        for(int i=0; i < arr.length; i++) {
            arr[i] = new JButton("Record");
            arr[i].addActionListener(this);
        }
        return arr;
    }
    
    private JButton[] initPlayButtons() {
        JButton[] arr = new JButton[RECORDINGS.length];
        for(int i=0; i < arr.length; i++) {
            arr[i] = new JButton("Play");
            arr[i].addActionListener(this);
            //arr[i].setEnabled(false);
        }
        return arr;
    }
    
    private JProgressBar[] initRecordMeters() {
        JProgressBar[] arr = new JProgressBar[RECORDINGS.length];
        for(int i=0; i < arr.length; i++) {
            arr[i] = new JProgressBar();
            arr[i].setForeground(java.awt.Color.RED);
            //arr[i].addActionListener(this);
        }
        return arr;
    }
    
    private JLabel[] initRecordStatus() {
        JLabel[] arr = new JLabel[RECORDINGS.length];
        for(int i=0; i < arr.length; i++) {
            arr[i] = new JLabel("Press Record to begin");
            arr[i].setForeground(Color.RED);
            //arr[i].addActionListener(this);
        }
        return arr;
    }
    
    private String formatTime(int i) {
        int secs = (int) Math.ceil(recordingLengths[i]);
        int mins = 0;
        String s = secs + "s";
        if(secs>60) {
            mins = secs/60;
            secs = secs%60;
            s = mins + "m" + secs + "s";
        }
        return s;
    }
    
    /**
     * This method resets all buttons, labels and colours
     * to their proper state after an action has occurred.
     * It makes sense to do this all in one place,
     * even if this is a little less than optimal.
     */
    private void resetButtonState() {
        /* 
         * If something is recording or playing, then disable all buttons
         * except that one.
         */
        boolean comboson = (currentlyRecording>=0 && (audioHelper.isRecording()||audioPlayHelper.isPlaying()));
        audioInputsCombo.setEnabled(!comboson);
        audioOutputsCombo.setEnabled(!comboson);
        if(currentlyRecording>=0 && audioHelper.isRecording()) {
            /* Something is recording - could be a listed item or the test */
            audioTestPlayButton.setEnabled(false);
            uploadButton.setEnabled(false);
            addRecordingButton.setEnabled(false);
            deleteRecordingButton.setEnabled(false);
            if(currentlyRecording==0) {
                audioTestButton.setEnabled(true);
                audioTestButton.setText("Stop Test");
                for(int i=0; i < recordButtons.length; i++) {
                    recordButtons[i].setEnabled(false);
                    playButtons[i].setEnabled(false);
                }
            } else {
                audioTestButton.setEnabled(false);
                recordMeters[currentlyRecording-1].setForeground(Color.RED);
                for(int i=0; i < recordButtons.length; i++) {
                    if(i+1==currentlyRecording) {
                        recordButtons[i].setEnabled(true);
                        recordButtons[i].setText(RECORDINGS_MINLENGTHS[i]>0 ? "Cancel" : "Stop");
                    } else {
                        recordButtons[i].setEnabled(false);
                    }
                    playButtons[i].setEnabled(false);
                }
            }
        } else if(currentlyRecording>=0 && audioPlayHelper.isPlaying()) {
            /* Something is recording - could be a listed item or the test */
            audioTestButton.setEnabled(false);
            uploadButton.setEnabled(false);
            addRecordingButton.setEnabled(false);
            deleteRecordingButton.setEnabled(false);
            if(currentlyRecording==0) {
                audioTestPlayButton.setEnabled(true);
                audioTestPlayButton.setText("Stop Test");
                for(int i=0; i < playButtons.length; i++) {
                    recordButtons[i].setEnabled(false);
                    playButtons[i].setEnabled(false);
                }
            } else {
                audioTestPlayButton.setEnabled(false);
                recordMeters[currentlyRecording-1].setForeground(Color.GREEN);
                for(int i=0; i < playButtons.length; i++) {
                    if(i+1==currentlyRecording) {
                        playButtons[i].setEnabled(true);
                        playButtons[i].setText("Stop");
                    } else {
                        playButtons[i].setEnabled(false);
                    }
                    recordButtons[i].setEnabled(false);
                }
            }
        } else {
            /* Nothing playing or recording, reset meters and all buttons */
            audioMeter.setValue(0);
            audioTestButton.setEnabled(true);
            audioTestButton.setText("Test Record");
            audioTestPlayButton.setEnabled(true);
            audioTestPlayButton.setText("Test Playback");
            for(int i=0; i < RECORDINGS.length; i++) {
                recordMeters[i].setValue(0);
                recordButtons[i].setEnabled(true);
                if(recordingLengths[i]>0) {
                    recordButtons[i].setText("Erase");
                    recordStatus[i].setForeground(Color.GREEN);
                    recordStatus[i].setText("Recorded " + formatTime(i) + " OK");
                } else {
                    recordButtons[i].setText("Record");
                    recordStatus[i].setForeground(Color.RED);
                    recordStatus[i].setText("Press Record to begin");
                }
                playButtons[i].setEnabled(true);
                playButtons[i].setText("Play");
            }
            /* If all files and fields are submitted, enable the upload button */
            boolean ageGenderOK = gender.getSelection()!=null && !"(select one)".equals(age.getSelectedItem());
            boolean clientIdOK = clientID.getText()!=null && clientID.getText().length()>0;
            
            boolean allFields = ageGenderOK && clientIdOK;
            boolean allFiles = true;
            for(int i=0; i < recordingLengths.length; i++) {
                if(recordingLengths[i] <= 0) {
                    allFiles = false;
                    break;
                }
            }
            uploadButton.setEnabled(allFields && allFiles);
            addRecordingButton.setEnabled(true);
            deleteRecordingButton.setEnabled(RECORDINGS_CUSTOM>0);
        }
    }
    
    
    public static void main(String[] args) {
        new VIRecorder();
    }
    
    public void recorderException(Throwable t) {
        JOptionPane.showMessageDialog(this,t.getMessage(),"Error",JOptionPane.ERROR_MESSAGE);
        t.printStackTrace();
    }
    
    private void _meterUpdate(double level) {
        double value = 10*Math.log10(level); // should be negative, we scale between -20 and 0
        if(value>0) value = 0;
        else if(value<-20) value = -20;
        if(currentlyRecording==0) audioMeter.setValue((int)(100+5*value)); // = 100*(20+value)/20
        else recordMeters[currentlyRecording-1].setValue((int)(100+5*value));
    }
    
    public void recorderUpdate(double time, double level, boolean silent) {
        _meterUpdate(level);
        //loginTimer.touch();
        if(currentlyRecording>0) {
            int i = currentlyRecording-1;
            recordingLengths[i] = time;
            //recordButtons[i].setEnabled(time>=RECORDINGS_MINLENGTHS[i]);
            recordStatus[i].setForeground(Color.RED);
            if(!silent && RECORDINGS_MINLENGTHS[i]>0) {
                recordStatus[i].setText(Math.round(time) + "s recorded (minimum " + RECORDINGS_MINLENGTHS[i] + "s)");
            } else {
                recordStatus[i].setText(Math.round(time) + "s recorded" + (silent ? " PAUSED" : ""));
            }
        }
    }
    public void recorderStarted() {
        resetButtonState();
    }
    public void recorderStopped(double length) {
        audioMeter.setValue(0);
        if(currentlyRecording>0) {
            int i = currentlyRecording-1;
            // TODO analyse the sound file just recorded, error and abort if necessary
            boolean wasOK = true;
            /* Not OK if too short (using 0.1 as the epsilon to round up) */
            if((length+0.1)<RECORDINGS_MINLENGTHS[i]) {
                wasOK = false;
            } else if(currentlyRecording>1) { // skip the ambient recording (likely to be quiet)
                /* Check volume level */
                if(audioHelper.getPeakDb()<quietThreshold) {
                    JOptionPane.showMessageDialog(this,"Your recording is too quiet: please check cables, connections and settings and try again","Low volume level",JOptionPane.ERROR_MESSAGE);
                    wasOK = false;
                }
            }
            
            if(!wasOK) {
                //String errormsg = ""; // TODO
                //JOptionPane.showMessageDialog(this,errormsg,"Recording Error",JOptionPane.ERROR_MESSAGE);
                recordingLengths[i] = 0;
            } else {
                recordingLengths[i] = length;
                int secs = (int) Math.ceil(length);
                int mins = 0;
                String s = secs + "s";
                if(secs>60) {
                    mins = secs/60;
                    secs = secs%60;
                    s = mins + "m" + secs + "s";
                }
                recordStatus[i].setText("Recorded " + s + " OK");
                recordStatus[i].setForeground(Color.GREEN);
            }
        } else if(currentlyRecording==0 && audioHelper.getPeakDb()<quietThreshold) {
            /* Check volume level and prompt */
            JOptionPane.showMessageDialog(this,"Your recording is too quiet: please check cables, connections and the selected audio device and try again","Low volume level",JOptionPane.ERROR_MESSAGE);
        }
        currentlyRecording = -1;
        resetButtonState();
    }
    
    public void playbackException(Throwable t) {
        // TODO Auto-generated method stub
        t.printStackTrace();
    }
    public void playbackStarted() {
        resetButtonState();
    }
    public void playbackStopped(double length, boolean end) {
        resetButtonState();
    }
    public void playbackUpdate(double time, double level) {
        _meterUpdate(level);
        //loginTimer.touch();
        if(currentlyRecording>0) {
            int i = currentlyRecording-1;
            recordStatus[i].setForeground(Color.GREEN);
            recordStatus[i].setText("Playback " + Math.round(time) + "s of " + Math.round(recordingLengths[i]) + "s");
        }
    }
    
    public boolean isExpress() {
        return expressService.isSelected();
    }
    public String getPromoCode() {
        return promoCode.getText();
    }
    public String getClientOptions() {
        return options.getText();
    }
    public String getReportType() {
        if(type_f.isSelected()) return "F";
        if(type_m.isSelected()) return "M";
        if(type_n.isSelected()) return "N";
        return null;
    }
    
    public int getRecordedFileCount() {
        return RECORDINGS.length;
    }
    public String getFinalRecordingFileName(String accountNum, String doctorID, int fid) {
        return getArchiveFilePrefix(accountNum,doctorID) + "-" + RECORDINGS_FILENAMES[fid] + ".wav";
    }
    public File getRecordingFile(int fid) {
        File dir = new File(ARCHIVE_DIR + "tmp");
        dir.mkdirs();
        return new File(dir,FILE_UID + "-" + fid + ".raw");
    }
    public String getRecordingShortCode(int fid) {
        return RECORDINGS_FILENAMES[fid];
    }
    public String getRecordingName(int fid) {
        return RECORDINGS[fid];
    }
    public String getArchiveFilePrefix(String accountNum, String doctorID) {
        String tmp = getClientID();
        /* Sanitize the client ID by replacing spaces with _ and removing all non-alphanumeric characters */
        tmp = tmp.replace(' ','_').replaceAll("[^A-Za-z0-9_]","");
        return (isExpress() ? "SS-" : "") + accountNum + "-" + doctorID + "-" + tmp + "-" + FILE_DATE;
    }
    public File getArchiveFile(String accountNum, String doctorID, int fid) {
        File dir = new File(ARCHIVE_DIR + getArchiveFilePrefix(accountNum,doctorID));
        dir.mkdirs();
        return new File(dir,getFinalRecordingFileName(accountNum,doctorID,fid));
    }
    public File getArchiveVList(String accountNum, String doctorID) {
        File dir = new File(ARCHIVE_DIR + getArchiveFilePrefix(accountNum,doctorID));
        dir.mkdirs();
        return new File(dir,getArchiveFilePrefix(accountNum,doctorID) + ".vlist");
    }
    
    private boolean checkRequiredFields() {
        /* Check the required client data and age/gender are selected */
        boolean ageGenderOK = gender.getSelection()!=null && !"(select one)".equals(age.getSelectedItem());
        boolean clientIdOK = clientID.getText()!=null && clientID.getText().length()>0;
        if(!clientIdOK && !ageGenderOK) {
            JOptionPane.showMessageDialog(this,"Please enter the client ID and select the age and gender before continuing",
                    "Missing Required Client Details",JOptionPane.WARNING_MESSAGE);
            return false;
        } else if(!clientIdOK) {
            JOptionPane.showMessageDialog(this,"Please enter the client ID before continuing",
                    "Missing Required Client Details",JOptionPane.WARNING_MESSAGE);
            return false;
        } else if(!ageGenderOK) {
            JOptionPane.showMessageDialog(this,"Please select the age/gender before continuing",
                    "Missing Required Client Details",JOptionPane.WARNING_MESSAGE);
            return false;
        }
        return true;
    }
    
    private void addNewRecording() {
        /* Pop-up a new dialog to ask for a name */
        String newname = JOptionPane.showInputDialog(this,"Please enter a description for the new recording","Enter recording name",JOptionPane.QUESTION_MESSAGE);
        if(newname==null || newname.length()==0) return; // abort

        /* Adds another entry to each array and extends the table */
        int newc = ++RECORDINGS_CUSTOM;
        int newi = RECORDINGS.length;
        
        /* Extend RECORDINGS */
        String[] tmp = new String[newi+1];
        System.arraycopy(RECORDINGS,0,tmp,0,newi);
        tmp[newi] = newname;
        RECORDINGS = tmp;
        
        /* Extend RECORDINGS_FILENAMES */
        tmp = new String[newi+1];
        System.arraycopy(RECORDINGS_FILENAMES,0,tmp,0,newi);
        tmp[newi] = "Z" + newc;
        RECORDINGS_FILENAMES = tmp;
        
        /* Extend RECORDINGS_MINLENGTHS */
        int[] tmpi = new int[newi+1];
        System.arraycopy(RECORDINGS_MINLENGTHS,0,tmpi,0,newi);
        tmpi[newi] = 0; // no limit
        RECORDINGS_MINLENGTHS = tmpi;
        
        /* Extend recordingLengths */
        double[] tmpd = new double[newi+1];
        System.arraycopy(recordingLengths,0,tmpd,0,newi);
        tmpd[newi] = 0; // no limit
        recordingLengths = tmpd;
        
        /* ==== Add the GUI components === */
        GridBagConstraints c = new GridBagConstraints();
        c.insets = new Insets(2,2,2,2);
        c.fill = GridBagConstraints.BOTH;
        c.anchor = GridBagConstraints.FIRST_LINE_START;
        c.weightx = 0;
        c.gridx = 0;
        c.gridy = newi+1;
        c.gridwidth = 1;
        c.gridheight = 1;
        
        /* Remove the button in the last row */
        recordingPanel.remove(addDeleteRecordingsBox);
        recordingPanel.remove(uploadButton);
        
        /* Record name labels */
        JLabel[] tmpl = new JLabel[newi+1];
        System.arraycopy(recordingLabels,0,tmpl,0,newi);
        tmpl[newi] = new JLabel(newname,JLabel.RIGHT);
        recordingLabels = tmpl;
        recordingPanel.add(tmpl[newi],c);
        
        /* Record buttons */
        JButton[] tmpb = new JButton[newi+1];
        System.arraycopy(recordButtons,0,tmpb,0,newi);
        tmpb[newi] = new JButton("Record");
        tmpb[newi].addActionListener(this);
        recordButtons = tmpb;
        c.gridx=1;
        recordingPanel.add(tmpb[newi],c);
        
        /* Play buttons */
        tmpb = new JButton[newi+1];
        System.arraycopy(playButtons,0,tmpb,0,newi);
        tmpb[newi] = new JButton("Play");
        tmpb[newi].addActionListener(this);
        //tmpb[newi].setEnabled(false);
        playButtons = tmpb;
        c.gridx=3;
        recordingPanel.add(tmpb[newi],c);

        /* Recording meters */
        JProgressBar[] tmppb = new JProgressBar[newi+1];
        System.arraycopy(recordMeters,0,tmppb,0,newi);
        tmppb[newi] = new JProgressBar();
        tmppb[newi].setForeground(java.awt.Color.RED);
        recordMeters = tmppb;
        c.gridx=2;
        recordingPanel.add(tmppb[newi],c);
        
        /* Recording labels */
        tmpl = new JLabel[newi+1];
        System.arraycopy(recordStatus,0,tmpl,0,newi);
        tmpl[newi] = new JLabel("Press Record to begin");
        tmpl[newi].setForeground(Color.RED);
        recordStatus = tmpl;
        c.gridx=4;
        recordingPanel.add(tmpl[newi],c);
        
        /* Put the add/delete recording and upload buttons back in the last rows */
        c.gridy = newi+2;
        c.gridx = 1;
        c.fill = GridBagConstraints.NONE;
        c.gridwidth = 2;
        recordingPanel.add(addDeleteRecordingsBox,c);
        
        c.gridy = newi+3;
        c.gridx = 1;
        c.fill = GridBagConstraints.NONE;
        c.gridwidth = 2;
        recordingPanel.add(uploadButton,c);
        
        deleteRecordingButton.setEnabled(true);
        
        validate();
    }
    
    private void replaceAddRemoveUploadButtons() {
        int newi = recordingLengths.length;
        
        GridBagConstraints c = new GridBagConstraints();
        c.insets = new Insets(2,2,2,2);
        c.fill = GridBagConstraints.NONE;
        c.anchor = GridBagConstraints.FIRST_LINE_START;
        c.weightx = 0;
        c.gridwidth = 2;
        c.gridheight = 1;
        c.gridx = 1;
        
        c.gridy = newi+2;
        recordingPanel.add(addDeleteRecordingsBox,c);
        
        c.gridy = newi+3;
        recordingPanel.add(uploadButton,c);
        
        deleteRecordingButton.setEnabled(RECORDINGS_CUSTOM>0);
    }
    
    private void deleteLastRecording() {
        /* Abort if no recordings left to be deleted */
        if(RECORDINGS_CUSTOM==0) return;
        
        /* Confirm */
        int res = JOptionPane.showConfirmDialog(this,"Are you sure you want to remove the last recording line?","Confirm Delete",JOptionPane.YES_NO_OPTION);
        if(res!=JOptionPane.YES_OPTION) return;
        
        /* (1) Delete audio file if it exists */
        int index = recordingLengths.length-1;
        File f = getRecordingFile(index);
        if(f.exists()) f.delete();
        
        /* (2) Remove the GUIs */
        recordingPanel.remove(addDeleteRecordingsBox);
        recordingPanel.remove(uploadButton);
        recordingPanel.remove(recordButtons[index]);
        recordingPanel.remove(recordMeters[index]);
        recordingPanel.remove(recordStatus[index]);
        recordingPanel.remove(playButtons[index]);
        recordingPanel.remove(recordingLabels[index]);
        
        /* (3a) Shorten all GUI arrays */
        JLabel[] tmpl = new JLabel[index];
        System.arraycopy(recordingLabels,0,tmpl,0,index);
        recordingLabels = tmpl;
        
        tmpl = new JLabel[index];
        System.arraycopy(recordStatus,0,tmpl,0,index);
        recordStatus = tmpl;
        
        JButton[] tmpb = new JButton[index];
        System.arraycopy(recordButtons,0,tmpb,0,index);
        recordButtons = tmpb;

        tmpb = new JButton[index];
        System.arraycopy(playButtons,0,tmpb,0,index);
        playButtons = tmpb;

        JProgressBar[] tmpp = new JProgressBar[index];
        System.arraycopy(recordMeters,0,tmpp,0,index);
        recordMeters = tmpp;
        
        /* (3b) Shorten all data arrays */
        String[] tmp = new String[index];
        System.arraycopy(RECORDINGS,0,tmp,0,index);
        RECORDINGS = tmp;

        tmp = new String[index];
        System.arraycopy(RECORDINGS_FILENAMES,0,tmp,0,index);
        RECORDINGS_FILENAMES = tmp;
        
        /* Extend RECORDINGS_MINLENGTHS */
        int[] tmpi = new int[index];
        System.arraycopy(RECORDINGS_MINLENGTHS,0,tmpi,0,index);
        RECORDINGS_MINLENGTHS = tmpi;
        
        /* Extend recordingLengths */
        double[] tmpd = new double[index];
        System.arraycopy(recordingLengths,0,tmpd,0,index);
        recordingLengths = tmpd;
        
        RECORDINGS_CUSTOM--;
        
        /* (4) Put the add/remove/upload buttons back */
        replaceAddRemoveUploadButtons();
        
        validate();
    }
    
    public void actionPerformed(ActionEvent e) {
        //loginTimer.touch();
        if(e.getSource()==addRecordingButton) {
            addNewRecording();
            return;
        }
        if(e.getSource()==deleteRecordingButton) {
            deleteLastRecording();
            return;
        }
        if(e.getSource()==audioTestButton) {
            if(audioHelper.isRecording()) audioHelper.stopRecording();
            else {
                audioHelper.setQuietThreshold(Double.NEGATIVE_INFINITY);
                audioHelper.record((MixerTargetLine) audioInputsCombo.getSelectedItem(),this,null,0);
            }
            currentlyRecording = 0;
            return;
        }
        if(e.getSource()==audioTestPlayButton) {
            if(audioPlayHelper.isPlaying()) audioPlayHelper.stopPlaying();
            else audioPlayHelper.play((MixerSourceLine) audioOutputsCombo.getSelectedItem(),this,getClass().getResourceAsStream("/testplay.raw"));
            currentlyRecording = 0;
            return;
        }
        if(e.getSource()==exitMenuItem) {
            int res = JOptionPane.showConfirmDialog(this,"Are you sure you want to exit? Any data not uploaded will be lost.","Confirm exit",JOptionPane.YES_NO_OPTION);
            if(res==JOptionPane.YES_OPTION) {
                shutdown();
            }
            return;
        }
        if(e.getSource()==uploadButton) {
            if(!checkRequiredFields()) return;
            /* Implement the upload process:
             * (1) Present login box and verify
             * (2) Present UploadDialog
             */
            showLoginDialog();
            if(loginDialog.getLoggedInUsername()!=null) {
                showUploadDialog();
            } else if(loginDialog.isOffline()) {
                showOfflineDialog();
            }
            return;
        }
        int tmp = Utils.searchArray(recordButtons,e.getSource());
        if(tmp>=0) { // one of the recordButtons
            if(!checkRequiredFields()) return;
            /* Otherwise if a recording already exists, erase */
            if(!audioHelper.isRecording() && recordingLengths[tmp]>0) {
                getRecordingFile(tmp).delete();
                recordingLengths[tmp]=0;
                resetButtonState();
            } else {
                /* Record to the appropriate file */
                if(audioHelper.isRecording()) {
                    audioHelper.stopRecording();
                } else {
                    audioHelper.setQuietThreshold(tmp==0 ? Double.NEGATIVE_INFINITY : getQuietThreshold());
                    audioHelper.record((MixerTargetLine) audioInputsCombo.getSelectedItem(),this,getRecordingFile(tmp),RECORDINGS_MINLENGTHS[tmp]);
                    currentlyRecording = tmp+1;
                }
            }
            return;
        }
        tmp = Utils.searchArray(playButtons,e.getSource());
        if(tmp>=0) {
            /* Check a recording has been made so we can play it back */
            if(recordingLengths[tmp]==0) {
                JOptionPane.showMessageDialog(this,"You must make the recording before playing it back!",
                        "Recording Missing",JOptionPane.WARNING_MESSAGE);
                return;
            }
            if(audioPlayHelper.isPlaying()) {
                audioPlayHelper.stopPlaying();
            } else {
                audioPlayHelper.play((MixerSourceLine) audioOutputsCombo.getSelectedItem(),this,getRecordingFile(tmp));
                currentlyRecording = tmp+1;
            }
            return;
        }
    }
    
    /**
     * Closes the application and frees any temporary resources.
     */
    public void shutdown() {
        int c = getRecordedFileCount();
        for(int i=0; i < c; i++) {
            File f = getRecordingFile(i);
            if(f.exists()) f.delete();
        }
        System.exit(0);
    }
}
