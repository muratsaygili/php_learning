<?php 
$zar1="";
$zar2="";
if (array_key_exists("zar1", $_POST)){
	$zar1=$_POST["zar1"];
}
if (array_key_exists("zar2", $_POST)){
	$zar2=$_POST["zar2"];
}

if (is_numeric($zar1) && is_numeric($zar2)){
	if (($_POST['zar1'])<7 && ($_POST['zar1'])>0 && ($_POST['zar2'])<7 && ($_POST['zar2'])>0){
		
		
		
		$sayi1=rand(1,6);
		$sayi2=rand(1,6);
		$tahmin=0;
		
		if($_POST['zar1']==$sayi1) $tahmin++;
		if($_POST['zar1']==$sayi2) $tahmin++;
		if($_POST['zar2']==$sayi1) $tahmin++;
		if($_POST['zar2']==$sayi2) $tahmin++;
		echo '<p>Bilgisayarın attığı zarlar</p>';
		echo "<img src='$sayi1.gif' border='0'/>";
		echo "<img src='$sayi2.gif' border='0'/>";
		echo '<p>Senin tahmin ettiğin zarlar</p>';
		echo "<img src='{$_POST['zar1']}.gif' border='0'/>";
		echo "<img src='{$_POST['zar2']}.gif' border='0'/>";
		if ($tahmin>0) echo "<p>Tebrikler, $tahmin zarı doğru bildiniz</p>";
		else echo "<p>Tahminler tutmadı, şansını yeniden dene..</p>";
		
	}//ikinci if
}//birinci if
?>



<p>1 ila 6 arası iki rakam gir ve zar tahmini yap.</p>
<form action="" method="post">
<input type="text" name="zar1" maxlength="1" size="1">
<input type="text" name="zar2" maxlength="1" size="1">
<input type="submit" value="Tahmin et!">
</form>

