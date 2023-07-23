package com.example.bongo;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.FirebaseDatabase;

public class SignUpActivity extends AppCompatActivity {
    EditText editTextUserName;
    EditText editTextPassword ;
    EditText editTextMobileNo;
    EditText editTextEmail;
    ProgressBar progressBar;
    private FirebaseAuth mAuth;



    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);

        editTextUserName =(EditText)findViewById(R.id.editTextUserName);
        editTextPassword =(EditText)findViewById(R.id.editTextPassword);
        editTextMobileNo =(EditText)findViewById(R.id.editTextMobileNo);
        editTextEmail =(EditText)findViewById(R.id.editTextEmail);
        progressBar  = (ProgressBar) findViewById(R.id.progressBar);
        mAuth = FirebaseAuth.getInstance();

    }
    public void signupButtonClicked(View V){
         String txtUserName =editTextUserName.getText().toString().trim();
         String txtPassword =editTextPassword.getText().toString().trim();
        String txtPhoneNo =editTextMobileNo.getText().toString().trim();
        String txtEmail =editTextEmail.getText().toString().trim();

        if(txtUserName.isEmpty()){
            editTextUserName.setError("please enter Name");
            editTextUserName.requestFocus();
        }

        if(txtPassword.isEmpty()){
            editTextPassword.setError("please enter password");
           editTextPassword.requestFocus();
        }

        if(txtPhoneNo.isEmpty()){
            editTextMobileNo.setError("please enter Number");
            editTextMobileNo.requestFocus();
        }

        if(txtUserName.isEmpty()){
            editTextEmail.setError("please enter Email");
           editTextEmail.requestFocus();
        }
        progressBar.setVisibility(View.VISIBLE);
        mAuth.createUserWithEmailAndPassword(txtEmail,txtPassword)
                .addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                    @Override
                    public void onComplete(@NonNull Task<AuthResult> task) {
                        if(task.isSuccessful()){
                            User user=new User(txtUserName,txtPassword,txtPhoneNo,txtEmail);
                            FirebaseDatabase.getInstance().getReference("User")
                                            .child(FirebaseAuth.getInstance().getCurrentUser().getUid())
                                                    .setValue(user).addOnCompleteListener(new OnCompleteListener<Void>() {
                                        @Override
                                        public void onComplete(@NonNull Task<Void> task) {
                                            if(task.isSuccessful()){
                                                Toast.makeText(SignUpActivity.this,"User Registered successfully",Toast.LENGTH_LONG).show();
                                                progressBar.setVisibility(View.GONE);
                                            }else{
                                                Toast.makeText(SignUpActivity.this,"User Failed to Register",Toast.LENGTH_LONG).show();
                                                progressBar.setVisibility(View.GONE);
                                            }
                                        }
                                    });

                        }
                        else{
                            Toast.makeText(SignUpActivity.this,"User Failed to Register",Toast.LENGTH_LONG).show();
                            progressBar.setVisibility(View.GONE);

                        }
                    }
                });
    }
}