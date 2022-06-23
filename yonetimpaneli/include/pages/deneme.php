<?php

include "../../DB.php";
$db=new DB();
if(isset($_POST["submit"])){
  $upl='../../../matchmaker/uploads/';
    $upload1 = $upl . basename($_FILES['resim1']['name']);
    (move_uploaded_file($_FILES['resim1']['tmp_name'], $upload1)) ;
    $upload2 = $upl . basename($_FILES['resim2']['name']);
    (move_uploaded_file($_FILES['resim2']['tmp_name'], $upload2)) ;
    $upload3 = $upl . basename($_FILES['resim3']['name']);
    (move_uploaded_file($_FILES['resim3']['tmp_name'], $upload3)) ;
    $upload4 = $upl . basename($_FILES['resim4']['name']);
    (move_uploaded_file($_FILES['resim4']['tmp_name'], $upload4)) ;
    $upload5 = $upl . basename($_FILES['resim5']['name']);
    (move_uploaded_file($_FILES['resim5']['tmp_name'], $upload5)) ;
    $upload6 = $upl . basename($_FILES['resim6']['name']);
    (move_uploaded_file($_FILES['resim6']['tmp_name'], $upload6)) ;
    $upload7 = $upl . basename($_FILES['resim7']['name']);
    (move_uploaded_file($_FILES['resim7']['tmp_name'], $upload7)) ;
    $upload8 = $upl . basename($_FILES['resim8']['name']);
    (move_uploaded_file($_FILES['resim8']['tmp_name'], $upload8)) ;
    $upload9 = $upl . basename($_FILES['resim9']['name']);
    (move_uploaded_file($_FILES['resim9']['tmp_name'], $upload9)) ;
    $upload10 = $upl . basename($_FILES['resim10']['name']);
    (move_uploaded_file($_FILES['resim10']['tmp_name'], $upload10)) ;
    
      $params=array($_POST ['baslik'],$_POST ['aciklama'],$_POST ['tarih'],$upload1,$upload2,$upload3,$upload4,$upload5,$upload6,$upload7,$upload8,$upload9,$upload10);
  if($db->insert('resimdeneme', 'baslik,aciklama,tarih,resim1,resim2,resim3,resim4,resim5,resim6,resim7,resim8,resim9,resim10', $params, 13))
  {
    ?><div class="alert alert-success">İşleminiz Başarı İle Kaydedildi.</div><?php ?> 
    
<?php  

  }
  else{
    ?>
    <div class="alert alert-danger">İşleminiz Kaydedilirken Sorun Oluştu.</div>
    <?php
  }
  



     
}

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
            <h1>Oyuncular</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Oyuncu Ekle</li>
            </ol>
          </div>
        </div>
        <div class="row">
              <div class="col-md-12">
              <a href="oyuncular-liste.php" class="btn btn-info" style="float:right;margin-bottom:10px;margin-left:10px"><i class="fa fa-bars"></i>LİSTE</a>
      
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
                <h3 class="card-title">Etkinlik Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">

          
            <div class="row">
            <div class="col-md-12">
          <div class="form-group">
                <label>Başlık</label>
                <input type="text" class="form-control" placeholder="Başlık Ekleyiniz..." name="aciklama">
          </div>
          </div>

          <div class="col-md-12">
          <div class="form-group">
                <label>Açıklama</label>
                <input type="text" class="form-control" placeholder="Açıklama Ekleyiniz..." name="baslik">
          </div>
          </div>

          <div class="col-md-12">
          <div class="form-group">
                <label>Tarih</label>
                <input type="date" class="form-control" placeholder="Açıklama Ekleyiniz..." name="tarih">
          </div>
          </div>

            <div class="col-md-12">
          <div class="form-group">
                <label>Resim 1</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim1">
          </div>
          </div>
          
          
          
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 2</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim2">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 3</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim3">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 4</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim4">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 5</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim5">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 6</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim6">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 7</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim7">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 8</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim8">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 9</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim9">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim 10</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim10">
          </div>
          </div>

        
          <div class="col-md-12">
          <div class="form-group">
          <input type="submit" name="submit" class="btn btn-block btn-primary" value="Gönder">
          </div>
          </div>
          
           </div>        
         
    </div>
    </form>
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
