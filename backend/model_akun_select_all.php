<?php
include 'model_koneksi.php';
$query = "SELECT * FROM akun";
$hasil = mysqli_query($link, $query);
$user_banyakData = 0;
$user_id_user = array();
$user_nip = array();
$user_nama_lengkap = array();
$user_username = array();
$user_password = array();
$user_hak_akes = array();

if (mysqli_num_rows($hasil) > 0) {

  $user_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($user_id_user, $data['id_akun']);
    array_push($user_nip, $data['nip']);
    array_push($user_nama_lengkap, $data['nama_lengkap']);
    array_push($user_username, $data['username']);
    array_push($user_password, $data['password']);
    array_push($user_hak_akes, $data['hak_akses']);
  }
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
