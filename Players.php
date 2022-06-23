
<?php
include("deneme.php");
 
$sorgu=$vt->prepare('SELECT *FROM oyuncular');
$sorgu->execute();
$oyuncular=$sorgu-> fetchAll(PDO::FETCH_OBJ);

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

 
  <link href="assest/css/Playerlistcss.css" rel="stylesheet" type="text/css">
  

<style> 
::placeholder {

color:white;

opacity: 1;
}
::-webkit-input-placeholder {

color:white;
}
:-ms-input-placeholder {

color:white;
}
::-moz-placeholder { 

color:white;
}
:-moz-placeholder { 

color:white;
}

#myInput{
  max-width: 180px;
}
</style>


  <title>MatchMaker | Oyuncular</title>
</head>

<body>

  
<?php 
include_once("data/nav.php");
?>
  


 

  <div style="margin-top: 30px;" class="container">
    <div class="row">
      <div class="col">
        <h3>Oyuncu Sıralaması</h3>
        <hr>
      </div>
    </div>
    <div style="margin-top: 20px; margin-bottom: 40px;" class="row">
      <div class="col">
        <input class="btn-primary" id="myInput" class="form-control" type="text" placeholder="OYUNCU ARAMA">
      </div>

    </div>
    <div class="row">
      <div class="col">

        <table class="players" >
        <thead>
          <tr style="height: 70px;" >
            <th class="arrengmenttittle" >
              #

            </th>
            <td class="foottittle" >
              AYAK

            </td>
            <th class="playerphoto">

            </th>


            <td class="playernametittle">
              OYUNCU

            </td>
            <th class="positiontittle" >
              MEVKİ

            </th>
            <td class="agetittle">
              YAŞ
            </td>
          </tr>
</thead>
          
         
       <?php 
       $i=1;
       foreach($oyuncular as $oyuncu){?>
       <tbody id="myTable">
       <tr>
            <td class="arrengment" >
            <?= $i ?>

            </td>
            <td class="foot"  >
            <?= $oyuncu->ayak ?>

            </td>
            <td class="playerphoto" >
              <a href="PlayerSpecial.php?id=<?= $oyuncu->ID ?>"><img src="<?= $oyuncu->resim ?>"> 

            </td>
           <td class="playername">
            <a href="PlayerSpecial.php?id=<?= $oyuncu->ID ?>"><?= $oyuncu->isim ?></a>
          </td>
            <td class="position" >
            <?= $oyuncu->mevki ?>

            </td>
            <td class="age" >
             <?=date("Y")-$oyuncu->dogumtarihi ?>

            </td>

          </tr>
       </tbody>
          <?php $i=$i+1; } ?>
         
         
          
        </table>
        
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
  <script> 
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>