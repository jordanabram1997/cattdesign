<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Customer'; 
    $to = 'jordan16abram@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    if ($_POST['submit'] && $human == '4') {                 
        if (mail ($to, $subject, $body, $from)) { 
        '<p>Your message has been sent!</p>';
    } else { 
        '<p>Something went wrong, go back and try again!</p>'; 
    } 
    } else if ($_POST['submit'] && $human != '4') {
    '<p>You answered the anti-spam question incorrectly!</p>';
    }
    header( 'Location: /contactredirect.html' ) ;
?>