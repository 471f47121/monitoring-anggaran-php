<?php
include_once 'model_koneksi.php';

$detail_sipu_id_sipu = "";
$detail_sipu_id_detail_sipu = "";

$detail_sipu_id_sipu = $_GET['id_sipu'];
$detail_sipu_id_detail_sipu = $_GET['detail_sipu_id_detail_sipu'];

// query input data
$query= "DELETE FROM detail_sipu WHERE id_detail_sipu='$detail_sipu_id_detail_sipu';";

// echo "query: $query";
// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  ?>
  <script type="text/javascript">
  // swal({
  //   title: "Data Terhapus",
  //   text: "",
  //   type: "success",
  //   confirmButtonText: "Selesai",
  //   closeOnConfirm: false
  // },
  // function(){
  //   window.location = "?halaman=tambah_permohonan_detail&id_sipu=<?php //echo $detail_sipu_id_sipu ?>";
  // });
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
