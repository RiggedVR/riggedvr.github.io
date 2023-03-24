<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = "riggedingame@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recieved an email from ".$name.".\n\n".$subject;
    $mailSubject = "Email from Rigged Games Website.";

    mail($mailTo, $mailSubject, $txt, $headers);
    header("Location: home.html?mailsend");
}