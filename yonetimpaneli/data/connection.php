<?php 
include_once(SINIF."class.upload.php");
include_once(SINIF."vt.php");
$VT= new VT ();
$ayarlar=$VT->getdata("ayarlar","WHERE ID=?",array(1),"ORDER BY ID ASC",1);
if($ayarlar!=false){
    $sitebaslik=$ayarlar[0]["baslik"];
    $siteanahtar=$ayarlar[0]["anahtar"];
    $siteaciklama=$ayarlar[0]["aciklama"];
    $sitetelefon=$ayarlar[0]["telefon"];
    $sitemail=$ayarlar[0]["mail"];
    $siteadres=$ayarlar[0]["adres"];
    $siteURL=$ayarlar[0]["url"];
}
?>