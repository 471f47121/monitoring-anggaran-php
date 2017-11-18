<?php

// select all
include_once 'model_detail_sipu_select_by_id_sipu.php';

// select by id_permohonan
if (isset($_GET['id_detail_sipu'])) {
  include_once 'model_detail_sipu_select_by_id_detail_sipu.php';
}
if (isset($_POST['insert_detail_sipu'])) {
  # code...
  include_once 'controller_detail_sipu_insert.php';
}
if (isset($_POST['update_detail_sipu'])) {
  # code...
  include_once 'controller_detail_sipu_update.php';
}
 ?>
