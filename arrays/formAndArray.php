Ay seç:<br/>
<select name="ay">
<?php 
$aylar=array('ocak','subat','mart','nisan','mayis','haziran',
		'temmuz','agustos','eylul','ekim','kasım','aralık');
foreach ($aylar as $ay){
	echo "<option value='$ay'>$ay</option>";
}
?>
</select>