<?php
include 'model_koneksi.php';
$query = "SELECT * FROM pagu INNER JOIN permohonan ON pagu.id_permohonan=permohonan.id_permohonan WHERE id_pagu='".$_GET['pagu_id_pagu']."'";
$hasil = mysqli_query($link, $query);
$pagu_banyakData = 0;
$pagu_id_pagu = "";
$pagu_id_permohonan = "";
$pagu_pagu = "";
$pagu_terikat = "";
$pagu_realisasi = "";
$pagu_sisa_pagu = "";
$pagu_permohonan_no_sub_output = "";
$pagu_permohonan_no_komponen = "";
$pagu_permohonan_akun_dana_dipa = "";
$pagu_permohonan_detail = "";
$pagu_permohonan_id_sipu = "";

if (mysqli_num_rows($hasil) > 0) {

  $pagu_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);
  $data = mysqli_fetch_assoc($hasil);
  $pagu_id_pagu = $data['id_pagu'];
  $pagu_id_permohonan = $data['id_permohonan'];
  $pagu_pagu = $data['pagu'];
  $pagu_terikat = $data['terikat'];
  $pagu_realisasi = $data['realisasi'];
  $pagu_sisa_pagu = $data['sisa_pagu'];
  $pagu_permohonan_no_sub_output = $data['no_sub_output'];
  $pagu_permohonan_no_komponen = $data['no_komponen'];
  $pagu_permohonan_akun_dana_dipa = $data['no_akun_dana_dipa'];
  $pagu_permohonan_detail = $data['detail'];
  $pagu_permohonan_id_sipu = $data['id_sipu'];
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
