<?php
    ini_set('display_errors', 1);
    error_reporting(  E_ALL);

    $from = "mymail@agillemobile.com";
    $to = "wicaksono1404@gmail.com";

    $subject = "PHP Mail Sending Checking";
    $message = "PHP Mail Works Fine.";
    $headers = "From:" .$from;


    mail($to,$subject,$message,$headers);

    echo "The email message was successfully sent.";
    echo "Thank You";
    echo "<script>console.log('Headers: " . $headers . "' );</script>";
?>