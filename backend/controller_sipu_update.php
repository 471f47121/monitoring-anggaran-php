<?php
include_once 'model_koneksi.php';

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

$sipu_id_sipu = $_GET['id_sipu'];
$sipu_no_sipu = $_POST['sipu_no_sipu'];
$sipu_tgl_pengajuan = $_POST['sipu_tgl_pengajuan'];
// $sipu_unit = $_POST['sipu_unit'];
// acc sipu
$sipu_acc_keuangan = $_POST['sipu_acc_keuangan'];
// $sipu_tgl_acc_keuangan = $_POST['sipu_tgl_acc_keuangan'];
$sipu_mak = $_POST['sipu_mak'];
$sipu_dana = $_POST['sipu_dana'];
$sipu_ket_keuangan = $_POST['sipu_ket_keuangan'];
$sipu_acc_ppk = $_POST['sipu_acc_ppk'];
// $sipu_tgl_acc_ppk = $_POST['sipu_tgl_acc_ppk'];
$sipu_ket_ppk = $_POST['sipu_ket_ppk'];
$sipu_acc_kapus = $_POST['sipu_acc_kapus'];
// $sipu_tgl_acc_kapus = $_POST['sipu_tgl_acc_kapus'];
$sipu_ket_kapus = $_POST['sipu_ket_kapus'];
$sipu_acc_perkap = $_POST['sipu_acc_perkap'];
$sipu_tgl_pesan = $_POST['sipu_tgl_pesan'];
$sipu_tgl_terima = $_POST['sipu_tgl_terima'];
$sipu_ket_perkap = $_POST['sipu_ket_perkap'];

// merubah status sipu
if ($sipu_acc_keuangan!='acc') {
  $sipu_status='menunggu keuangan';
} elseif ($sipu_acc_ppk!='acc') {
  # code...
  $sipu_status='menunggu ppk';
} elseif ($sipu_acc_kapus!='acc') {
  # code...
  $sipu_status='menunggu kapus';
} elseif ($sipu_acc_perkap!='acc') {
  # code...
  $sipu_status='menunggu perkap';
} else {
  # code...
  $sipu_status='selesai';
}

// query input data
$query= "UPDATE `monitor_anggaran`.`sipu` SET `no_sipu` = '$sipu_no_sipu', `tgl_pengajuan` = '$sipu_tgl_pengajuan', `status` = '$sipu_status', `acc_keuangan` = '$sipu_acc_keuangan', `mak` = '$sipu_mak', `dana` = '$sipu_dana', `ket_keuangan` = '$sipu_ket_keuangan', `acc_ppk` = '$sipu_acc_ppk', `ket_ppk` = '$sipu_ket_ppk', `acc_kapus` = '$sipu_acc_kapus', `ket_kapus` = '$sipu_ket_kapus', `acc_perkap` = '$sipu_acc_perkap', `tgl_pesan` = '$sipu_tgl_pesan', `tgl_terima` = '$sipu_tgl_terima', `ket_perkap` = '$sipu_ket_perkap' WHERE `sipu`.`id_sipu` = '$sipu_id_sipu';";

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
    window.location = "?halaman=sipu_detail&id_sipu=<?php echo $sipu_id_sipu ?>";
  });
  </script>
  <?php
}else {
  // jika gagal
  ?>
  <script type="text/javascript">
  // alert("Terjadi kesalahan\nMohon periksa inputan anda dan inputkan kembali data yang benar.");
  swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.\n<?php echo $query ?>", "error");
  </script>

  <?php
}

?>
