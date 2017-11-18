<?php
include 'model_koneksi.php';
$query = "SELECT * FROM detail_sipu WHERE id_detail_sipu='".$_GET['id_detail_sipu']."'";
$hasil = mysqli_query($link, $query);
$detail_sipu_banyakData = 0;
$detail_sipu_id_detail_sipu = "";
$detail_sipu_id_sipu = "";
$detail_sipu_nama_barang = "";
$detail_sipu_spesifikasi = "";
$detail_sipu_jumlah = "";
$detail_sipu_harga_satuan = "";
$detail_sipu_keterangan = "";

if (mysqli_num_rows($hasil) > 0) {

  $detail_sipu_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);
  $data = mysqli_fetch_assoc($hasil);
  $detail_sipu_id_detail_sipu = $data['id_detail_sipu'];
  $detail_sipu_id_sipu = $data['id_sipu'];
  $detail_sipu_nama_barang = $data['nama_barang'];
  $detail_sipu_spesifikasi = $data['spesifikasi'];
  $detail_sipu_jumlah = $data['jumlah'];
  $detail_sipu_harga_satuan = $data['harga_satuan'];
  $detail_sipu_keterangan = $data['keterangan'];
}
?>
