package com.vocalimaging.recorder;

import java.awt.BorderLayout;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JTextField;

public class OfflineDialog extends JDialog implements ActionListener {

    private static final long serialVersionUID = 1L;

    private JTextField tfAccount;
    private JTextField tfPhysician;
    private JButton btnOK;
    private JButton btnCancel;
    private VIRecorder app;
    
    public OfflineDialog(VIRecorder parent) {
        super(parent, "Offline Save", true);
        setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
        this.app = parent;

        JPanel panel = new JPanel(new GridBagLayout());
        GridBagConstraints cs = new GridBagConstraints();

        cs.fill = GridBagConstraints.HORIZONTAL;

        cs.gridx=0;
        cs.gridy=0;
        cs.gridwidth=3;
        panel.add(new JLabel("All files will be saved on this computer to be uploaded later. Please complete the following:"),cs);
        
        JLabel lbUsername = new JLabel("Account Number: ");
        cs.gridx = 0;
        cs.gridy = 1;
        cs.gridwidth = 1;
        panel.add(lbUsername, cs);

        tfAccount = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 1;
        cs.gridwidth = 2;
        panel.add(tfAccount, cs);

        JLabel lbPassword = new JLabel("Physician ID: ");
        cs.gridx = 0;
        cs.gridy = 2;
        cs.gridwidth = 1;
        panel.add(lbPassword, cs);

        tfPhysician = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 2;
        cs.gridwidth = 2;
        panel.add(tfPhysician, cs);
        //panel.setBorder(new LineBorder(java.awt.Color.GRAY));

        btnOK = new JButton("Finish");
        btnOK.addActionListener(this);
        btnCancel = new JButton("Cancel");
        btnCancel.addActionListener(this);
        
        JPanel bp = new JPanel();
        bp.add(btnOK);
        bp.add(btnCancel);

        getContentPane().add(panel, BorderLayout.CENTER);
        getContentPane().add(bp, BorderLayout.PAGE_END);
        pack();
        setResizable(false);
        setLocationRelativeTo(parent);
    }

    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==btnCancel) {
            this.setVisible(false);
            return;
        }
        /* Attempt the offline save only */
        app.getFilesHelper().saveVListProperties(tfAccount.getText(),tfPhysician.getText());
        app.getFilesHelper().saveAudioFiles(tfAccount.getText(),tfPhysician.getText());
        JOptionPane.showMessageDialog(this,"All files have been saved. This recording session will now close.","Offline Save Completed",JOptionPane.INFORMATION_MESSAGE);
        app.shutdown();
    }
  
}
