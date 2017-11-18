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
  </head>
  <body>
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
        <div class="col-md-12">
        </div>
      </div>

      <div class="row" action="" method="post">
        <div class="col-md-8 col-md-push-2 kartu melayang">
          <div class="page-header">
            <h1>Daftar Akun Baru</h1>
          </div>
          <br>
          <?php if (isset($_GET['halaman'])): ?>
            <?php if (file_exists('view/daftar/'.$_GET['halaman'].'.php')): ?>
              <?php include_once 'view/daftar/'.$_GET['halaman'].'.php'; ?>
            <?php else: ?>
              <div class="text-center">
                <h1><i class="fa fa-warning fa-lg text-danger"></i></h1>
                <h2>Mohon Ma'af, Telah Terjadi Kesalahan (ERROR 404)<br><small>Halaman Daftar <b style="text-transform:uppercase"><?php echo $_GET['halaman']; ?></b> yang anda minta tidak ditemukan</small></h2>
                <p>
                  <a href="./">kembali ke beranda</a>
                </p>
              </div>
            <?php endif; ?>
          <?php else: ?>
            <?php include_once 'view/daftar/akun.php'; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <?php //include_once 'backend/controller_login.php'; ?>
    <?php include_once 'backend/controller_akun.php'; ?>
  </body>
</html>
