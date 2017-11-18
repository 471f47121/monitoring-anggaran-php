<?php
include_once 'model_koneksi.php';

$permohonan_id_permohonan = "";
$permohonan_id_sipu = "";
$permohonan_id_akun_pemohon = "";
$permohonan_id_spk = "";
$permohonan_no_sub_output = "";
$permohonan_no_komponen = "";
$permohonan_no_akun_dana_dipa = "";
$permohonan_detail = "";

$permohonan_id_permohonan = $_POST['permohonan_id_permohonan'];
// $permohonan_id_sipu = $_POST['permohonan_id_sipu'];
// $permohonan_id_akun_pemohon = $_POST['permohonan_id_akun_pemohon'];
// $permohonan_id_spk = $_POST['permohonan_id_spk'];
$permohonan_no_sub_output = $_POST['permohonan_no_sub_output'];
$permohonan_no_komponen = $_POST['permohonan_no_komponen'];
$permohonan_no_akun_dana_dipa = $_POST['permohonan_no_akun_dana_dipa'];
$permohonan_detail = $_POST['permohonan_detail'];

// query input data
$query= "UPDATE `monitor_anggaran`.`permohonan` SET `no_sub_output` = '$permohonan_no_sub_output', `no_komponen` = '$permohonan_no_komponen', `no_akun_dana_dipa` = '$pagu_permohonan_akun_dana_dipa', `detail` = '$pagu_permohonan_detail' WHERE `permohonan`.`id_permohonan` = '$permohonan_id_permohonan';";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  ?>
  <script type="text/javascript">
  swal({
    title: "Data Tersimpan",
    text: "",
    type: "success",
    confirmButtonText: "Selesai",
    closeOnConfirm: false
  },
  function(){
    window.location = "?halaman=permohonan";
  });
  // window.location = "?halaman=tambah_permohonan_detail&id_sipu=$last_id_sipu";
  </script>
  <?php
}else {
  // jika gagal
  ?>
  <script type="text/javascript">
  // alert("Terjadi kesalahan\nMohon periksa inputan anda dan inputkan kembali data yang benar.");
  swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
  </script>
  <?php
}

?>
