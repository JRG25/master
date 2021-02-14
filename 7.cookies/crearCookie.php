<?php

//basica
setcookie("micookie","valor de cookie");

//cookie con expiracion de 1 año
setcookie("unyear", "valor de cookie de 365 dias", time()+(60+60*24*365));
header('location:ver_cookies.php');
?>


