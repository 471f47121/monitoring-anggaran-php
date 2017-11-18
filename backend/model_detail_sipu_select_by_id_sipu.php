<?php
include 'model_koneksi.php';
$query = "SELECT * FROM detail_sipu WHERE id_sipu='".$_GET['id_sipu']."'";
$hasil = mysqli_query($link, $query);
$detail_sipu_banyakData = 0;
$detail_sipu_id_detail_sipu = array();
$detail_sipu_id_sipu = array();
$detail_sipu_nama_barang = array();
$detail_sipu_spesifikasi = array();
$detail_sipu_jumlah = array();
$detail_sipu_harga_satuan = array();
$detail_sipu_keterangan = array();

if (mysqli_num_rows($hasil) > 0) {

  $detail_sipu_banyakData = mysqli_num_rows($hasil);
  // $this->banyakData = mysqli_num_rows($hasil);

  while($data = mysqli_fetch_assoc($hasil)){
    array_push($detail_sipu_id_detail_sipu, $data['id_detail_sipu']);
    array_push($detail_sipu_id_sipu, $data['id_sipu']);
    array_push($detail_sipu_nama_barang, $data['nama_barang']);
    array_push($detail_sipu_spesifikasi, $data['spesifikasi']);
    array_push($detail_sipu_jumlah, $data['jumlah']);
    array_push($detail_sipu_harga_satuan, $data['harga_satuan']);
    array_push($detail_sipu_keterangan, $data['keterangan']);
  }
}
?>
