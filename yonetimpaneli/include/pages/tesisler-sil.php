<?php 
if(isset($_GET["pid"]))
{
	include("../../DB.php");
    include("../../getdata.php");
	$sorgu=$vt->prepare('DELETE FROM tesisler WHERE ID=?');
	$sonuc=$sorgu->execute([$_GET['pid']]);
	if($sonuc){
		header("Location:tesisler-liste.php"); 
	}
	else
		echo("Kayıt silinemedi.");
}
?>