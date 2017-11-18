<?php
include 'model_koneksi.php';
$query = "SELECT * FROM sipu WHERE id_sipu='".$_GET['id_sipu']."'";
$hasil = mysqli_query($link, $query);
// $sipu_banyakData = 0;
$sipu_id_sipu = "";
$sipu_no_sipu = "";
$sipu_tgl_pengajuan = "";
$sipu_unit = "";
$sipu_status = "";
// acc sipu
$sipu_acc_keuangan = "";
$sipu_tgl_acc_keuangan = "";
$sipu_mak = "";
$sipu_dana = "";
$sipu_ket_keuangan = "";
$sipu_acc_ppk = "";
$sipu_tgl_acc_ppk = "";
$sipu_ket_ppk = "";
$sipu_acc_kapus = "";
$sipu_tgl_acc_kapus = "";
$sipu_ket_kapus = "";
$sipu_acc_perkap = "";
$sipu_tgl_pesan = "";
$sipu_tgl_terima = "";
$sipu_ket_perkap = "";

if (mysqli_num_rows($hasil) > 0) {

  // $sipu_banyakData = mysqli_num_rows($hasil);
$data = mysqli_fetch_assoc($hasil);
  $sipu_id_sipu = $data['id_sipu'];
  $sipu_no_sipu = $data['no_sipu'];
  $sipu_tgl_pengajuan = $data['tgl_pengajuan'];
  $sipu_unit = $data['unit'];
  $sipu_status = $data['status'];
  $sipu_acc_keuangan = $data['acc_keuangan'];
  $sipu_tgl_acc_keuangan = $data['tgl_acc_keuangan'];
  $sipu_mak = $data['mak'];
  $sipu_dana = $data['dana'];
  $sipu_acc_ppk = $data['acc_ppk'];
  $sipu_tgl_acc_ppk = $data['tgl_acc_ppk'];
  $sipu_ket_ppk = $data['ket_ppk'];
  $sipu_acc_kapus = $data['acc_kapus'];
  $sipu_tgl_acc_kapus = $data['tgl_acc_kapus'];
  $sipu_ket_kapus = $data['ket_kapus'];
  $sipu_acc_perkap = $data['acc_perkap'];
  $sipu_tgl_pesan = $data['tgl_pesan'];
  $sipu_tgl_terima = $data['tgl_terima'];
  $sipu_ket_perkap = $data['ket_perkap'];

}
?>
