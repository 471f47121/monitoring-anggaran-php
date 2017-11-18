<?php
include 'model_koneksi.php';
$query = "SELECT permohonan.*, akun.nama_lengkap, sipu.* FROM permohonan INNER JOIN akun ON permohonan.id_akun_pemohon=akun.id_akun INNER JOIN sipu ON permohonan.id_sipu=sipu.id_sipu WHERE id_akun_pemohon='".$_SESSION['id_akun']."'";
$hasil = mysqli_query($link, $query);
$permohonan_banyakData = 0;
$permohonan_id_permohonan = array();
$permohonan_id_sipu = array();
$permohonan_id_akun_pemohon = array();
$permohonan_id_spk = array();
$permohonan_no_sub_output = array();
$permohonan_no_komponen = array();
$permohonan_no_akun_dana_dipa = array();
$permohonan_detail = array();
$permohonan_akun_nama_lengkap = array();
$permohonan_sipu_tgl_pengajuan = array();
$permohonan_sipu_status = array();
$permohonan_sipu_unit = array();

if (mysqli_num_rows($hasil) > 0) {

  $permohonan_banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($permohonan_id_permohonan, $data['id_permohonan']);
    array_push($permohonan_id_sipu, $data['id_sipu']);
    array_push($permohonan_id_akun_pemohon, $data['id_akun_pemohon']);
    array_push($permohonan_id_spk, $data['id_spk']);
    array_push($permohonan_no_sub_output, $data['no_sub_output']);
    array_push($permohonan_no_komponen, $data['no_komponen']);
    array_push($permohonan_no_akun_dana_dipa, $data['no_akun_dana_dipa']);
    array_push($permohonan_detail, $data['detail']);
    array_push($permohonan_akun_nama_lengkap, $data['nama_lengkap']);
    array_push($permohonan_sipu_tgl_pengajuan, $data['tgl_pengajuan']);
    array_push($permohonan_sipu_status, $data['status']);
    array_push($permohonan_sipu_unit, $data['unit']);
  }
}
 ?>
