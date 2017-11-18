<?php
include_once 'model_koneksi.php';

$penyedia_id_penyedia = "";
$penyedia_nama_instansi = "";
$penyedia_alamat = "";
$penyedia_bank = "";
$penyedia_no_rekening = "";
$penyedia_npwp = "";
$penyedia_penanggung_jawab = "";
$penyedia_jabatan_pj = "";

// $penyedia_id_penyedia = $_POST['penyedia_id_penyedia'];
$penyedia_nama_instansi = $_POST['penyedia_nama_instansi'];
$penyedia_alamat = $_POST['penyedia_alamat'];
$penyedia_bank = $_POST['penyedia_bank'];
$penyedia_no_rekening = $_POST['penyedia_no_rekening'];
$penyedia_npwp = $_POST['penyedia_npwp'];
$penyedia_penanggung_jawab = $_POST['penyedia_penanggung_jawab'];
$penyedia_jabatan_pj = $_POST['penyedia_jabatan_pj'];

// query input data
$query= "INSERT INTO `monitor_anggaran`.`penyedia` (`id_penyedia`, `nama_instansi`, `alamat`, `bank`, `no_rekening`, `npwp`, `penanggung_jawab`, `jabatan_pj`) VALUES (NULL, '$penyedia_nama_instansi', '$penyedia_alamat', '$penyedia_bank', '$penyedia_no_rekening', '$penyedia_npwp', '$penyedia_penanggung_jawab', '$penyedia_jabatan_pj');";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  $spk_id_spk=mysqli_insert_id($link);
  // query ubah data
  $query= "UPDATE `monitor_anggaran`.`permohonan` SET `id_spk` = '$spk_id_spk' WHERE `permohonan`.`id_permohonan` = '$id_permohonan';";

  // eksekusi query dengan mysqli
  if (mysqli_query($link, $query)) {
    // jika berhasil
    $last_id_spk=mysqli_insert_id($link);
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
      window.location = "?halaman=penyedia";
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
