<?php
include_once 'model_koneksi.php';

$detail_sipu_id_sipu = "";
$detail_sipu_id_detail_sipu = "";
$detail_sipu_nama_barang = "";
$detail_sipu_spesifikasi = "";
$detail_sipu_jumlah = "";
$detail_sipu_harga_satuan = "";
$detail_sipu_keterangan = "";

$detail_sipu_id_sipu = $_GET['id_sipu'];
$detail_sipu_id_detail_sipu = $_POST['detail_sipu_id_detail_sipu'];
$detail_sipu_nama_barang = $_POST['detail_sipu_nama_barang'];
$detail_sipu_spesifikasi = $_POST['detail_sipu_spesifikasi'];
$detail_sipu_jumlah = $_POST['detail_sipu_jumlah'];
$detail_sipu_harga_satuan = $_POST['detail_sipu_harga_satuan'];
$detail_sipu_keterangan = $_POST['detail_sipu_keterangan'];

// query input data
$query= "UPDATE detail_sipu SET nama_barang='$detail_sipu_nama_barang', spesifikasi='$detail_sipu_spesifikasi', jumlah='$detail_sipu_jumlah', harga_satuan='$detail_sipu_harga_satuan', keterangan='$detail_sipu_keterangan' WHERE id_detail_sipu='$detail_sipu_id_detail_sipu';";

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
    <?php if ($_GET['halaman']=="tambah_permohonan_detail"): ?>
      window.location = "?halaman=tambah_permohonan_detail&id_sipu=<?php echo $detail_sipu_id_sipu ?>";
    <?php else: ?>
      window.location = "?halaman=edit_sipu&id_sipu=<?php echo $detail_sipu_id_sipu ?>";
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
