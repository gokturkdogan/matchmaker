<?php 
include("deneme.php");



$id = $_GET["id"];

$sorgu=$vt->prepare('SELECT *FROM tesisler WHERE id=?');
$sorgu->execute(array($id));
$tesisler=$sorgu-> fetch(PDO::FETCH_ASSOC); 

$listlastones=$vt->prepare("SELECT * FROM oyuncular ORDER BY id DESC LIMIT 6 ");
$listlastones->execute();
$soneklenenoyuncular=$listlastones->fetchAll(PDO::FETCH_OBJ);








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
  <link href="assest/css/Playerspecialcss.css" rel="stylesheet" type="text/css">


  <title>MatchMaker | Tesis Detay</title>
</head>

<body>

  <!--Header Start-->
  <?php 
include_once("data/nav.php");
?>
  <!--Header End-->

  
  
  <div class="container">
    
    <div class="row">
      <div class="col"> 

        
    
      </div>
    </div>
        <div class="row">
          <div class="col-8">
            <h3><?php echo $tesisler["tesisadi"] ?></h3>
            <hr>
            <div style="background-color: white;  border: #D4D5DB;
            border-style: ridge;
            border-width: 1px;" class="row">
            <div class="col-4">
                <div class="playerphoto">
                <img src="<?php echo $tesisler["resim"] ?>">
            </div>
            </div>
            <div class="col">
                <div class="playerinfo">
                   <ul class="playerstats">
                       <li> <p class="playerstatkind">TESİS ADI:</p> <p class="playerstatvalue"><?php echo $tesisler["tesisadi"] ?></p></li>
                       <li> <p class="playerstatkind">SAHA SAYISI:</p> <p class="playerstatvalue"><?php echo $tesisler["sahasayisi"] ?></p></li>
                       <li> <p class="playerstatkind">TELEFON:</p> <p class="playerstatvalue"><?php echo $tesisler["telefon"] ?></p></li>
                       <li> <p class="playerstatkind">SAHA TİPİ:</p> <p class="playerstatvalue"><?php echo $tesisler["sahatipi"] ?></p></li>
                       <li> <p class="playerstatkind">ADRES:</p> <p class="playerstatvalue"><?php echo $tesisler["adres"] ?></p></li>
                    </ul>
                </div>
            </div>
        </div>
          </div>
          <div class="col">
            <h3>Konum Bilgisi</h3>
            <hr>
            <div class="position">
                <iframe src="<?= $tesisler['konum'] ?>"
                 width="100%" height="224px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    
        </div>
</div>
       

        

    
    






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