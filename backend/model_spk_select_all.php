<?php
include 'model_koneksi.php';
$query = "SELECT spk.*, akun.nama_lengkap, penyedia.nama_instansi FROM spk INNER JOIN akun ON spk.id_akun_ppk=akun.id_akun INNER JOIN penyedia ON spk.id_penyedia=penyedia.id_penyedia";
$hasil = mysqli_query($link, $query);
$spk_banyakData = 0;
$spk_id_spk = array();
$spk_file = array();
$spk_id_akun_ppk = array();
$spk_id_penyedia = array();
$spk_harga = array();
$spk_waktu = array();
$spk_tgl_spk = array();
$spk_akun_nama_lengkap = array();
$spk_penyedia_nama_instansi = array();

if (mysqli_num_rows($hasil) > 0) {

  $spk_banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($spk_id_spk, $data['id_spk']);
    array_push($spk_file, $data['file']);
    array_push($spk_id_akun_ppk, $data['id_akun_ppk']);
    array_push($spk_id_penyedia, $data['id_penyedia']);
    array_push($spk_harga, $data['harga']);
    array_push($spk_waktu, $data['waktu']);
    array_push($spk_tgl_spk, $data['tgl_spk']);
    array_push($spk_akun_nama_lengkap, $data['nama_lengkap']);
    array_push($spk_penyedia_nama_instansi, $data['nama_instansi']);
  }
}
 ?>
