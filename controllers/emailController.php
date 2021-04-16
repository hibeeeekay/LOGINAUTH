<?php
require_once 'vendor/autoload.php';
require_once 'config/constants.php';


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);




function sendVerificationEmail($userEmail, $token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify email</title>
    </head>
    <body>
        <div class="div-wrapper">
            <p>
                Thank you for signing up on our website.Please click on the link below 
                to verify your email.
            </p>
            <a href="https://regapp2.herokuapp.com/login.php?token=' . $token .'">
               Verify your email address
            </a>
        </div>
    </body>
    </html>';
    // Create a message
    $message = (new Swift_Message('Verify your email address'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');
    ;
 
    // send the message
  $result = $mailer->send($message);
}

function sendPasswordResetLink($userEmail, $token)
  {
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify email</title>
    </head>
    <body>
        <div class="div-wrapper">
            <p>
               Hello,
               please click on the link to reset your password.
            </p>
            <a href="https://regapp2.herokuapp.com/index.php?password-token=' . $token .'">
               Reset your password.
            </a>
        </div>
    </body>
    </html>';
    // Create a message
    $message = (new Swift_Message('Reset your password'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');
    ;
 
    // send the message
  $result = $mailer->send($message);
  }