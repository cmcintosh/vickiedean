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
import javax.swing.JPasswordField;
import javax.swing.JTextField;

public class LoginDialog extends JDialog implements ActionListener {

    private static final long serialVersionUID = 1L;

    private JTextField tfUsername;
    private JPasswordField pfPassword;
    private JButton btnLogin;
    private JButton btnCancel;
    private VIRecorder app;
    
    private String loggedInUsername;
    private String loggedInPassword;
    
    private boolean offline = false;

    public LoginDialog(VIRecorder parent) {
        super(parent, "Login", true);
        setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
        this.app = parent;

        JPanel panel = new JPanel(new GridBagLayout());
        GridBagConstraints cs = new GridBagConstraints();

        cs.fill = GridBagConstraints.HORIZONTAL;

        JLabel lbUsername = new JLabel("Username: ");
        cs.gridx = 0;
        cs.gridy = 0;
        cs.gridwidth = 1;
        panel.add(lbUsername, cs);

        tfUsername = new JTextField(20);
        cs.gridx = 1;
        cs.gridy = 0;
        cs.gridwidth = 2;
        panel.add(tfUsername, cs);

        JLabel lbPassword = new JLabel("Password: ");
        cs.gridx = 0;
        cs.gridy = 1;
        cs.gridwidth = 1;
        panel.add(lbPassword, cs);

        pfPassword = new JPasswordField(20);
        cs.gridx = 1;
        cs.gridy = 1;
        cs.gridwidth = 2;
        panel.add(pfPassword, cs);
        //panel.setBorder(new LineBorder(java.awt.Color.GRAY));

        btnLogin = new JButton("Login");
        btnLogin.addActionListener(this);
        btnCancel = new JButton("Exit");
//        btnCancel.addActionListener(new ActionListener() {
//
//            public void actionPerformed(ActionEvent e) {
//                int ret = JOptionPane.showConfirmDialog(LoginDialog.this,
//                               "Are you sure you want to exit? Any data not uploaded will be lost.",
//                               "Confirm Exit",JOptionPane.YES_NO_OPTION,JOptionPane.QUESTION_MESSAGE);
//                if(ret==JOptionPane.YES_OPTION) System.exit(0);
//            }
//        });
        btnCancel.addActionListener(this);
        
        JPanel bp = new JPanel();
        bp.add(btnLogin);
        bp.add(btnCancel);

        getContentPane().add(panel, BorderLayout.CENTER);
        getContentPane().add(bp, BorderLayout.PAGE_END);
        pack();
        setResizable(false);
        setLocationRelativeTo(parent);
    }

    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==btnCancel) {
            loggedInUsername = loggedInPassword = null;
            pfPassword.setText("");
            this.setVisible(false);
            return;
        }
        /* Attempt the login */
        boolean auth = offline = false;
        try {
            auth = app.getUploadHelper().authenticate(getUsername(),getPassword());
        } catch (Exception e1) {
            e1.printStackTrace();
            /* Present an error dialog */
            int ret = JOptionPane.showConfirmDialog(LoginDialog.this,
                      "An error occurred contacting the server. Please check your Internet connection. Would you like to try uploading again?",
                      "Failure Contacting Server",JOptionPane.YES_NO_CANCEL_OPTION,JOptionPane.ERROR_MESSAGE);
            if(ret==JOptionPane.CANCEL_OPTION) {
                loggedInUsername = loggedInPassword = null;
                pfPassword.setText("");
                this.setVisible(false);
                return;
            }
            if(ret==JOptionPane.NO_OPTION) {
                /* The user has chosen the offline storage option */
                offline = true;
                loggedInUsername = loggedInPassword = null;
                pfPassword.setText("");
                this.setVisible(false);
                return;
            }
            pfPassword.setText("");
            return;
        }
        if(auth) {
            loggedInUsername = getUsername();
            loggedInPassword = getPassword();
            setVisible(false);
        } else {
            JOptionPane.showMessageDialog(LoginDialog.this,
                "Invalid username or password","Login",JOptionPane.ERROR_MESSAGE);
        }
        /* Clear password */
        pfPassword.setText("");
    }

    private String getUsername() {
        return tfUsername.getText().trim();
    }
    private String getPassword() {
        return new String(pfPassword.getPassword());
    }

    public void resetAndShow() {
        if(!isVisible()) {
            loggedInPassword = null;
            pfPassword.setText("");
            tfUsername.setText(loggedInUsername);
            setVisible(true);
        }
    }
    public String getLoggedInUsername() {
        return loggedInUsername;
    }
    public String getLoggedInPassword() {
        return loggedInPassword;
    }
    public boolean isOffline() {
        return offline;
    }
}
