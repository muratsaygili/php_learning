<?php
// eleman çıkarma array_splice()
$dizi=array("can","gül","ece","mert","eda");
array_splice($dizi,	1,3);
print_r($dizi);
// eleman ekleme array_splice()
$dizi=array("can","gül","ece","mert","eda");
array_splice($dizi,1,3,"hasan");
print_r($dizi);
echo "<br/>*****************************<br/>";
// dizinin istediğimiz kısmını alma>> array_slice()
$dizi=array("can","gül","ece","mert","eda");
$dizi2=array_slice($dizi, 0,3);
echo join(" & ", $dizi2);
echo "<br/>*****************************<br/>";
$dizi1=array("yeşil","kırmızı","mavi","kırmızı","sarı","yeşil");
$ayikla=array_unique($dizi1);//dizideki aynı olan elemanları siler
echo join(" & ",$dizi1)."<br/>ayıklanmış hali> <br/>";
echo join(" & ",$ayikla);
echo "<br/>*****************************<br/>";
$parcala=array("yeşil","kırmızı","mavi","kırmızı","sarı","yeşil");
print_r(array_chunk($parcala, 3));//diziyi parçalara böler çok boyutlu dizi olur
echo "<br/>*****************************<br/>";
$ogrenci=array('ad'=>'Murat','soyad'=>'Saygılı','sınıf'=>"CENG 2");
print_r($ogrenci);
echo "<br/>Sonra: <br/>";
$ogrenci=array_flip($ogrenci);
print_r($ogrenci);
echo "<br/>*****************************<br/>";
echo "##<b>DİZİLERDE BİRLEŞTİRME</b>##";
echo "<br/>*****************************<br/>";
$dizi1=array("can","gül","ece");
$dizi2=array("mert","eda");
$birlesik=array_merge($dizi1,$dizi2);//////////////////
print_r($dizi1); echo "<br/>";
print_r($dizi2); echo "<br/>";
print_r($birlesik);
echo "<br/>*****************************<br/>";
$bir=array("Ders1","C programlama");
$iki=array("Ders2","Algoritmalar");
$uc=array("Ders3","Veri Yapıları");
$birlestir=array_merge_recursive($bir,$iki,$uc);
while (list($anahtar,$deger)=each($birlestir)){
	print $anahtar."<b>. sırada</b> ".$deger." <b>var</b><br/>";
}
echo "<br/>*****************************<br/>";
$bir=array("Ders1"=>"C programlama");
$iki=array("Ders2"=>"Algoritmalar");
$uc=array("Ders3"=>"Veri Yapıları");
$birlestir=array_merge_recursive($bir,$iki,$uc);
while (list($anahtar1,$deger1)=each($birlestir)){
	print $anahtar1."<b> 'in değeri:  </b>".$deger1."<br/>";
}
echo "<br/>*****************************<br/>";
//// array_walk(dizi,fnk,veri)>>>bir fnk u dizideki bütün elemanlara uygular.
$walk=array("ders"=>"ingilizce",
			"ders1"=>"matematik",
			"ders2"=>"fizik");
function diziyaz($eleman){//elemanları yazdıran fnk
	echo "$eleman <br/>";
}
array_walk($walk, 'diziyaz');
echo "<br/>*****************************<br/>";
?>






















