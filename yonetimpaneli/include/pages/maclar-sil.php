<?php 
if(isset($_GET["pid"]))
{
	include("../../DB.php");
    include("../../getdata.php");
	$sorgu=$vt->prepare('DELETE FROM maclar WHERE ID=?');
	$sonuc=$sorgu->execute([$_GET['pid']]);
	if($sonuc){
		header("Location:maclar-liste.php"); 
	}
	else
		echo("Kayıt silinemedi.");
}
?>