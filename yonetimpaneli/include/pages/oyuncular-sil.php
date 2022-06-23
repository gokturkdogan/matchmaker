<?php 
if(isset($_GET["pid"]))
{
	include("../../DB.php");
    include("../../getdata.php");
	$sorgu=$vt->prepare('DELETE FROM oyuncular WHERE ID=?');
	$sonuc=$sorgu->execute([$_GET['pid']]);
	if($sonuc){
		header("Location:oyuncular-liste.php"); 
	}
	else
		echo("Kayıt silinemedi.");
}
?>