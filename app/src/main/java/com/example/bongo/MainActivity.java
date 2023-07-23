package com.example.bongo;

import static android.content.ContentValues.TAG;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.google.firebase.ktx.Firebase;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // Write a message to the database
        FirebaseDatabase database = FirebaseDatabase.getInstance();
        DatabaseReference myRef = database.getReference("message");

        myRef.setValue("I am not  here!");
        // Read from the database
// Read from the database
        myRef.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                // This method is called once with the initial value and again
                // whenever data at this location is updated.
                String value = dataSnapshot.getValue(String.class);
                Log.d("bongo", "Value is: " + value);
            }



            @Override
            public void onCancelled(DatabaseError error) {
                // Failed to read value
                Log.w("bongo", "Failed to read value.", error.toException());
            }
        });

    }
    public void onButtonSignUpClicked(View view){
        Intent intent = new Intent(MainActivity.this,SignUpActivity.class);
        startActivity(intent);

    }
    public void onButtonSignInClicked(View view){
        Intent intent = new Intent(MainActivity.this,SignInActivity.class);
        startActivity(intent);
    }
}