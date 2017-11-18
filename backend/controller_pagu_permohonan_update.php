<?php
include_once 'model_koneksi.php';

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

$pagu_id_pagu = $_POST['pagu_id_pagu'];
$pagu_id_permohonan = $_POST['pagu_id_permohonan'];
$pagu_pagu = $_POST['pagu_pagu'];
$pagu_terikat = $_POST['pagu_terikat'];
$pagu_realisasi = $_POST['pagu_realisasi'];
$pagu_permohonan_no_sub_output = $_POST['pagu_permohonan_no_sub_output'];
$pagu_permohonan_no_komponen = $_POST['pagu_permohonan_no_komponen'];
$pagu_permohonan_akun_dana_dipa = $_POST['pagu_permohonan_akun_dana_dipa'];
$pagu_permohonan_detail = $_POST['pagu_permohonan_detail'];
// $pagu_permohonan_id_sipu = $_POST['pagu_permohonan'];

$pagu_sisa_pagu = $pagu_pagu-$pagu_realisasi; //hitung pake php
// query update data
$query= "UPDATE `monitor_anggaran`.`pagu` SET `pagu` = '$pagu_pagu', `terikat` = '$pagu_terikat', `realisasi` = '$pagu_realisasi', `sisa_pagu` = '$pagu_sisa_pagu' WHERE `pagu`.`id_pagu` = '$pagu_id_pagu';";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil

  // query update data permohonan
  $query= "UPDATE `monitor_anggaran`.`permohonan` SET `no_sub_output` = '$pagu_permohonan_no_sub_output', `no_komponen` = '$pagu_permohonan_no_komponen', `no_akun_dana_dipa` = '$pagu_permohonan_akun_dana_dipa', `detail` = '$pagu_permohonan_detail' WHERE `permohonan`.`id_permohonan` = '$pagu_id_permohonan';";

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
      window.location = "?halaman=pagu";
    });
    </script>
    <?php
  }else {
    // jika gagal
    ?>
    <script type="text/javascript">
    // alert("Terjadi kesalahan\nMohon periksa inputan anda dan inputkan kembali data yang benar.");
    console.log("error update permohonan");
    swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
    </script>
    <?php
  }
}else {
  // jika gagal
  ?>
  <script type="text/javascript">
  // alert("Terjadi kesalahan\nMohon periksa inputan anda dan inputkan kembali data yang benar.");
  console.log("error update pagu");
  swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
  </script>
  <?php
}

?>
