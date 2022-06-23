<?php

include "../../DB.php";
$db=new DB();
if(isset($_POST["submit"])){
  $upl='../../../matchmaker/uploads/';
    $upload = $upl . basename($_FILES['resim']['name']);
    if (move_uploaded_file($_FILES['resim']['tmp_name'], $upload)) {
    
      $params=array($_POST ['isim'],$_POST ['soyisim'],$_POST ['mevki'],$_POST ['mevkiid'],$_POST ['telefonnumarasi'],$upload,$_POST ['dogumtarihi'],$_POST ['ayak']);
  if($db->insert('oyuncular', 'isim,soyisim,mevki,mevkiid,telefonnumarasi,resim,dogumtarihi,ayak', $params, 8))
  {
    ?><div class="alert alert-success">İşleminiz Başarı İle Kaydedildi.</div><?php ?> 
    <meta http-equiv="refresh" content="2;url=oyuncular-liste.php">
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
                <h3 class="card-title">Oyuncu Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="post" enctype="multipart/form-data">
      <div class="col-md-8">

          
            <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>İsim</label>
                <input type="text" class="form-control" placeholder="İsim..." name="isim">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Soyisim</label>
                <input type="text" class="form-control" placeholder="Soyisim..." name="soyisim">
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Mevki</label>
                <select class="form-control" name="mevki"> 
                    <option></option>
                    <option>Kaleci</option>
                    <option>Defans</option>
                    <option>Ortasaha</option>
                    <option>Forvet</option>
                </select>
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Mevki ID <p style="color:grey">(Kaleci=1, Defans=2, Ortasaha=3, Forvet=4)</p></label>
                <select class="form-control" name="mevkiid"> 
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Açıklama</label>
                <input type="text" class="form-control" placeholder="Telefon Numarası..." name="telefonnumarasi">
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
                <label>Doğum Yılı</label>
                <select class="form-control" name="dogumtarihi"> 
                <option>  </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                </select>
          </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
                <label>Kullandığı Ayak</label>
                <select class="form-control" name="ayak"> 
                    <option></option>
                    <option>Sağ</option>
                    <option>Sol</option>
                </select>
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
