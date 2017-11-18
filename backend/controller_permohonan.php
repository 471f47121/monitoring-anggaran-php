<?php

// select all
include_once 'model_permohonan_select_all.php';

// select by id_permohonan
if (isset($_GET['id_permohonan'])) {
  include_once 'model_permohonan_select_by_id_permohonan.php';
}
 ?>
