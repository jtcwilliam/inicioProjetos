<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EnvioEmail
{

    private $email;

    public function __construct()
    {
        require 'vendor/autoload.php';

    }

    public static function enviarEmail($address, $msg, $subject)
    {

        try {
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
            $mail->addAddress($address, '');

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if ($mail->send()) {
                return true;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

class TesteEnvio
{

    public static  function testeEnvioCurs(): bool
    {
        
        echo 'retorno teste';

        return true;

        
    }
}
