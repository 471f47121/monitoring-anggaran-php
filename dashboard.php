<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Monitoring Anggaran PTRR BATAN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="css/skins/skin-blue.min.css">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="css/sweetalert.css" media="screen" title="no title">

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.2.3 -->
  <script src="js/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/app.min.js"></script>
  <!-- Sweet Alert -->
  <script src="js/sweetalert.min.js"></script>
  <!-- Ajax Edit -->
  <script src="js/ajax_edit.js"></script>
  <!-- Ajax Delete -->
  <script src="js/ajax_delete.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php
include_once 'backend/controller_autentifikasi.php';
// include_once 'backend/controller_akun';
?>

<?php
include 'backend/controller.php';
?>

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="images/logoBATAN.png" alt="" width="50px" />
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="images/logoBATAN.png" alt="" width="50px" />
        Dashboard
      </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->

          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="images/boxed-bg.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="images/boxed-bg.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama_lengkap'] ?> - <?php echo $_SESSION['hak_akses'] ?>
                  <small>NIP <?php echo $_SESSION['nip'] ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat" onclick="cekLogout()">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php include_once 'view/dashboard/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Sistem Monitoring Anggaran <br>
        <small>PTRR batan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        <?php if (isset($_GET['halaman'])): ?>
          <li class="active" style="text-transform:uppercase"><?php echo $_GET['halaman']; ?></li>
        <?php else: ?>
          <li class="active">Beranda</li>
        <?php endif; ?>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php if (isset($_GET['halaman'])): ?>
        <?php if (file_exists('view/dashboard/konten/'.$_GET['halaman'].'.php')): ?>
          <?php include_once 'view/dashboard/konten/'.$_GET['halaman'].'.php'; ?>
        <?php else: ?>
          <div class="row">
            <div class="col-md-10 col-md-push-1 text-center">
              <h1><i class="fa fa-warning fa-lg text-danger"></i></h1>
              <h2>Mohon Maaf, Telah Terjadi Kesalahan (ERROR 404)<br><small>Halaman <b style="text-transform:uppercase"><?php echo $_GET['halaman']; ?></b> yang anda minta tidak ditemukan</small></h2>
              <p>
                <a href="dashboard">kembali ke beranda</a>
              </p>
            </div>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <?php include_once 'view/dashboard/beranda.php'; ?>
      <?php endif; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017</strong> Sistem Monitoring Anggaran <strong>PTRR batan</strong>.
  </footer>

</div>
<!-- ./wrapper -->


<script type="text/javascript">
  function cekLogout() {
    // var yakin = false;
    swal({
      title: "Sign Out",
      text: "Anda yakin untuk keluar?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak, kembali ke dashboard",
      closeOnConfirm: false
      // closeOnCancel: false
    },
    function(){
      window.location = "logout.php";
    });
    // return yakin;
  }
</script>
<script type="text/javascript">
function setActive(id) {
  $('.sidebar-menu li').removeClass('active');
  $('#'+id).addClass('active');
}
</script>
<?php if (isset($_GET['halaman'])): ?>
  <?php if (file_exists('view/dashboard/konten/'.$_GET['halaman'].'.php')): ?>
    <script type="text/javascript">
    setActive('<?php echo $_GET["halaman"]; ?>');
    </script>
  <?php else: ?>
    <script type="text/javascript">
    setActive('dashboard');
    </script>
  <?php endif; ?>
<?php else: ?>
  <?php include_once 'view/dashboard/beranda.php'; ?>
  <script type="text/javascript">
  setActive('dashboard');
  </script>
<?php endif; ?>
</body>
</html>
