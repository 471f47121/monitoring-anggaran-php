<?php
include_once 'model_koneksi.php';

$penyedia_id_penyedia = "";

$penyedia_id_penyedia = $_GET['id_penyedia'];

// query input data
$query= "DELETE FROM penyedia WHERE id_penyedia='$penyedia_id_penyedia';";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
}else {
  // jika gagal
}

?>
