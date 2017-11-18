<?php
include 'model_koneksi.php';
$query = "SELECT * FROM penyedia WHERE id_penyedia='".$_GET['penyedia_id_penyedia']."'";
$hasil = mysqli_query($link, $query);
$penyedia_banyakData = 0;
$penyedia_id_penyedia = "";
$penyedia_nama_instansi = "";
$penyedia_alamat = "";
$penyedia_bank = "";
$penyedia_no_rekening = "";
$penyedia_npwp = "";
$penyedia_penanggung_jawab = "";
$penyedia_jabatan_pj = "";

if (mysqli_num_rows($hasil) > 0) {

  $penyedia_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  $data = mysqli_fetch_assoc($hasil);
  $penyedia_id_penyedia = $data['id_penyedia'];
  $penyedia_nama_instansi = $data['nama_instansi'];
  $penyedia_alamat = $data['alamat'];
  $penyedia_bank = $data['bank'];
  $penyedia_no_rekening = $data['no_rekening'];
  $penyedia_npwp = $data['npwp'];
  $penyedia_penanggung_jawab = $data['penanggung_jawab'];
  $penyedia_jabatan_pj = $data['jabatan_pj'];
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
