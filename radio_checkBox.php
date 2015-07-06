<?php
echo "Cinsiyet; ".$_POST['cinsiyet'].".<br/>";
echo "Yabancı Dil:<br/>";
foreach ($_POST['dil'] as $anahtar=>$deger){
	echo $deger."<br/>";
}

?>
