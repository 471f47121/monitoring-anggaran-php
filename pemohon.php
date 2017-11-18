<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Monitoring Anggaran PTRR BATAN</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/sweetalert.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <!-- Ajax Edit -->
    <script src="js/ajax_edit.js"></script>
    <!-- Ajax Delete -->
    <script src="js/ajax_delete.js"></script>
  </head>
  <body>

    <?php
    // session_start();
    include_once 'backend/controller_autentifikasi.php';
    include 'backend/controller_pemohon.php';
    $foto = "";
    if (file_exists("images/profile/".$_SESSION['nip'].".jpg")) {
      $foto = "images/profile/".$_SESSION['nip'].".jpg";
    } else {
      $foto = "images/profile/default.jpg";
    }
    ?>

    <div class="head head-diagonal">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="images/logoBATAN.png" alt="" />
            <h1>SISTEM INFORMASI MONITORING ANGGARAN <br><small>PTRR BADAN TENAGA NUKLIR NASIONAL</small></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-sm-8 col-md-6 kartu melayang">
          <div class="row">
            <div class="col-xs-2">
              <img src="<?php echo $foto ?>" alt="" class="img img-responsive img-circle" style="width:100%"/>
            </div>
            <div class="col-xs-10">
              <div class="row">
                <div class="col-xs-12">
                  <b style="font-size:x-large;"><?php echo $_SESSION['nama_lengkap'] ?></b>
                  <br>
                  NIP. <?php echo $_SESSION['nip'] ?>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <a href="?halaman=daftar_permohonan" class="btn btn-default btn-sm"> <i class="fa fa-list-ul"></i> Daftar Permohonan</a>
                  <a href="?halaman=tambah_permohonan" class="btn btn-success btn-sm"> <i class="fa fa-plus-circle"></i> Tambah Permohonan</a>
                  <a href="logout" class="btn btn-danger btn-sm"> <i class="fa fa-sign-out"></i> Log Out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php //include_once 'view/pemohon/daftar_sipu.php'; ?>
      <?php if (isset($_GET['halaman'])): ?>
        <?php if (file_exists('view/pemohon/'.$_GET['halaman'].'.php')): ?>
          <?php include_once 'view/pemohon/'.$_GET['halaman'].'.php'; ?>
        <?php else: ?>
          <div class="row">
            <div class="col-md-10 col-md-push-1 text-center">
              <h1><i class="fa fa-warning fa-lg text-danger"></i></h1>
              <h2>Mohon Ma'af, Telah Terjadi Kesalahan (ERROR 404)<br><small>Halaman <b style="text-transform:uppercase"><?php echo $_GET['halaman']; ?></b> yang anda minta tidak ditemukan</small></h2>
              <p>
                <a href="pemohon">kembali ke daftar SIPU</a>
              </p>
            </div>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <?php include_once 'view/pemohon/daftar_permohonan.php'; ?>
      <?php endif; ?>

    </div>
    <!-- /.container -->
  </body>
</html>
