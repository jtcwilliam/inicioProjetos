<?php


namespace William\AssociadoAbimapi\Model;


class Email 
{

    private string $email;
    private string $msg;
    private string $subject;


    public  function __construct($email, $msg, $subject)
    {
        
        $this->email = $email;
        $this->msg = $msg;
        $this->subject = $subject;
    
    }
     

    public function email(): string
    {
        return $this->email;
    }

    
    public function msg(): string
    {
        return $this->msg;
    }

    
    public function subject(): string
    {
        return $this->subject;
    }
 
}