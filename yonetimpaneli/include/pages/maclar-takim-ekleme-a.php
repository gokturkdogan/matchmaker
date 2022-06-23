<?php
include "../../getdata.php";
include "../../DB.php";
include "../../class/vt.php";

$sorgu1=$vt->prepare('SELECT *FROM oyuncular WHERE mevkiid=4');
$sorgu1->execute();
$forvetler=$sorgu1-> fetchAll(PDO::FETCH_OBJ);

$sorgu2=$vt->prepare('SELECT *FROM oyuncular WHERE mevkiid=3');
$sorgu2->execute();
$ortasahalar=$sorgu2-> fetchAll(PDO::FETCH_OBJ);

$sorgu3=$vt->prepare('SELECT *FROM oyuncular WHERE mevkiid=2');
$sorgu3->execute();
$defanslar=$sorgu3-> fetchAll(PDO::FETCH_OBJ);

$sorgu4=$vt->prepare('SELECT *FROM oyuncular WHERE mevkiid=1');
$sorgu4->execute();
$kaleciler=$sorgu4-> fetchAll(PDO::FETCH_OBJ);

if(isset($_POST["guncelle"])) {
  $id= $_POST["id"];
  $update=$vt-> prepare("UPDATE maclar set takimakaleci = :takimakaleci, takimadefans1 = :takimadefans1,
  takimadefans2 = :takimadefans2, takimadefans3 = :takimadefans3, takimaortasaha1 = :takimaortasaha1, takimaortasaha2 = :takimaortasaha2, takimaforvet = :takimaforvet where id = :id");
  $maclar = $update -> execute(array(
'takimakaleci' => $_POST["takimakaleci"],
'takimadefans1' => $_POST["takimadefans1"],
'takimadefans2' => $_POST["takimadefans2"],
'takimadefans3' => $_POST["takimadefans3"],
'takimaortasaha1' => $_POST["takimaortasaha1"],
'takimaortasaha2' => $_POST["takimaortasaha2"],
'takimaforvet' => $_POST["takimaforvet"],
'id' =>$_GET["id"]

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
  .takimekle{
    background-image: url("../../../matchmaker/assest/images/halisahakroki.jpg");
    background-size: 100%;
    width: 30%;
    height: 600px;
    border-style: solid;
    border-radius: 15px;
    border-width: 10px;
    margin-left:40px
  }

  select{
    border-radius: 10px;
    margin-top:0px;
  }

  label{
    margin-bottom:0px;
  }

  input{
    background-color: #007BFF;
    border-style: none;
    border-radius: 10px;
    color:#FFF;
    transition: 0.2s;
  }

  input:hover{
    background-color: #125aa8;
  }

  footer{
    margin-top:40px;
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
            <h1>Takım Ekle</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Takım Ekle</li>
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Takım A</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
    
            <!-- /.card -->

            <!-- /.card -->



            <!-- /.card -->

          

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



               <form  action="#" method="post" enctype="multipart/form-data" class="takimekle">
               <input type="hidden" name="id" value="<?php echo $maclar["id"] ?>">
                 <div style="text-align:center" class="row">
                   <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimakaleciicon.png"></label> <br>
                <select style="width:50px" name="takimakaleci">
                <option></option>
                <?php foreach($kaleciler as $kaleci){?>
                <option><?= $kaleci->isim ?></option>
                <?php } ?>
                </select>
                </div>
                </div>

                <div style="text-align:center;padding-top:30px" class="row">
                   <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimadefans1">
                <option></option>
                <?php foreach($defanslar as $defans){?>
                <option><?= $defans->isim ?></option>
                <?php } ?>
                </select>
                </div>
                <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimadefans2">
                <option></option>
                <?php foreach($defanslar as $defans){?>
                <option><?= $defans->isim ?></option>
                <?php } ?>
                </select>
                </div>
                <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimadefans3">
                <option></option>
                <?php foreach($defanslar as $defans){?>
                <option><?= $defans->isim ?></option>
                <?php } ?>
                </select>
                </div>
                </div>

                <div style="text-align:center;padding-top:30px" class="row">
                   <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimaortasaha1">
                <option></option>
                <?php foreach($ortasahalar as $ortasaha){?>
                <option><?= $ortasaha->isim ?></option>
                <?php } ?>
                </select>
                </div>
                <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimaortasaha2">
                <option></option>
                <?php foreach($ortasahalar as $ortasaha){?>
                <option><?= $ortasaha->isim ?></option>
                <?php } ?>
                </select>
                </div>
                </div>

                <div style="text-align:center" class="row">
                <div class="col">
               <label><img src="../../../matchmaker/assest/images/takimaicon.png"></label> <br>
                <select style="width:50px" name="takimaforvet">
                <option></option>
                <?php foreach($forvetler as $forvet){?>
                <option><?= $forvet->isim ?></option>
                <?php } ?>
                </select>
                </div>
                </div>

                <div style="text-align:center;padding-top:25px" class="row">
                <div class="col">
               <input type="submit" name="guncelle" value="Gönder">
                
                </div>
                </div>
              </form> 
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
