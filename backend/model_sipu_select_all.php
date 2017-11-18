<?php
include 'model_koneksi.php';
$query = "SELECT * FROM sipu";
$hasil = mysqli_query($link, $query);
$sipu_banyakData = 0;
$sipu_id_sipu = array();
$sipu_no_sipu = array();
$sipu_tgl_pengajuan = array();
$sipu_unit = array();
$sipu_status = array();
// acc sipu
$sipu_acc_keuangan = array();
$sipu_tgl_acc_keuangan = array();
$sipu_mak = array();
$sipu_dana = array();
$sipu_ket_keuangan = array();
$sipu_acc_ppk = array();
$sipu_tgl_acc_ppk = array();
$sipu_ket_ppk = array();
$sipu_acc_kapus = array();
$sipu_tgl_acc_kapus = array();
$sipu_ket_kapus = array();
$sipu_acc_perkap = array();
$sipu_tgl_pesan = array();
$sipu_tgl_terima = array();
$sipu_ket_perkap = array();

if (mysqli_num_rows($hasil) > 0) {

  $sipu_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($sipu_id_sipu, $data['id_sipu']);
    array_push($sipu_no_sipu, $data['no_sipu']);
    array_push($sipu_tgl_pengajuan, $data['tgl_pengajuan']);
    array_push($sipu_unit, $data['unit']);
    array_push($sipu_status, $data['status']);
    array_push($sipu_acc_keuangan, $data['acc_keuangan']);
    array_push($sipu_tgl_acc_keuangan, $data['tgl_acc_keuangan']);
    array_push($sipu_mak, $data['mak']);
    array_push($sipu_dana, $data['dana']);
    array_push($sipu_acc_ppk, $data['acc_ppk']);
    array_push($sipu_tgl_acc_ppk, $data['tgl_acc_ppk']);
    array_push($sipu_ket_ppk, $data['ket_ppk']);
    array_push($sipu_acc_kapus, $data['acc_kapus']);
    array_push($sipu_tgl_acc_kapus, $data['tgl_acc_kapus']);
    array_push($sipu_ket_kapus, $data['ket_kapus']);
    array_push($sipu_acc_perkap, $data['acc_perkap']);
    array_push($sipu_tgl_pesan, $data['tgl_pesan']);
    array_push($sipu_tgl_terima, $data['tgl_terima']);
    array_push($sipu_ket_perkap, $data['ket_perkap']);
  }
  // mysqli_fetch_object($this);
}
 ?>
