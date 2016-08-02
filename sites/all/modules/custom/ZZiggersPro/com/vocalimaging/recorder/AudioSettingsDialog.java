package com.vocalimaging.recorder;

import java.awt.BorderLayout;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class AudioSettingsDialog extends JDialog implements ActionListener {
    
    private static final int[] RATES = { 8000, 11025, 22050, 44100, 48000 };
    private static final String[] RATES_NAMES = { "8000Hz (telephone speech)", "11025Hz (speech with sibilance)", "22050Hz (low frequency analysis)", "44100Hz (CD quality)", "48000Hz (pro quality)" };
    
    /* We ask for sample rate, sample size (in bits), number of channels */
    private JComboBox sampleRate;
    private JComboBox sampleSize;
    private JComboBox numChannels;
    private JComboBox quietThreshold;
    private boolean cancelled;
    
    private JButton btnOK;
    private JButton btnCancel;
    
    public AudioSettingsDialog(VIRecorder rec) {
        super(rec, "Adjust Audio Settings", true);
        setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
        
        JPanel panel = new JPanel(new GridBagLayout());
        GridBagConstraints cs = new GridBagConstraints();

        cs.fill = GridBagConstraints.HORIZONTAL;

        sampleRate = new JComboBox(RATES_NAMES);
        sampleRate.setSelectedIndex(2);
        JLabel lb = new JLabel("Sample Rate: ");
        cs.gridwidth = 1;
        cs.gridy = 0;
        cs.gridx = 0;
        panel.add(lb, cs);
        cs.gridx = 1;
        panel.add(sampleRate,cs);
        
        sampleSize = new JComboBox(new String[]{ "8 bit", "16 bit" });
        sampleSize.setSelectedIndex(1);
        lb = new JLabel("Sample Size: ");
        cs.gridy = 1;
        cs.gridx = 0;
        panel.add(lb, cs);
        cs.gridx = 1;
        panel.add(sampleSize,cs);
        
        numChannels = new JComboBox(new String[]{ "1 (mono)", "2 (stereo)" });
        numChannels.setSelectedIndex(0);
        lb = new JLabel("Channels: ");
        cs.gridy = 2;
        cs.gridx = 0;
        panel.add(lb, cs);
        cs.gridx = 1;
        panel.add(numChannels,cs);
        
        String[] dBs = new String[21];
        for(int i=0; i < 20; i++) dBs[i] = Integer.toString(i-20) + "dB";
        dBs[20] = "Disable";
        quietThreshold = new JComboBox(dBs);
        quietThreshold.setSelectedIndex(0);
        lb = new JLabel("Silent Threshold: ");
        cs.gridy = 3;
        cs.gridx = 0;
        panel.add(lb, cs);
        cs.gridx = 1;
        panel.add(quietThreshold,cs);

        btnOK = new JButton("Accept Settings");
        btnOK.addActionListener(this);
        btnCancel = new JButton("Use Configured Defaults");
        btnCancel.addActionListener(this);
        
        JPanel bp = new JPanel();
        bp.add(btnOK);
        bp.add(btnCancel);

        getContentPane().add(panel, BorderLayout.CENTER);
        getContentPane().add(bp, BorderLayout.PAGE_END);
        pack();
        setResizable(false);
        setLocationRelativeTo(rec);
    }
    
    public void actionPerformed(ActionEvent e) {
        cancelled = e.getSource()==btnCancel;
        setVisible(false);
    }
    
    public int getSampleRate() {
        return RATES[sampleRate.getSelectedIndex()];
    }
    public int getChannels() {
        return numChannels.getSelectedIndex()+1;
    }
    public int getSampleBits() {
        return (sampleSize.getSelectedIndex()+1)*8;
    }
    public int getQuietThreshold() {
        int i = quietThreshold.getSelectedIndex();
        if(i==20) return 0;
        return i-20;
    }
    public boolean isCancelled() {
        return cancelled;
    }

}
