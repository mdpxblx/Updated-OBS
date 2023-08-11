<?php
session_start();
require('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($fname,$email,$verify_token)
{
    $mail = new PHPMailer(true);
    

    //Server settings
    //$mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fv091120@gmail.com';                     //SMTP username
    $mail->Password   = 'fatima123$';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
                 
    
    $mail->setFrom("fv091120@gmail.com", $fname);
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "OBS Verifaction";

    $emial_template = "To verify your account <a href='http://localhost/obs/verify_email.php?token=$verify_token'>Click Here</a>";

    $mail->Body    =  $emial_template;
    $mail->send();
    //echo 'Message has been sent';
}

if(isset($_POST['register_btn']))
{
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $addr = $_POST['addr'];
    $user_type = 'User';
    $pnum = $_POST['pnum'];
    $email = $_POST['email'];
    $usern = $_POST['usern'];
    $passw = $_POST['passw'];
    $verify_token = md5(rand());
    

    //email exist

    $cheack_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $cheack_email_query_run = mysqli_query($con,$cheack_email_query);

    if(mysqli_num_rows($cheack_email_query_run) > 0)
    {
        $_SESSION["status"] = "E-mail already exist.";    
        header("Location: register.php");
    }
    else
    {
        
        $query = "INSERT INTO users (user_type,usern,passw,f_name,l_name,pnum,addr,email,verify_token) VALUES ('$user_type','$usern','".md5($passw)."','$f_name','$l_name','$pnum','$addr','$email','$verify_token')";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            sendemail_verify("$f_name","$email","$verify_token");
            $_SESSION["status"] = "Plaease Cheack your Email for verifacation";    
            header("Location: login.php");
            echo'if';
        }
        else
        {
            $_SESSION["status"] = "Eror 404";    
            header("Location: register.php");  
            echo'elase';
        }
    } 
}
?>