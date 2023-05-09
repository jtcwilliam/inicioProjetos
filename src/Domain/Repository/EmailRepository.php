<?php


namespace William\AssociadoAbimapi\Repository;
 

interface EmailRepository
{
    public static function encaminharEmail($email, $msg, $subject):  bool;
    public static function envioEmailPadrao($email, $msg, $subject): bool;
}


?>