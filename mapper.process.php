<?php 
    $result = "";
    $error  = "";
if(isset($_POST['submit']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "worldarabgaming.help@gmail.com"; // Your mail
    $mail->Password = 'worldarabgaming1234567890'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email']);
    $mail->addAddress('worldarabgaming.help@gmail.com');
    $mail->addReplyTo($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject='Rank Mapper';
    $mail->Body='<h3>Name: '.$_POST['fulname'].'<br>Email: '.$_POST['email'].'<br>Facebook: '.$_POST['fbaccount'].'<br>mapperJob: '.$_POST['mapperjob'].'<br>MAP-link: '.$_POST['map-link'].'</h3>';
    if(!$mail->send())
    {
        $error = "Something went worng. Please try again.";
    }
    else 
    {
        $result="Thanks\t" .$_POST['fulname']. " for contacting us.";
    }
}
header('location: formsendcomplete.php');
?>