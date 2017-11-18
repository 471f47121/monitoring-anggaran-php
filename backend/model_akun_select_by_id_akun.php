<?php

include 'model_koneksi.php';
$query = "SELECT * FROM akun WHERE id_akun='".$_GET['user_id_user']."'";
$hasil = mysqli_query($link, $query);
$user_banyakData = 0;
$user_id_user = "";
$user_nip = "";
$user_nama_lengkap = "";
$user_username = "";
$user_password = "";
$user_hak_akes = "";

if (mysqli_num_rows($hasil) > 0) {

  $user_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  $data = mysqli_fetch_assoc($hasil);
  $user_id_user = $data['id_akun'];
  $user_nip = $data['nip'];
  $user_nama_lengkap = $data['nama_lengkap'];
  $user_username = $data['username'];
  $user_password = $data['password'];
  $user_hak_akes = $data['hak_akses'];
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
