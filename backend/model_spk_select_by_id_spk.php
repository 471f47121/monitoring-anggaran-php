<?php
include 'model_koneksi.php';
$query = "SELECT spk.*, akun.nama_lengkap, penyedia.nama_instansi FROM spk INNER JOIN akun ON spk.id_akun_ppk=akun.id_akun INNER JOIN penyedia ON spk.id_penyedia=penyedia.id_penyedia WHERE id_spk='".$_GET['spk_id_spk']."'";
$hasil = mysqli_query($link, $query);
$spk_banyakData = 0;
$spk_id_spk = "";
$spk_file = "";
$spk_id_akun_ppk = "";
$spk_id_penyedia = "";
$spk_harga = "";
$spk_waktu = "";
$spk_tgl_spk = "";
$spk_akun_nama_lengkap = "";
$spk_penyedia_nama_instansi = "";

if (mysqli_num_rows($hasil) > 0) {

  $spk_banyakData = mysqli_num_rows($hasil);

  $data = mysqli_fetch_assoc($hasil);
  $spk_id_spk = $data['id_spk'];
  $spk_file = $data['file'];
  $spk_id_akun_ppk = $data['id_akun_ppk'];
  $spk_id_penyedia = $data['id_penyedia'];
  $spk_harga = $data['harga'];
  $spk_waktu = $data['waktu'];
  $spk_tgl_spk = $data['tgl_spk'];
  $spk_akun_nama_lengkap = $data['nama_lengkap'];
  $spk_penyedia_nama_instansi = $data['nama_instansi'];
}
 ?>
