<?php
include_once 'model_koneksi.php';

$sipu_id_sipu = "";
$sipu_ket_ppk = "";

$sipu_id_sipu = $_GET['id_sipu'];
$sipu_ket_ppk = $_POST['sipu_ket_ppk'];

// query input data
$query= "UPDATE `monitor_anggaran`.`sipu` SET `acc_ppk` = 'acc', `tgl_acc_ppk` = CURRENT_DATE(), ket_ppk='$sipu_ket_ppk' WHERE `sipu`.`id_sipu` = '$sipu_id_sipu'";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  ?>
  <script type="text/javascript">
  console.log('<?php echo $query ?>');
  swal({
    title: "Data Tersimpan",
    text: "",
    type: "success",
    confirmButtonText: "Selesai",
    closeOnConfirm: false
  },
  function(){
    window.location = "?halaman=permohonan_detail&id_permohonan=<?php echo $_GET['id_permohonan'] ?>&id_sipu=<?php echo $sipu_id_sipu ?>&spk_id_spk=<?php echo $_GET['spk_id_spk'] ?>";
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
