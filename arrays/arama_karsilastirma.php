<?php
$dizi=array('ad'=>'Murat',// extract() dizi anahtarlarını değişken yapar..
		'soyad'=>'Saygılı','sınıf'=>"CENG 2");
if(array_key_exists('soyad', $dizi))
	echo "Dizide bulunuyor";
echo "<br/>*****************************<br/>";
//in_array('Murat',$dizi)>>değeri dizide arar çıktısı var
$anahtar=array_search('Murat',$dizi); // >>değeri bulup anahtarını döndürür
// array_sum($dizi); >> dizi değerlerinde sayı varsa hepsini toplar
	if($anahtar)
		echo 'anahtarı: '.$anahtar;	
echo "<br/>*****************************<br/>";
// array_intersect()>> dizilerin aynı isimli ortak elemanlarını bulur.
// array_intersect_assoc()>> ilişkili dizilerin ortak elemanlarını bulur.
$dizia=array("a"=>"yeşil","b"=>"kırmızı","c"=>"mavi");
$dizib=array("a"=>"yeşil","b"=>"kırmızı","c"=>"mor");
$ortak=array_intersect_assoc($dizia, $dizib);
print_r($ortak);
// >>>>>>>> array_diff($dizia,$dizib);>> ortak olmayan elemanları verir..a'nın b'den farklı olanları
echo "<br/>*****************************<br/>";
$array=explode(" ","iki iki üç bir iki bir üç üç iki");
$array2=array_count_values($array);//benzer elemanlardan kaç tane olduğunu bulur
arsort($array2);
$array2=array_flip($array2);
foreach ($array2 as $key => $value)
	echo $value.' ('.$key.' tane var)<br/>';
echo "*****************************<br/>";


?>