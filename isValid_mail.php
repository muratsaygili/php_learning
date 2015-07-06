<?php

$ep=$_POST['eposta'];
if (filter_var($ep,FILTER_VALIDATE_EMAIL)){
	echo "Girdiğiniz e-posta adresi doğru";
}
else{
	die('E-posta adresi yanlış,yeniden deneyiniz');
}

?>
