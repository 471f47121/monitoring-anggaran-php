<?php
include_once 'model_koneksi.php';

$sipu_id_sipu = "";
$sipu_mak = "";
$sipu_dana = "";
$sipu_ket_keuangan = "";

$sipu_id_sipu = $_GET['id_sipu'];
$sipu_mak = $_POST['sipu_mak'];
$sipu_dana = $_POST['sipu_dana'];
$sipu_ket_keuangan = $_POST['sipu_ket_keuangan'];

// query input data
$query= "UPDATE `monitor_anggaran`.`sipu` SET `acc_keuangan` = 'acc', `tgl_acc_keuangan` = CURRENT_DATE(), `mak` = '$sipu_mak', `dana` = '$sipu_dana', ket_keuangan='$sipu_ket_keuangan' WHERE `sipu`.`id_sipu` = '$sipu_id_sipu'";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  ?>
  <script type="text/javascript">
  console.log('<?php echo $query ?>');
  </script>
  <?php

    $id_permohonan=$_GET['id_permohonan'];

    // query input data
    $query= "INSERT INTO `monitor_anggaran`.`pagu` (`id_pagu`, `id_permohonan`, `pagu`, `terikat`, `realisasi`, `sisa_pagu`) VALUES (NULL, '$id_permohonan', '$sipu_dana', 0, 0, '$sipu_dana')";

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
