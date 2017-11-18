<?php
include_once 'model_koneksi.php';

$spk_file = "";
$spk_id_akun_ppk = "";
$spk_id_penyedia = "";
$spk_harga = "";
$spk_waktu = "";
$spk_tgl_spk = "";

if (isset($_GET['spk_id_spk'])) {
  # code...
  $spk_id_spk=$_GET['spk_id_spk'];
} else {
  # code...
  $spk_id_spk=$_POST['spk_id_spk'];
}

if ($_GET['halaman']=='permohonan_detail') {
  $id_permohonan = $_GET['id_permohonan'];
  $detail_sipu_id_sipu = $_GET['id_sipu'];
}
$spk_file = $_POST['spk_file']; // TODO: ambil nama file aja buat db trus upload file ke folder 'file'
$spk_id_akun_ppk = $_POST['spk_id_akun_ppk'];
$spk_id_penyedia = $_POST['spk_id_penyedia'];
$spk_harga = $_POST['spk_harga'];
$spk_waktu = $_POST['spk_waktu'];
$spk_tgl_spk = $_POST['spk_tgl_spk'];

// query input data
$query= "UPDATE `monitor_anggaran`.`spk` SET `file` = '$spk_file', `id_akun_ppk` = '$spk_id_akun_ppk', id_penyedia='$spk_id_penyedia', `harga` = '$spk_harga', `waktu` = '$spk_waktu', `tgl_spk` = '$spk_tgl_spk' WHERE `spk`.`id_spk` = '$spk_id_spk';";

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
    <?php if($_GET['halaman']=='permohonan_detail'): ?>
      window.location = "?halaman=permohonan";
    <?php else: ?>
      window.location = "?halaman=spk";
    <?php endif; ?>
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
