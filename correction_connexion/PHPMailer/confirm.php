
<!--fichier exo -->
<?php
require "./PHPMailer/PHPMailerAutoload.php";
/**
 * Cette fonction créer un token unique
 * @param int @length
 * @return string
 */


function TokenConfirm($length) { // 10
    $tokenc = "_0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($tokenc, $length)), 0, $length);
}



function SendEmail($id, $tokenc, $email) {
    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $mail = new PHPMailer();        

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp-mail.outlook.com';
        $mail->Port = 587;   
        $mail->SMTPSecure = 'tls';    

        $mail->Username = $from;
        $mail->Password = 'DWWMauboue';

        $mail->isHTML();
        $mail->From = $from;
        $mail->FromName = $from_name;
        $mail->Sender = $from;
        $mail->addReplyTo($from, $from_name);
        $mail->CharSet = 'utf-8';
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($to);

        if (!$mail->Send()) {
            echo "Le mail ne c'est pas envoyé ressayer plus tard";
        } else {
            echo "Le mail c'est envoyé avec succés";
        }

    }
    $msg = "Votre compte a bien été créé";  
    smtpmailer($email, 'dwwm.auboue@hotmail.com', 'confirmation', "compté créé", $msg);                               
}