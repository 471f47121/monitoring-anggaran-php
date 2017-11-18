<?php
// session_start();
include_once 'model_koneksi.php';
if (isset($_SESSION['sudah_login']) && $_SESSION['sudah_login']) {
  // cek nip
  $query = "SELECT * FROM akun WHERE nip='".$_SESSION['nip']."'";
  $hasil = mysqli_query($link,$query);
  $cekNip = (mysqli_num_rows($hasil)>0);
  if (!$cekNip) {
    ?>
    <script type="text/javascript">
      window.location = "./";
      session_destroy();
    </script>
    <?php
  }
}else {
  ?>
  <script type="text/javascript">
    window.location = "./";
    session_destroy();
  </script>
  <?php
}
?>
