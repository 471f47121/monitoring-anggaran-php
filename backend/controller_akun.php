<?php
include_once 'model_koneksi.php';

include_once 'model_akun_select_all.php';
if (isset($_GET['halaman'])) {
  if ($_GET['halaman']=="spk") {
    include_once 'model_akun_select_ppk.php';
  }
}
if (isset($_GET['user_id_user'])) {
  include_once 'model_akun_select_by_id_akun.php';
}
if (isset($_POST['insert_akun'])) {
  include_once 'model_akun_insert.php';
}
if (isset($_POST['upload_foto_akun'])) {
  include_once 'controller_akun_upload_foto.php';
}
if (isset($_POST['update_akun'])) {
  include_once 'controller_akun_update.php';
}
 ?>
