<?php
$meyve=array("d"=>"limon","a"=>"portakal","b"=>"elma","c"=>"üzüm");
print_r($meyve); echo "<br/>";
ksort($meyve);//>>> diziyi anahtarlarına göre sıralar
print_r($meyve);
echo "<br/>*****************************<br/>";
$meyve=array("d"=>"limon","a"=>"portakal","b"=>"elma","c"=>"üzüm");
print_r($meyve); echo "<br/>";
krsort($meyve);//>>> diziyi anahtarlarına göre "" tersten "" sıralar
print_r($meyve);
echo "<br/>*****************************<br/>";
$meyve=array("d"=>"limon","a"=>"portakal","b"=>"elma","c"=>"üzüm");
print_r($meyve); echo "<br/>";
asort($meyve);//>>> diziyi değerlerine göre ilişkiyi bozmadan sıralar
print_r($meyve);
echo "<br/>*****************************<br/>";
$meyve=array("d"=>"limon","a"=>"portakal","b"=>"elma","c"=>"üzüm");
print_r($meyve); echo "<br/>";
$meyve=array_reverse($meyve);///>> diziyi tersine çevirip döndürür..
print_r($meyve);
echo "<br/>*****************************<br/>";
//array_multisort(dizi,seçenek,dizi,seçenek)>>dizilerin eleman sayıları eşit olmalı
$dizi1=array(0,100,2,4,1,9,79,28,8);
$dizi2=array(1,3,2,5,9,7,6,19,10);
array_multisort($dizi1,SORT_ASC,$dizi2,SORT_ASC);
echo implode("-", $dizi1)."<br/>";
echo implode("-", $dizi2)."<br/>";
echo "<br/>*****************************<br/>";
$dizi3=explode(" ", "bir iki iki üç bir iki iki üç üç");
echo "<b>Gruplandırarak sıralama</b><br/>";
natsort($dizi3);//>> anahtar değerleri değişmez
print_r($dizi3);
echo "<br/>";
unset($dizi3);
$dizi3=explode(" ","bir iki iki üç bir iki iki üç üç");
usort($dizi3, "strnatcmp");//>> anahtar değerleri değişir..
print_r($dizi3);







?>