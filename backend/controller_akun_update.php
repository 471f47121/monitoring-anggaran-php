<?php
include_once 'model_koneksi.php';

$user_id_user = "";
$user_nip = "";
$user_nama_lengkap = "";
$user_username = "";
$user_password = "";
$user_hak_akes = "";

$user_id_user = $_POST['user_id_user'];
$user_nip = $_POST['user_nip'];
$user_nama_lengkap = $_POST['user_nama_lengkap'];
$user_username = $_POST['user_username'];
$user_password = $_POST['user_password'];
$user_hak_akes = $_POST['user_hak_akes'];

// query input data
$query= "UPDATE `monitor_anggaran`.`akun` SET `nip` = '$user_nip', `nama_lengkap` = '$user_nama_lengkap', `username` = '$user_username', `hak_akses` = '$user_hak_akes' WHERE `akun`.`id_akun` = '$user_id_user';";

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
    window.location = "?halaman=akun";
  });
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
