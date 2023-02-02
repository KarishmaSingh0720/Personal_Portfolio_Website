<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once('config/config.php');
include_once('controller/ContactController.php');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                              
    
        $mail->SMTPDebug = 0;                                 
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;                               
        $mail->Username = 'youremail@gmail.com';              
        $mail->Password = 'yourpassword';                           
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                    

        //Recipients
        $mail->setFrom($email,$name);
        $mail->addAddress('youremail@gmail.com','Your Name');     

        //Content
        $mail->isHTML(true);     
        $mail->Subject = $subject;
        $mail->Body    = "<div><span>Name: </span><span>$name</span></div>
        <div><span>Email: </span><span>$email</span></div>
        <div><span>Subject: </span><span>$subject</span></div>
        <div><span>Message: </span><span>$message</span></div>";

        $contact=new ContactController();
        $result=$contact->sendMail($name,$email,$subject,$message);
        $result=$mail->send();
        if($result)
        {
            echo "<h5>".$_SESSION['message'] = "$name, I'm grateful that we got in touch.I'll reply as soon as i can."."</h5>";
            unset($_SESSION['message']);
        }else{
            echo "<h5>".$_SESSION['message'] = "Mesage is not sent"."</h5>";
            unset($_SESSION['message']);           
        }

    


    
    

