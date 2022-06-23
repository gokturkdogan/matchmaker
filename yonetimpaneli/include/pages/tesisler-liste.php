<?php
include("../../getdata.php");
 
$sorgu=$vt->prepare('SELECT *FROM tesisler');
$sorgu->execute();
$tesisler=$sorgu-> fetchAll(PDO::FETCH_OBJ);
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
              <li class="breadcrumb-item active">Tesisler</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
              <div class="col-md-12">
              
      <a href="tesisler-ekle.php" class="btn btn-success" style="float:right;margin-bottom:10px"><i class="fa fa-plus"></i>YENİ EKLE</a>
      
    </div>
    </div>
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tesisler Listesi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                    <th>Tesis Adı</th>
                    <th>Saha Sayısı</th>
                    <th>Telefon</th>
                    <th>Saha Tipi</th>
                    <th>Adres</th>
                    <th>İşlem</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i=1;
       foreach($tesisler as $tesis){?>
       
       <tr>
            <td class="arrengment" >
            <?= $i ?>

            </td>
            <td>
            <?= $tesis->tesisadi?>
            </td>
            <td>
              <?= $tesis->sahasayisi?>
            </td>
           <td>
            <?= $tesis->telefon?></a>
          </td>
            <td>
            <?= $tesis->sahatipi ?>

            </td>
            <td>
             <?=$tesis->adres ?>

            </td>
            <td><a href="tesisler-duzenle.php?id=<?=$tesis->ID?>" class="btn btn-warning btn-sm">Düzenle</a>
                <a href="tesisler-sil.php?pid=<?=$tesis->ID?>" class="btn btn-danger btn-sm">Kaldır</a></td>


          </tr>
          <?php $i=$i+1; } ?>
         
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                  <th>Adı</th>
                    <th>Soyadı</th>
                    <th>Mevkisi</th>
                    <th>Kullandığı Ayak</th>
                    <th>Doğum Tarihi</th>
                    <th>İşlem</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
