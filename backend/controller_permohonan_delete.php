<?php
include_once 'model_koneksi.php';

$permohonan_id_permohonan = "";

$permohonan_id_permohonan = $_GET['id_permohonan'];

include_once 'model_permohonan_select_by_id_permohonan.php';
$_GET['id_sipu']=$permohonan_id_sipu;
$_GET['id_spk']=$permohonan_id_spk;

// query input data
$query= "DELETE FROM permohonan WHERE id_permohonan='$permohonan_id_permohonan';";
var_dump($query);
// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  include_once 'controller_sipu_delete.php';
  include_once 'controller_spk_delete.php';
}else {
  // jika gagal
}

?>
