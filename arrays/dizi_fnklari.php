<?php
$dizi=array("bir","iki","üç");
if(is_array($dizi))//dizi olup olmadığını kontrol eder
	echo "Evet dizidir";
else 
	echo "Dizi değildir";

echo "<br/>*****************************<br/>";

$metin="bir iki üç";
$dizi1=explode(" ", $metin);//verilen metni boşluğa göre ayırarak diziye atar..
print_r($dizi1);
echo "<br/>*****************************<br/>";
$sayilar=implode(",", $dizi1);//dizi elemanlarını birleştirip metin elde eder..
echo $sayilar;
echo "<br/>*****************************<br/>";
$dizi2=array("ece","can","gül","merve");
//rastgele değişken tanımlayarak diziden bilgi elde edelim
list($ad1,$ad2,$ad3,$ad4)=$dizi2;
echo "Üyelerimiz: $ad1,$ad2,$ad3,$ad4\n";
echo "<br/>*****************************<br/>";
$sonuc=each($dizi2);//dizinin ilk anahtar-değer çiftini döndürür
print_r($sonuc);
echo "<br/>*****************************<br/>";
$dizi2=array("ece","can","gül","merve");
echo "<h3>list() ve each() birlikte</h3>";
while (list($anahtar,$deger)=each($dizi2)){
	echo "$anahtar => $deger<br/>";
}
echo "<br/>*****************************<br/>";
$dizi3=array('ad'=>'Murat',// extract() dizi anahtarlarını değişken yapar..
		'soyad'=>'Saygılı','no'=>12253059);
extract($dizi3);
echo "Öğrenci: ".$ad." " .$soyad." , No: ".$no;
echo "<br/>*****************************<br/>";
/*
 * current()_>dizi değişkenin ilk elemanını verir
 * end()_>son elemanı verir
 * next()_>bir sonraki eleman
 * prev()_>bir önceki eleman
 * reset()_>fonksiyonu başa döndürüyor,yani index en başa geliyor
 */
// -------ARRAY_MAP(FNK,DİZİ1,DİZİ2,...) FNK
echo "<h3>array_map() fonksiyonu</h3>";
function fiyat_bilgisi($n,$m,$s){
	return ("$n nolu ürün olan $m'in fiyatı: $s TL dir.");
}
$a=array(1,2,3,4,5);
$b=array("kalem","defter","silgi","cetvel","pergel");
$c=array("0,75","2,5","0,5","1,5","1,25");
$d=array_map('fiyat_bilgisi', $a,$b,$c);
print_r($d);



?>

