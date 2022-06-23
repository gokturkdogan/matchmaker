<?php
include "../../getdata.php";
include "../../DB.php";
include "../../class/vt.php";

$id = $_GET["id"];

$sorgu=$vt->prepare('SELECT *FROM maclar WHERE id=?');
$sorgu->execute(array($id));
$maclar=$sorgu-> fetch(PDO::FETCH_ASSOC); 

if(isset($_POST["guncelle"])) {
  $id= $_POST["id"];
  $update=$vt-> prepare("UPDATE maclar set takimakalecipuan = :takimakalecipuan, takimadefans1puan = :takimadefans1puan,
  takimadefans2puan = :takimadefans2puan, takimadefans3puan = :takimadefans3puan, takimaortasaha1puan = :takimaortasaha1puan, 
  takimaortasaha2puan = :takimaortasaha2puan, takimaforvetpuan = :takimaforvetpuan, takimbkalecipuan = :takimbkalecipuan, 
  takimbdefans1puan = :takimbdefans1puan, takimbdefans2puan = :takimbdefans2puan, takimbdefans3puan = :takimbdefans3puan,
  takimbortasaha1puan = :takimbortasaha1puan, takimbortasaha2puan = :takimbortasaha2puan, takimbforvetpuan = :takimbforvetpuan, 
  takimaskor = :takimaskor, takimbskor = :takimbskor 
  where id = :id");
  $maclar = $update -> execute(array(
'takimakalecipuan' => $_POST["takimakalecipuan"],
'takimadefans1puan' => $_POST["takimadefans1puan"],
'takimadefans2puan' => $_POST["takimadefans2puan"],
'takimadefans3puan' => $_POST["takimadefans3puan"],
'takimaortasaha1puan' => $_POST["takimaortasaha1puan"],
'takimaortasaha2puan' => $_POST["takimaortasaha2puan"],
'takimaforvetpuan' => $_POST["takimaforvetpuan"],
'takimbkalecipuan' => $_POST["takimbkalecipuan"],
'takimbdefans1puan' => $_POST["takimbdefans1puan"],
'takimbdefans2puan' => $_POST["takimbdefans2puan"],
'takimbdefans3puan' => $_POST["takimbdefans3puan"],
'takimbortasaha1puan' => $_POST["takimbortasaha1puan"],
'takimbortasaha2puan' => $_POST["takimbortasaha2puan"],
'takimbforvetpuan' => $_POST["takimbforvetpuan"],
'takimaskor' => $_POST["takimaskor"],
'takimbskor' => $_POST["takimbskor"],
'id' =>$_GET["id"],
));
  ?><div class="alert alert-success">İşleminiz Başarı İle Kaydedildi.</div><?php
  ?> 
  <meta http-equiv="refresh" content="2;url=maclar-liste.php">
    
<?php  
}


$sorgu = $vt->prepare("SELECT *FROM maclar WHERE id=:id");
$sorgu -> execute (array(
  'id'=> $_GET["id"]
));
$maclar=$sorgu-> fetch(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MatchMaker | Yönetim Paneli</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <style>
        

.oyuncupuanla{
    background-image: url("../../dist/img/halisahakroki.jpeg") ;
    background-size: 100%;
    width:70%;
    height: 985px;
    border-style: solid;
    border-width: 10px;
    border-radius: 25px;

}    


.oyuncupuanla select{
    background-color: #AAADB2;
    border-radius: 10px;
}

input{
  width: 100px;
  background-color: #AAADB2;
    border-radius: 10px;
}
   

body{
        background-color: #F4F6F9;
    }
    
    
    
    </style>





</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
include_once("../../data/nav-icsayfa.php");
include_once("../../data/menu-icsayfa.php");
?>
     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $maclar["tesis"] ?>    <?php echo $maclar["tarih"] ?>    <?php echo $maclar["saat"] ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Oyuncuları Puanla</li>
            </ol>
          </div>
        </div>
        <div class="row">
              <div class="col-md-12">
              <a href="maclar-liste.php" class="btn btn-info" style="float:right;margin-bottom:10px;margin-left:10px"><i class="fa fa-bars"></i>LİSTE</a>
      
    </div>
    </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->



    <div style="margin-bottom:50px" class="container">
        <div class="row">
        <div class="col">
    <form class="oyuncupuanla"  action="#" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $maclar["id"] ?>">
    <div style="padding-left:250px" class="row">
    <div style="text-align:center" class="col">
        <h1 style="color:#FFF">TAKIM A</h1> 
    </div>
    <div style="padding-top:10px" class="col">
        <input type="text" name="takimaskor" placeholder="Skoru Giriniz"> 
    </div>
    </div>
    <div class="row">
    <div style="text-align:center;margin-top:45px" class="col">
        
        <label style="color:#FFF"><?php echo $maclar["takimakaleci"] ?></label> <br>
        <select name="takimakalecipuan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
    </div>
    </div>

    <div style="padding-top:35px" class="row">
    <div style="text-align:center" class="col">
        <div style="float:left;margin-left:250px">
    <label style="color:#FFF"><?php echo $maclar["takimadefans1"] ?></label> <br>
        <select name="takimadefans1puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
</div>
<div style="float:left;margin-left:65px">
    <label style="color:#FFF"><?php echo $maclar["takimadefans2"] ?></label> <br>
        <select name="takimadefans2puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>
         <div style="float:left;margin-left:70px">
    <label style="color:#FFF"><?php echo $maclar["takimadefans3"] ?></label> <br>
        <select name="takimadefans3puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>
    </div>
    </div>

    <div style="padding-top:30px" class="row">
    <div style="text-align:center" class="col">
        <div style="float:left;margin-left:320px">
    <label style="color:#FFF"><?php echo $maclar["takimaortasaha1"] ?></label> <br>
        <select name="takimaortasaha1puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
</div>
<div style="float:left;margin-left:65px">
    <label style="color:#FFF"><?php echo $maclar["takimaortasaha2"] ?></label> <br>
        <select name="takimaortasaha2puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>  
    </div>
    </div>
    <div style="padding-top:35px" class="row">
    <div style="text-align:center" class="col">
    <div style="float:left;margin-left:355px">
    <label style="color:#FFF"><?php echo $maclar["takimaforvet"] ?></label> <br>
        <select name="takimaforvetpuan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>  
    </div>
    </div>

    <div style="padding-top:30px" class="row">
    <div style="text-align:center" class="col">
    <div style="float:left;margin-left:368px">
    <label style="color:#FFF"><?php echo $maclar["takimbforvet"] ?></label> <br>
        <select name="takimbforvetpuan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>  
    </div>
    </div>
    <div style="padding-top:30px" class="row">
    <div style="text-align:center" class="col">
        <div style="float:left;margin-left:275px">
    <label style="color:#FFF"><?php echo $maclar["takimbortasaha1"] ?></label> <br>
        <select name="takimbortasaha1puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
</div>
<div style="float:left;margin-left:65px">
    <label style="color:#FFF"><?php echo $maclar["takimbortasaha2"] ?></label> <br>
        <select name="takimbortasaha2puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>  
    </div>
    </div>
    <div style="padding-top:25px;margin-top:4px" class="row">
    <div style="text-align:center" class="col">
        <div style="float:left;margin-left:252px">
    <label style="color:#FFF"><?php echo $maclar["takimbdefans1"] ?></label> <br>
        <select name="takimbdefans1puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
</div>
<div style="float:left;margin-left:65px">
    <label style="color:#FFF"><?php echo $maclar["takimbdefans2"] ?></label> <br>
        <select name="takimbdefans2puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>
         <div style="float:left;margin-left:70px">
    <label style="color:#FFF"><?php echo $maclar["takimbdefans3"] ?></label> <br>
        <select name="takimbdefans3puan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
         </div>
    </div>
    </div>
    <div class="row">
    <div style="text-align:center;margin-top:25px" class="col">
        
        <label style="color:#FFF"><?php echo $maclar["takimbkaleci"] ?></label> <br>
        <select name="takimbkalecipuan"> 
        <option></option> 
        <option>1</option> 
        <option>2</option> 
        <option>3</option> 
        <option>4</option> 
        <option>5</option> 
         </select>
    </div>
    </div>
    <div style="padding-left:250px;padding-top:10px" class="row">
    <div style="text-align:center;margin-top:45px" class="col">
        <h1 style="color:#FFF">TAKIM B</h1>
    </div>
    <div style="padding-top:60px" class="col">
        <input type="text" name="takimbskor" placeholder="Skoru Giriniz"> 
    </div>
    </div>
    <div class="row">
    <div style="text-align:center;margin-top:20px" class="col">
    <input type="submit" name="guncelle" class="btn  btn-primary" value="Gönder">
    </div>
    </div>
    
     </form>
     </div>
     </div>
     </div>
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <?php
include_once("../../data/footer.php");
?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
