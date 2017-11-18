<?php
include 'model_koneksi.php';
$query = "SELECT * FROM penyedia";
$hasil = mysqli_query($link, $query);
$penyedia_banyakData = 0;
$penyedia_id_penyedia = array();
$penyedia_nama_instansi = array();
$penyedia_alamat = array();
$penyedia_bank = array();
$penyedia_no_rekening = array();
$penyedia_npwp = array();
$penyedia_penanggung_jawab = array();
$penyedia_jabatan_pj = array();

if (mysqli_num_rows($hasil) > 0) {

  $penyedia_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($penyedia_id_penyedia, $data['id_penyedia']);
    array_push($penyedia_nama_instansi, $data['nama_instansi']);
    array_push($penyedia_alamat, $data['alamat']);
    array_push($penyedia_bank, $data['bank']);
    array_push($penyedia_no_rekening, $data['no_rekening']);
    array_push($penyedia_npwp, $data['npwp']);
    array_push($penyedia_penanggung_jawab, $data['penanggung_jawab']);
    array_push($penyedia_jabatan_pj, $data['jabatan_pj']);
  }
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
