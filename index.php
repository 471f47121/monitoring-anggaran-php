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
        <div class="col-md-4 col-md-push-4">
          <div class="panel panel-default melayang">
            <div class="panel-heading">
              <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              <form class="" action="" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="username..." name="username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password..." name="password">
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit" name="login">Login</button>
                </div>
              </form>
            </div>
            <div class="panel-footer text-right">
              <a href="daftar">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <?php include_once 'backend/controller_login.php'; ?>
  </body>
</html>
