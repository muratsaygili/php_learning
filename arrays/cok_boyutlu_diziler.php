<?php
$icerik=array(
		"icecek"=>array("Su","Cola","Ayran"),
		"tost"=>array("karışık","kaşarlı","sucuklu")
);
print_r($icerik);
echo "<br/>*****************************<br/>";
$sonuclar['id']=array(1,2,3);
$sonuclar['ad']=array("murat","ali","veli");
$sonuclar['not']=array(76,32,66);
print_r($sonuclar);
?>
<h1>Üyeler-for() döngüsü ile..</h1>
<?php 
$uyeler=array(
		array('ad'=>'Murat Saygılı','email'=>'murat@ornek.com'),
		array('ad'=>'Murat Saygılı2','email'=>'murat2@ornek.com'),
		array('ad'=>'Murat Saygılı3','email'=>'murat3@ornek.com'),
		array('ad'=>'Murat Saygılı4','email'=>'murat4@ornek.com')
);
?>
<ul>
<?php for ($i=0,$size=count($uyeler);$i<$size;$i++) { ?>
<li>
<?php echo $uyeler[$i]['ad']; ?><br/>
<?php echo $uyeler[$i]['email'];?>
</li>
<?php } ?>
</ul>
<?php echo "<br/>*****************************<br/>"; ?>
<h1>Üyeler-foreach() ile..</h1>
<ul>
<?php foreach ($uyeler as $key => $value) { ?>
<li>
<?php echo $value['ad'];?><br/>
<?php echo $value['email'];?>
</li>
<?php }?>
</ul>
<?php echo "<br/>*****************************<br/>"; 
  ?>
<h1>while() ile..</h1>
<ul>
<?php 
reset($uyeler);
while (list($key,$value)=each($uyeler)) { ?>
<li>
<?php echo $value['ad'];?><br/>
<?php echo $value['email'];?>
</li>
<?php } ?>
</ul>
