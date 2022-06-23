<?php

include "../../DB.php";
$db=new DB();
if(isset($_POST["submit"])){
  $upl='../../../matchmaker/uploads/';
    $upload = $upl . basename($_FILES['resim']['name']);
    if (move_uploaded_file($_FILES['resim']['tmp_name'], $upload)) {
    
      $params=array($_POST ['tesisadi'],$_POST ['adres'],$_POST ['sahatipi'],$_POST ['telefon'],$upload,$_POST ['sahasayisi'],$_POST ['konum']);
  if($db->insert('tesisler', 'tesisadi,adres,sahatipi,telefon,resim,sahasayisi,konum', $params, 7))
  {
    ?><div class="alert alert-success">İşleminiz Başarı İle Kaydedildi.</div>
    <?php ?> 
    <meta http-equiv="refresh" content="2;url=tesisler-liste.php">
<?php
  }
  else{
    ?>
    <div class="alert alert-danger">İşleminiz Kaydedilirken Sorun Oluştu.</div>
    <?php
  }
  

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
            <h1>Tesisler</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Tesis Ekle</li>
            </ol>
          </div>
        </div>
        <div class="row">
              <div class="col-md-12">
              <a href="tesisler-liste.php" class="btn btn-info" style="float:right;margin-bottom:10px;margin-left:10px"><i class="fa fa-bars"></i>LİSTE</a>
      
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
                <h3 class="card-title">Tesis Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">

          
            <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>Tesis Adı</label>
                <input type="text" class="form-control" placeholder="Tesis Adı..." name="tesisadi">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Adres</label>
                <input type="text" class="form-control" placeholder="Adres..." name="adres">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Saha Tipi</label>
                <select class="form-control" name="sahatipi"> 
                    <option></option>
                    <option>Açık</option>
                    <option>Kapalı</option>
                </select>
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Telefon Numarası</label>
                <input type="text" class="form-control" placeholder="Telefon Numarası..." name="telefon">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Resim</label>
                <input type="file" class="form-control" placeholder="Resim Ekleyiniz..." name="resim">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Saha Sayısı</label>
                <select class="form-control" name="sahasayisi"> 
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                </select>
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Konum</label>
                <input type="text" class="form-control" placeholder="Konum..." name="konum"> 
                    
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
