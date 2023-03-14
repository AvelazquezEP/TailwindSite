<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
// $from = "info@impresioneslk.com";
// $to = "beto.martinez.velazquez@gmail.com";
// $subject = "Checking PHP mail";
// $message = "PHP mail works just fine";
// $headers = "From:" . $from;
// mail($to,$subject,$message, $headers);
// echo "The email message was sent.";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST['nl'];
$lastName = $_POST['ot'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.impresioneslk.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@impresioneslk.com';                     //SMTP username
    $mail->Password   = 'Blackveil175';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@impresioneslk.com', 'Mailer LAIA');
    // $mail->addAddress('iku@abogadoericprice.com', 'Ivi :b');               //Name is optional
    // $mail->addAddress('avelazquez@abogadoericprice.com', 'Avelazquez');     //Add a recipient
    $mail->addAddress('iquinones@abogadoericprice.com', 'IvanQ');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Someone has opted in to form AEP Google PPC';
    // $mail->Body    = 'First Name: ';
    $mail->Body = $name + " " + $lastName;
    $mail->AltBody = 'Aqui estaba algo pero no se que es jeje :b';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
