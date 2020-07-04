<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $myEmail = "aavachhori@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a message from your website from: ".$name.".\n\n".$message;


    mail($myEmail, $subject, $txt, $headers);
    header("Location: index.php?mailsend"); 
}