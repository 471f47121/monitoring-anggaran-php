<?php
include_once 'model_koneksi.php';

$user_id_user = "";

$user_id_user = $_GET['id_akun'];

// query input data
$query= "DELETE FROM akun WHERE id_akun='$user_id_user';";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
}else {
  // jika gagal
}

?>
