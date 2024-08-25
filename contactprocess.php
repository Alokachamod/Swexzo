<?php
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['n'];
$email = $_POST['e'];
$subject = $_POST['s'];
$massage = $_POST['m'];

if(empty($name)){
    echo "Please enter your name.";
}else if(empty($email)){
    echo "Please enter your email.";
}else if(strlen($email) > 100){
    echo ("Email Address Must Contain LOWER THAN 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email Address.");
}else if(empty($subject)){
    echo "Please enter your subject number.";
}else if(empty($massage)){   
    echo "Please enter your message.";
}else{

    $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alokachamod3@gmail.com';
        $mail->Password = 'qgkt prib kccj fjwa';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('alokachamod3@gmail.com', 'submit contact data');
        $mail->addReplyTo('alokachamod3@gmail.com', 'submit contact data');
        $mail->addAddress('alokachamod3@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $bodyContent = 
        '<p> '.$name.'<br>
        '.$email.'<br>
        '.$massage.'</p>';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'submit failed.';
        } else {
            echo 'Success';
        }
    
}
?>

