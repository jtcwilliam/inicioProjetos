<?php

use William\AssociadoAbimapi\Infrastructure\Repository\EncaminharEmail;
use William\AssociadoAbimapi\Model\Email;

require 'vendor/autoload.php';


ob_flush();?>



<html>
<body>
<h1>Tudo está bem no envio do email</h1>
</body>
</html>






<?php
$msg = ob_get_contents();


EncaminharEmail::envioEmailPadrao($_GET['email'], $msg, 'deu certo');
 



 
?>