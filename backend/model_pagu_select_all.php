<?php
include 'model_koneksi.php';
$query = "SELECT * FROM pagu INNER JOIN permohonan ON pagu.id_permohonan=permohonan.id_permohonan";
$hasil = mysqli_query($link, $query);
$pagu_banyakData = 0;
$pagu_id_pagu = array();
$pagu_id_permohonan = array();
$pagu_pagu = array();
$pagu_terikat = array();
$pagu_realisasi = array();
$pagu_sisa_pagu = array();
$pagu_permohonan_no_sub_output = array();
$pagu_permohonan_no_komponen = array();
$pagu_permohonan_akun_dana_dipa = array();
$pagu_permohonan_detail = array();
$pagu_permohonan_id_sipu = array();

if (mysqli_num_rows($hasil) > 0) {

  $pagu_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($pagu_id_pagu, $data['id_pagu']);
    array_push($pagu_id_permohonan, $data['id_permohonan']);
    array_push($pagu_pagu, $data['pagu']);
    array_push($pagu_terikat, $data['terikat']);
    array_push($pagu_realisasi, $data['realisasi']);
    array_push($pagu_sisa_pagu, $data['sisa_pagu']);
    array_push($pagu_permohonan_no_sub_output, $data['no_sub_output']);
    array_push($pagu_permohonan_no_komponen, $data['no_komponen']);
    array_push($pagu_permohonan_akun_dana_dipa, $data['no_akun_dana_dipa']);
    array_push($pagu_permohonan_detail, $data['detail']);
    array_push($pagu_permohonan_id_sipu, $data['id_sipu']);
  }
  // mysqli_fetch_object($this);
}

// function selectAkun()
// {
// }
 ?>
