<?php
$dizi=file("dosya.txt");
$satir=count($dizi);
echo "Dosyada toplam $satir satır var.<br/> ";
		foreach ($dizi as $sira => $value) {
			echo ($sira+1)."-".$value."<br/>";
		}
		echo "*****************************<br/>";
		echo array_shift($dizi)."<br/>";//ilk elemanı çıkarıp döndürür
		echo "*****************************<br/>";
		foreach ($dizi as $sira => $value) {
			echo ($sira+1)."-".$value."<br/>";
		}
		echo "*****************************<br/>";
		array_unshift($dizi, "Matematik");
		
		foreach ($dizi as $sira => $value) {
			echo ($sira+1)."-".$value."<br/>";
		}
		echo "*****************************<br/>";
		echo array_pop($dizi);//son elemanı çıkarıp döndürür.
		echo "<br/>*****************************<br/>";
		array_push($dizi,"Biyoloji","Bilgisayar");
		foreach ($dizi as $sira => $value) {
			echo ($sira+1)."-".$value."<br/>";
		}
		echo "*****************************<br/>";
		echo implode(" - ", $dizi)."<br/>";//yazdırma seçeneği, diziyi değiştirmez
		echo join(" & ", $dizi);
		echo "<br/>*****************************<br/>";
		echo "*****************************<br/>";
		$dizi1=array("ad"=>"Murat","soyad"=>"Saygılı");
		print_r($dizi1);
		echo "<br/>".$dizi1['ad']; echo "<br/>"; //ad değeri yazdırıldı
		$araba=array("model"=>2013,"fiyat"=>20000);//araba array
		print_r($araba); echo "<br/>";
		$araba['agirlik']=1300; echo "<br/>";//ağırlık eklendi..
		print_r($araba);
		echo "<br/>*****************************<br/>";
		unset($araba['agirlik']);//agirlik anahtarı diziden silindi
		print_r($araba); echo "<br/>";
		//unset($araba);//diziyi tamamen siler
		foreach ($araba as $key => $value){//foreach ile bütün elemanları alırız.
			echo $key."->".$value."<br/>";
		}
		echo "<br/>*****************************<br/>";
?>

