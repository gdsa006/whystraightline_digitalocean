
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "gdsa006@gmail.com";
    $to = "gdsa006@gmail.com";
    $subject = "Checking PHP mail";
    $message = "
    <html>
    <head>
    <title>This is a test HTML email</title>
    </head>
    <body>
    <p>Hi, it’s a test email. Please ignore.</p>
    </body>
    </html>
    ";
    // The content-type header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
    echo "Message was sent.";
    } else {
      echo "Message was not sent.";
    }
?>