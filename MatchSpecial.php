<?php 
include("deneme.php");



$id = $_GET["id"];

$sorgu=$vt->prepare('SELECT *FROM maclar WHERE id=?');
$sorgu->execute(array($id));
$maclar=$sorgu-> fetch(PDO::FETCH_ASSOC); 

$puan = $maclar["takimakalecipuan"];
$sorgu2=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu2->execute(array($puan));
$oyuncupuan=$sorgu2-> fetch(PDO::FETCH_ASSOC); 

$puan1 = $maclar["takimadefans1puan"];
$sorgu3=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu3->execute(array($puan1));
$oyuncupuan1=$sorgu3-> fetch(PDO::FETCH_ASSOC); 

$puan2 = $maclar["takimadefans2puan"];
$sorgu4=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu4->execute(array($puan2));
$oyuncupuan2=$sorgu4-> fetch(PDO::FETCH_ASSOC); 

$puan3 = $maclar["takimadefans3puan"];
$sorgu5=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu5->execute(array($puan3));
$oyuncupuan3=$sorgu5-> fetch(PDO::FETCH_ASSOC); 

$puan4 = $maclar["takimaortasaha1puan"];
$sorgu6=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu6->execute(array($puan4));
$oyuncupuan4=$sorgu6-> fetch(PDO::FETCH_ASSOC); 

$puan5 = $maclar["takimaortasaha2puan"];
$sorgu7=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu7->execute(array($puan5));
$oyuncupuan5=$sorgu7-> fetch(PDO::FETCH_ASSOC); 

$puan6 = $maclar["takimaforvetpuan"];
$sorgu8=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu8->execute(array($puan6));
$oyuncupuan6=$sorgu8-> fetch(PDO::FETCH_ASSOC); 

$puan7 = $maclar["takimbkalecipuan"];
$sorgu9=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu9->execute(array($puan7));
$oyuncupuan7=$sorgu9-> fetch(PDO::FETCH_ASSOC); 

$puan8 = $maclar["takimbdefans1puan"];
$sorgu9=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu9->execute(array($puan8));
$oyuncupuan8=$sorgu9-> fetch(PDO::FETCH_ASSOC); 

$puan9 = $maclar["takimbdefans2puan"];
$sorgu10=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu10->execute(array($puan9));
$oyuncupuan9=$sorgu10-> fetch(PDO::FETCH_ASSOC); 

$puan10 = $maclar["takimbdefans3puan"];
$sorgu11=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu11->execute(array($puan10));
$oyuncupuan10=$sorgu11-> fetch(PDO::FETCH_ASSOC); 

$puan11 = $maclar["takimbortasaha1puan"];
$sorgu12=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu12->execute(array($puan11));
$oyuncupuan11=$sorgu12-> fetch(PDO::FETCH_ASSOC);

$puan12 = $maclar["takimbortasaha2puan"];
$sorgu13=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu13->execute(array($puan12));
$oyuncupuan12=$sorgu13-> fetch(PDO::FETCH_ASSOC);

$puan13 = $maclar["takimbforvetpuan"];
$sorgu14=$vt->prepare('SELECT *FROM puan WHERE puan=?');
$sorgu14->execute(array($puan13));
$oyuncupuan13=$sorgu14-> fetch(PDO::FETCH_ASSOC);







$sorgu1=$vt->prepare('SELECT * FROM tesisler WHERE tesisadi=?');
$sorgu1->execute(array($maclar['tesis']));
$tesisresmi=$sorgu1-> fetch(PDO::FETCH_OBJ);

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

  <style> 

.dizilis{
  background-image: url("assest/images/halisahakroki.jpg");
  background-size: 100%;
  color:#FFF;
  width: 80%;
  height: 625px;
  border-style: solid;
  border-width: 10px;
  border-radius: 30px;
  border-color: black;
}

.dizilis:hover{
  border-color: #35AD79;
}

.playericon{
  border-style: none;
}

.takimb{
  background-color: #D40000;
  border-radius: 7px;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 2px;
  padding-bottom: 2px;
}
.takima{
  background-color: #FFF;
  color:black;
  border-radius: 7px;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 2px;
  padding-bottom: 2px;
}

.skorboard{
  background-image: url("assest/images/skorboard.png");
  background-size: 100%;
  width: 60%;
  height: 200px;
  color:#FFF
}

.skor{
  font-size: 55px;
}

.time{

  font-size: 25px;
}

.team {
  font-size: 11px;
}






 </style>





  <title>MatchMaker | Maç Detay</title>
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
          <div class="col">
            <h3><?php echo $maclar["tarih"]?> <?php echo $maclar["tesis"]?></h3>
            <hr>
            <div style="background-color: white;  border: #D4D5DB;
            border-style: ridge;
            border-width: 1px;
            padding-bottom:30px" class="row">
            <div class="col-5">
                <div class="playerphoto">
                <div class="dizilis">
                  <div style="text-align:center;padding-top:5px" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimakaleciicon.png"> <br>
                      <span class="takima"><?php echo $maclar["takimakaleci"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"><?php echo $maclar["takimadefans1"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"><?php echo $maclar["takimadefans2"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"><?php echo $maclar["takimadefans3"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"> <?php echo $maclar["takimaortasaha1"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"><?php echo $maclar["takimaortasaha2"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimaicon.png"> <br>
                      <span class="takima"> <?php echo $maclar["takimaforvet"]?></span>
                    </div>
                  </div>

                  <div style="text-align:center;margin-top:30px" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbforvet"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                    <span class="takimb"><?php echo $maclar["takimbortasaha2"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbortasaha1"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;padding-top:10px" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbdefans3"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbdefans2"]?></span>
                    </div>
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbdefans1"]?></span>
                    </div>
                  </div>
                  <div style="text-align:center;padding-top:5px" class="row">
                    <div class="col">
                      <img style="border-style:none;width:50px" class="playericon" src="assest/images/takimbkaleciicon.png"> <br>
                      <span class="takimb"><?php echo $maclar["takimbkaleci"]?></span>
                    </div>
                  </div>




                </div>
            </div>
            </div>
            <div class="col">
            <div class="row">
                <div class="playerinfo">
                   <ul class="playerstats">
                       <li> <p class="playerstatkind">MAÇ TARİHİ:</p> <p class="playerstatvalue"><?php echo $maclar["tarih"] ?></p></li>
                       <li> <p class="playerstatkind">MAÇ SAATİ:</p> <p class="playerstatvalue"><?php echo $maclar["saat"] ?></p></li>
                       <li> <p class="playerstatkind">OYNANDIĞI TESİS:</p> <p class="playerstatvalue"><?php echo $maclar["tesis"] ?></p></li>
                       </ul>
</div>
</div>
<div class="row">

  <div class="col">
  <ul class="playerstats">
<p style="font-family: Kanit;"  class="playerstatkind">TAKIM A:</p>  <p style="color: #35AD79;" class="playerstatvalue">
                        <?php echo $maclar["takimakaleci"]?> <img style="width:30%" src="<?= $oyuncupuan["url"] ?>"> <br>
                       <?php echo $maclar["takimadefans1"]?> <img style="width:30%" src="<?= $oyuncupuan1["url"] ?>"> <br>
                       <?php echo $maclar["takimadefans2"]?> <img style="width:30%" src="<?= $oyuncupuan2["url"] ?>"><br>
                       <?php echo $maclar["takimadefans3"]?> <img style="width:30%" src="<?= $oyuncupuan3["url"] ?>"><br>
                       <?php echo $maclar["takimaortasaha1"]?> <img style="width:30%" src="<?= $oyuncupuan4["url"] ?>"> <br>
                       <?php echo $maclar["takimaortasaha2"]?> <img style="width:30%" src="<?= $oyuncupuan5["url"] ?>"> <br>
                       <?php echo $maclar["takimaforvet"]?> <img style="width:30%" src="<?= $oyuncupuan6["url"] ?>">
                       </p>
</ul>
</div>


<div class="col">
<ul class="playerstats">
<p style="font-family: Kanit;" class="playerstatkind">TAKIM B:</p>   <p style="color: #35AD79;" class="playerstatvalue">
                        <?php echo $maclar["takimbkaleci"]?><img style="width:30%" src="<?= $oyuncupuan7["url"] ?>">  <br>
                       <?php echo $maclar["takimbdefans1"]?><img style="width:30%" src="<?= $oyuncupuan8["url"] ?>">  <br>
                       <?php echo $maclar["takimbdefans2"]?><img style="width:30%" src="<?= $oyuncupuan9["url"] ?>"> <br>
                       <?php echo $maclar["takimbdefans3"]?><img style="width:30%" src="<?= $oyuncupuan10["url"] ?>">  <br>
                       <?php echo $maclar["takimbortasaha1"]?><img style="width:30%" src="<?= $oyuncupuan11["url"] ?>">  <br>
                       <?php echo $maclar["takimbortasaha2"]?><img style="width:30%" src="<?= $oyuncupuan12["url"] ?>">  <br>
                       <?php echo $maclar["takimbforvet"]?><img style="width:30%" src="<?= $oyuncupuan13["url"] ?>"> 
                       </p>
</ul>
</div>

</div>
<div style="padding-left:100px;padding-top:40px" class="row">
<div class="col">
  <div class="skorboard">
  <div style="text-align:center;width:340px;padding-left:60px;padding-top:40px" class="row">
  <div style="padding-left:18px" class="col"><p class="skor"><?php echo $maclar["takimaskor"]?></p></div>
  <div style="padding-top:2px;padding-left:20px" class="col"><p class="time">60:00</p></div>
  <div class="col"><p class="skor"><?php echo $maclar["takimbskor"]?></p></div>
  </div>
  <div style="text-align:center;" class="row">
  <div style="padding-left:30px" class="col"> <p class="team">TAKIM A</p> </div>
  <div style="padding-right:30px" class="col"> <p class="team">TAKIM B</p> </div>
</div>
</div>
</div>
</div>

</div>
</div>


                    
                </div>
            </div>
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