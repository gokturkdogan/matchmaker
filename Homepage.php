<?php
include("deneme.php");
 
$sorgu=$vt->prepare('SELECT *FROM tesisler');
$sorgu->execute();
$tesisler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
 
$listlastones=$vt->prepare("SELECT * FROM oyuncular ORDER BY id DESC LIMIT 6 ");
$listlastones->execute();
$soneklenenoyuncular=$listlastones->fetchAll(PDO::FETCH_OBJ);



$sorgu2=$vt->prepare('SELECT *FROM maclar');
$sorgu2->execute();
$maclar=$sorgu2-> fetchAll(PDO::FETCH_OBJ);
?>
<?php
$sorgu3 = $vt->prepare('SELECT COUNT(*) FROM oyuncular');
$sorgu3->execute();
$say = $sorgu3->fetchColumn();
?>

<?php
$sorgu=$vt->prepare('SELECT *FROM oyuncular ORDER BY id LIMIT 5');
$sorgu->execute();
$oyuncular=$sorgu-> fetchAll(PDO::FETCH_OBJ);
?>


<?php
$sorgu4 = $vt->prepare('SELECT COUNT(*) FROM maclar ORDER BY id LIMIT 5');
$sorgu4->execute();
$say1 = $sorgu4->fetchColumn();
?>

<?php
$sorgu5 = $vt->prepare('SELECT COUNT(*) FROM tesisler');
$sorgu5->execute();
$say2 = $sorgu5->fetchColumn();
?>


<?php

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Roboto:wght@300&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Roboto:wght@300;500&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400&family=Roboto:wght@300;500&display=swap"
    rel="stylesheet">
  <link rel="preload" href="/fonts/materialdesignicons-webfont.woff2?v=1.4.57" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link href="assest/css/Homepagecss.css" rel="stylesheet" type="text/css">



  <title>MatchMaker</title>
</head>

<body>

  <!--Header Start-->

<?php 
include_once("data/nav.php");
?>

  <!--Header End-->



<!--Content Start-->

  <div class="container">
    
    <!--Hr Start-->
    <div class="container">
      <div class="row">
        
        <div class="col">
          <h3 class="tittle1">MatchMaker</h3>
          <hr style="width: 206%;">
        </div>

        <div class="col">
          <h3>İstatistikler</h3>
        </div>

        <div class="col">
          <h3>Tesisler</h3>
          <hr>
        </div>

      </div>
    </div>
    <!--Hr End-->


    <div class="container">
      <div class="row">
        <div class="col">
           <!--About Start-->
          <div class="row">
            <div class="about">
              <p>
                <b>BİREYSEL VE EKİP HALİNDE KULLANABİLECEĞİNİZ BİR SİSTEM OLAN MATCHMAKER SİSTEMİ. OYUNCULARIN
                  İLETİŞİM BİLGİLERİNİ VE KATILDIKLARI MAÇLARDA ELDE ETTİKLERİ
                  İSTATİSTİKLERİ BİR ARAYA GETİREREK, OYUNCULAR ARASINDA BİR SIRALAMA SİSTEMİ OLUŞTURMAKTADIR.
                  BU SAYEDE GELECEKTE ORGANİZE EDECEK OLDUĞUNUZ MAÇLARIN REKABET SEVİYESİNİ ARTTIRIP
                  DAHA KEYİFLİ VE VERİMLİ MÜSABAKALAR DÜZENLEMENİZE, AYNI ZAMANDA HİÇBİR ZAMAN EKSİK
                  OYUNCU SIKINTISI YAŞAMAMANIZA YARDIMCI OLUYOR.</b>
              </p>
            </div>
          </div>
           <!--About End-->
          
          <h3> En Beğenilenler</h3>
          <hr style="width: 206%;">

          <!--BestPlayers Start-->
          <div class="row">
            <div class="col">
              <table class="bestplayers">

                <tr style="background-color: #35AD79; height: 80px;">
                  <td style="padding-left: 20%;">
                    <a class="bestplayersbtn" href="Players.php">EN BEĞENİLEN OYUNCULAR</a>
                  </td>
                </tr>
                <?php 
                $i=1;
                foreach($oyuncular as $oyuncu){?>
                <tr>
                  <td style="color: #35AD79;"><?= $i ?> 
                  <a class="btn-secondary" href="PlayerSpecial.php?id=<?= $oyuncu->ID ?>"> <img src="<?= $oyuncu->resim ?>"> <b><?= $oyuncu->isim ?> <?= $oyuncu->soyisim ?></b></a> </td> 
                </tr>
                        <?php $i=$i+1; } ?> 

              </table>






            </div>

          </div>
           <!--BestPlayers End-->

        </div>


        <div class="col">

          <table class="stats">
            <tr>
              <th>
                <p><?php echo $say; ?> </p> <br>
                <a class="btn-primary" href="Players.php">OYUNCULAR</a>
              </th>

              <th>
                <p><?php echo $say1; ?></p> <br>
                <a class="btn-primary" href="AddMatches.php">YAPILAN MAÇLAR</a>
              </th>


            </tr>

            <tr style="padding-top:40px">
              <th style="margin-top:40px">
                <p></p> <br>
                <a class="btn-primary" href="#footer">İLETİŞİM</a>
              </th>

              <th>
                <p><?php echo $say2; ?></p> <br>
                <a class="btn-primary" href="facilities.php">TESİSLER</a>
              </th>


            </tr>

          </table>


          <div class="col">
            
             
            
            <table class="bestfields">

              <tr style="background-color: #35AD79; height: 80px;">
                <td style="padding-left: 20%;" >
                  <a class="bestplayersbtn" href="#">YAPILAN/YAPILACAK MAÇLAR</a>
                </td>
              </tr>

              <?php
              $i=1;
              foreach($maclar as $mac){?>
              <tr>
                <td style="color: #35AD79;"><?= $i ?> <a class="btn-secondary" href="MatchSpecial.php?id=<?= $mac->ID ?>"> <img src="assest/images/indir.jpg"> <b><?= $mac->tarih ?>
                      </b</a> </td> </tr><?php 
                    $i+=1;} ?>
                       

            </table>








          </div>


        </div>
        <div class="col">


          <table class="fields">

          <?php foreach($tesisler as $tesis){?>
            <tr>
              <td><img style="width:150px;height:100px" src="<?= $tesis->resim ?>"> <a href="FacilitySpecial.php?id=<?= $tesis->ID ?>"><?= $tesis->tesisadi ?></a> <br></td>


            </tr>
            <?php } ?>
          
          </table>
        </div>
      </div>

    </div>
  </div>

  <!--Content End-->

<?php
include_once("data/footer.php");
?>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>