<?php
include_once 'model_koneksi.php';

$spk_id_spk = "";

$spk_id_spk = $_GET['id_spk'];

// query input data
$query= "DELETE FROM spk WHERE id_spk='$spk_id_spk';";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
}else {
  // jika gagal
}

?>
