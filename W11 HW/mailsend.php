<?php
require("DBconnect.php");

$title=$_POST["title"];
$message=$_POST["message"];
$message=nl2br($message);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src\Exception.php';
require 'src\PHPMailer.php';
require 'src\SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1083357@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'Suga19930309';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = "ssl";
    $mail->Charset="UTF-8";

    $SQL="SELECT * FROM email";
    if($result=mysqli_query($link,$SQL)){
        while($row=mysqli_fetch_assoc($result)){
            $mail->setFrom('a1083357@mail.nuk.edu.tw', 'vivi');
            $mail->addAddress($row["eEmail"]);
            $mail->isHTML(true);
            $mail->Subject = "=?utf-8?B?".base64_encode($title)."?=";
            $mail->Body    = $message;
        }
        $mail->send();
    }
    echo '訊息已傳送';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>