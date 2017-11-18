<?php
include_once 'model_koneksi.php';

$spk_file = "";
$spk_id_akun_ppk = "";
$spk_id_penyedia = "";
$spk_harga = "";
$spk_waktu = "";
$spk_tgl_spk = "";

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
$query= "INSERT INTO `monitor_anggaran`.`spk` (`file`, `id_akun_ppk`, `id_penyedia`, `harga`, `waktu`, `tgl_spk`) VALUES ('$spk_file', '$spk_id_akun_ppk', '$spk_id_penyedia', '$spk_harga', '$spk_waktu', '$spk_tgl_spk');";

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
      <?php if($_GET['halaman']=='permohonan_detail'): ?>
        window.location = "?halaman=permohonan_detail&id_permohonan=<?php echo $id_permohonan ?>&id_sipu=<?php echo $sipu_id_sipu ?>&spk_id_spk=<?php echo $last_id_spk ?>";
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
