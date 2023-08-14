package com.example.bongo;

import static android.icu.lang.UCharacter.GraphemeClusterBreak.V;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.Intent;
import android.os.Bundle;
import android.util.Patterns;
import android.view.View;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;


public class SignInActivity extends AppCompatActivity {
    EditText editTextEmail,editTextUsersPassword;
    ProgressBar progressBar;
    FirebaseAuth mAuth;


    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_in);
        editTextEmail =(EditText)findViewById(R.id.editTextEmail);
        editTextUsersPassword =(EditText)findViewById(R.id.editTextUsersPassword);
        progressBar=(ProgressBar) findViewById(R.id.progressBar2);
        mAuth=FirebaseAuth.getInstance();
    }
    public void txtSignInScrSignInClick(View v){
        String UserEmail=editTextEmail.getText().toString().trim();
        String  password=editTextUsersPassword.getText().toString().trim();
        if(!Patterns.EMAIL_ADDRESS.matcher(UserEmail).matches()){
            editTextEmail.setError("Please add valid password");
            editTextEmail.requestFocus();
        }
        progressBar.setVisibility(View.VISIBLE);
        mAuth.signInWithEmailAndPassword(UserEmail,password).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
            @Override
            public void onComplete(@NonNull Task<AuthResult> task) {
                if(task.isSuccessful()){
                    Toast.makeText(SignInActivity.this,"User Has successfully log in",Toast.LENGTH_LONG).show();
                    progressBar.setVisibility(View.GONE);
                    Intent intent = new Intent(SignInActivity.this,DashbordActivity.class);
                    startActivity(intent);
                }else{
                    Toast.makeText(SignInActivity.this,"User Has Failed log in",Toast.LENGTH_LONG).show();
                    progressBar.setVisibility(View.GONE);
                }
            }
        });
    }

}