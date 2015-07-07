<?php
## satır sonları ; ile biter, #,//,/*xxx*/ comment yapar.
##veritabanı bağlantı kontrolü-id:root;pw:1234
$link = mysql_connect('localhost','root','1234');
if (!$link){
	die('Bağlanamadı: ' . mysql_error());
}
echo 'Başarıyla bağlandı <br />';
mysql_close($link);


$deger="123.222.3 abc";
$a=(int)$deger;
$b=(float)$deger;
$c=(string)$deger;

var_dump($a); print '<br />';
var_dump($b); print '<br />';
var_dump($c); print '<br />';

print gettype($b).'<br/>'; // double çıktısı verir..

/*
trim sağda ve solda boşlukları siler -- ltrim(soldaki), rtrim(sağdaki)
unset---değişkeni siler ve tanımsız yapar
isset-değişken tanımlı mı diye bakar
empty-null olup olmadığına bakar

*/
$a=isset($a)?'tanımlı' : 'tanımsız';

# hangi tarayıcı kullanıldığını bulur..
$tarayici=$_SERVER['HTTP_USER_AGENT'];
$msie=strpos($tarayici,'MSIE')?true:false;
$firefox=strpos($tarayici,'Firefox')?true:false;
$chrome=strpos($tarayici,'Chrome')?true:false;
echo ($msie)? 'intenet explorer kullanıyorsun':'';
echo ($firefox)? 'firefox kullanıyorsun':'';
echo ($chrome)? 'chrome kullanıyorsun':'';
		

$baslik='makale başlığım';
$detay='makale içeriğim';
echo <<<CSS
<style>
.makale{margin:4px;padding:6px;border-bottom: 1px solid silver}
.baslik{margin:0pxx;border-bottom: 1px dashed red;color:orange}
</style>
CSS;
echo <<<YAZI
<div class="makale">
<h3 class="baslik">$baslik 1</h3>
		$detay
		</div>
<div class="makale">
<h3 class="baslik">$baslik 2</h3>
		$detay
		</div>
		
YAZI;


?>
