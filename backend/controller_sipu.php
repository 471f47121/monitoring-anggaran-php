<?php

// select all
include_once 'model_sipu_select_all.php';

// select by id_permohonan
if (isset($_GET['id_sipu'])) {
  include_once 'model_sipu_select_by_id_sipu.php';
  include_once 'controller_detail_sipu.php';
}

// update
// acc
if (isset($_POST['acc_keuangan'])) {
  include_once 'controller_sipu_update_acc_keuangan.php';
}
if (isset($_POST['acc_ppk'])) {
  include_once 'controller_sipu_update_acc_ppk.php';
}
if (isset($_POST['acc_kapus'])) {
  include_once 'controller_sipu_update_acc_kapus.php';
}
if (isset($_POST['acc_perkap'])) {
  include_once 'controller_sipu_update_acc_perkap.php';
}
if (isset($_POST['acc_tolak'])) {
  include_once 'controller_sipu_update_acc_tolak.php';
}

if (isset($_POST['update_sipu'])) {
  include_once 'controller_sipu_update.php';
}
 ?>
