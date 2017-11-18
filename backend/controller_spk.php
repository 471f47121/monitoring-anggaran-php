<?php

// select all
include_once 'model_spk_select_all.php';
if (isset($_GET['spk_id_spk'])) {
  include_once 'model_spk_select_by_id_spk.php';
}
if (isset($_POST['insert_spk'])) {
  # code...
  include_once 'controller_spk_insert.php';
}
if (isset($_POST['update_spk'])) {
  # code...
  include_once 'controller_spk_update.php';
}
 ?>
