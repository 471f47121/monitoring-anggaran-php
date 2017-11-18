<?php

// select all
include_once 'model_penyedia_select_all.php';

if (isset($_POST['insert_penyedia'])) {
  include_once 'controller_penyedia_insert.php';
}
if (isset($_POST['update_penyedia'])) {
  include_once 'controller_penyedia_update.php';
}
 ?>
