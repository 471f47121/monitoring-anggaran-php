<?php
include_once 'model_koneksi.php';
include 'model_permohonan_select_by_akun.php';
if (isset($_GET['id_permohonan'])) {
  include 'model_permohonan_select_by_akun_by_id_permohonan.php';
}
include_once 'controller_sipu.php';

if (isset($_POST['insert_permohonan_sipu'])) {
  # code...
  include_once 'controller_insert_permohonan_sipu.php';
}
if (isset($_POST['update_permohonan'])) {
  # code...
  include_once 'controller_permohonan_update.php';
}

 ?>
