
<?php
$Whatdoing = $_POST['q1'];
$Interestedinexploring = $_POST['q1'];
$Motivates = $_POST['q3'];
$Appointments = $_POST['q4'];
$Important = $_POST['q5'];
$Goals = $_POST['q6'];
$Fname = $_POST['q7'];
$Lname = $_POST['q8'];
$Email = $_POST['q9'];
$Rightnow = $_POST['q10'];
$Time = $_POST['q11'];
$Prioritize = $_POST['q12'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "iamatma@protonmail.com";
    $to = "iamatma@protonmail.com";
    $subject = "Checking PHP mail";
    $message = "***START*** \n";
    $message .= "\n";
    $message .= 'What are you doing now? : ' . $Whatdoing;
    $message .= "\n";
    $message .= 'Why are you interested in exploring what we do? : ' . $Interestedinexploring;
    $message .= "\n";
    $message .= 'What is it that motivates you? : ' . $Motivates;
    $message .= "\n";
    $message .= 'If you got 10-15 qualified appointments can you manage that well? : ' . $Appointments;
    $message .= "\n";
    $message .= 'Besides money, what is important to you? : ' . $Important;
    $message .= "\n";
    $message .= 'What is your short term and long term goals? : ' . $Goals;
    $message .= "\n";
    $message .= 'First Name : ' . $Fname;
    $message .= "\n";
    $message .= 'Last Name : ' . $Lname;
    $message .= "\n";
    $message .= 'Email : ' . $Email;
    $message .= "\n";
    $message .= 'Right Now I... : ' . $Rightnow;
    $message .= "\n";
    $message .= 'Best Time To Call... : ' . $Time;
    $message .= "\n";
    $message .= 'Yes, You Can Count On Me To Prioritize Our Phone Call : ' . $Prioritize;
    $message .= "\n";
    $message .= "\n ***END***";
    // The content-type header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode( true );
    } else {
      echo json_encode( false );
    }
?>