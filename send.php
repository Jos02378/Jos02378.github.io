<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $to='haryantojoseph@gmail.com';
        $subject="Form Submission";
        $message="Name: ".$name."\n"."Wrote the following: "."\n\n".$message;
        $headers="From: ". $email;
        
        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank You". " ".$name;
        }
        else{
            echo "Something went wrong!";
        }
    }
?>


