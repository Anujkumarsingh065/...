<?php
$name=$_POST['name'];
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];
$email_from='anujkumarsingh065@gmail.com';
$email_subject="New Form Submission";
$email_body="user Name: $name .\n".
            "User Email : $visitor_email.\n".
            "subject: $subject .\n".
            "User Message: $Message .\n". ; 
$to='anujkumarsingh7050@gmail.com'
$headers="From: $email_from\r\n";
$headers .="Reply-to: $visitor_email\r\n";
mail($to,$mail_subject,$email_body)
header("Location:contact.html")
?>