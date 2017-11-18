<?php
include 'model_koneksi.php';
$query = "SELECT permohonan.*, akun.nama_lengkap, sipu.* FROM permohonan INNER JOIN akun ON permohonan.id_akun_pemohon=akun.id_akun INNER JOIN sipu ON permohonan.id_sipu=sipu.id_sipu WHERE id_akun_pemohon='".$_SESSION['id_akun']."' AND id_permohonan='".$_GET['id_permohonan']."'";
$hasil = mysqli_query($link, $query);
$permohonan_banyakData = 0;
$permohonan_id_permohonan = "";
$permohonan_id_sipu = "";
$permohonan_id_akun_pemohon = "";
$permohonan_id_spk = "";
$permohonan_no_sub_output = "";
$permohonan_no_komponen = "";
$permohonan_no_akun_dana_dipa = "";
$permohonan_detail = "";
$permohonan_akun_nama_lengkap = "";
$permohonan_sipu_tgl_pengajuan = "";
$permohonan_sipu_status = "";
$permohonan_sipu_unit = "";

if (mysqli_num_rows($hasil) > 0) {

  $permohonan_banyakData = mysqli_num_rows($hasil);
  $data = mysqli_fetch_assoc($hasil);
  $permohonan_id_permohonan = $data['id_permohonan'];
  $permohonan_id_sipu = $data['id_sipu'];
  $permohonan_id_akun_pemohon = $data['id_akun_pemohon'];
  $permohonan_id_spk = $data['id_spk'];
  $permohonan_no_sub_output = $data['no_sub_output'];
  $permohonan_no_komponen = $data['no_komponen'];
  $permohonan_no_akun_dana_dipa = $data['no_akun_dana_dipa'];
  $permohonan_detail = $data['detail'];
  $permohonan_akun_nama_lengkap = $data['nama_lengkap'];
  $permohonan_sipu_tgl_pengajuan = $data['tgl_pengajuan'];
  $permohonan_sipu_status = $data['status'];
  $permohonan_sipu_unit = $data['unit'];
}
 ?>
