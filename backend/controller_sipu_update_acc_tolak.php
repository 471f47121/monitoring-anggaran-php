<?php
include_once 'model_koneksi.php';

$sipu_id_sipu = "";
$penolak = "";
$sipu_ket = "";

$sipu_id_sipu = $_GET['id_sipu'];
$penolak = $_POST['penolak'];
$sipu_ket = $_POST['sipu_ket'];

// query input data
if ($penolak!="perkap") {
  # code...
  $query= "UPDATE `monitor_anggaran`.`sipu` SET `acc_$penolak` = 'tolak', `tgl_acc_$penolak` = CURRENT_DATE(), ket_$penolak='$sipu_ket' WHERE `sipu`.`id_sipu` = '$sipu_id_sipu'";
} else {
  # code...
  $query= "UPDATE `monitor_anggaran`.`sipu` SET `acc_$penolak` = 'tolak', ket_$penolak='$sipu_ket' WHERE `sipu`.`id_sipu` = '$sipu_id_sipu'";
}


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
