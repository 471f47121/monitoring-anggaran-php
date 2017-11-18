<?php
include_once 'model_koneksi.php';

$pagu_id_pagu = "";

$pagu_id_pagu = $_GET['pagu_id_pagu'];
include_once "model_pagu_select_by_id_pagu.php";
$_GET['id_permohonan']=$pagu_id_permohonan;
// include_once 'model_permohonan_select_by_id_permohonan.php';
// $_GET['id_sipu']=$permohonan_id_sipu;
// $_GET['id_spk']=$permohonan_id_spk;

// query input data
$query= "DELETE FROM pagu WHERE id_pagu='$pagu_id_pagu';";

// $_GET['id_permohonan'] = $pagu_id_permohonan;
// die("id_pagu=$pagu_id_pagu<br>id_permohonan=$pagu_id_permohonan<br>id_sipu=$permohonan_id_sipu<br>id_spk=$permohonan_id_spk");
// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil

  include_once 'controller_permohonan_delete.php';

  // include_once 'controller_sipu_delete.php';
  // include_once 'controller_spk_delete.php';

}else {
  // jika gagal
  echo "$query";
}

?>
