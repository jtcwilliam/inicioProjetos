<?php

namespace William\AssociadoAbimapi\Infrastructure\Repository;

use William\AssociadoAbimapi\Model\Email;
use William\AssociadoAbimapi\Repository\EmailRepository;
use PHPMailer\PHPMailer\PHPMailer;
 

class EncaminharEmail implements EmailRepository
{

    public function __construct()
    {
        require '../../../vendor/autoload.php';


    }

    public static function encaminharEmail($addres, $msg, $subject): bool
    {
 

         
        $objEmail = new Email($addres, $msg, $subject);

        
        echo '<pre>'.print_r($objEmail).'</pre>';

            return true;
        
 
    }

    public static function envioEmailPadrao($email, $msg, $subject): bool
    {
        
         
            $mail = new PHPMailer(true);

            header('Content-Type: text/html; charset=UTF-8');

            $mail->CharSet = 'UTF-8';
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
           

            /*
                



            */
           
            $mail->Username = 'jtcwilliam@gmail.com'; //SMTP username
            $mail->Password = 'skubiwbgkryillpp'; //SMTP password
           
           
            $mail->SMTPSecure = 'tls';
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            //  $mail->setFrom('suporte@associado.abimapi.com.br', 'Mailer');
            $mail->addAddress($email, '');

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if ($mail->send()) {
                return true;
            }else{
                return false;
            }
        

        
    }

    

}







?>