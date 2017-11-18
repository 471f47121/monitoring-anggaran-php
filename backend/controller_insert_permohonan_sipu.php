<?php
include_once 'model_koneksi.php';

$sipu_no_sipu = "";
$sipu_unit = "";

$sipu_no_sipu = $_POST['sipu_no_sipu'];
$sipu_unit    = $_POST['sipu_unit'];

// query input data
$query= "INSERT INTO sipu (no_sipu,tgl_pengajuan,unit,status) VALUES ('$sipu_no_sipu',CURRENT_DATE(),'$sipu_unit','menunggu');";

// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  $last_id_sipu = mysqli_insert_id($link);
  $permohonan_detail = "";
  $permohonan_id_akun_pemohon = "";

  $permohonan_id_akun_pemohon = $_SESSION['id_akun'];
  $permohonan_detail = $_POST['permohonan_detail'];

  // query input data
  $query= "INSERT INTO permohonan (id_sipu,id_akun_pemohon,detail) VALUES ('$last_id_sipu','$permohonan_id_akun_pemohon','$permohonan_detail');";

  // eksekusi query dengan mysqli
  if (mysqli_query($link, $query)) {
    // jika berhasil
    ?>
    <script type="text/javascript">
    // swal({
    //   title: "Pendaftaran berhasil",
    //   text: "Selamat bergabung <?php //echo $username; ?>, silahkan unggah foto anda pada form selanjutnya (opsional)",
    //   type: "success",
    //   confirmButtonText: "Selanjutnya",
    //   closeOnConfirm: false
    // },
    // function(){
    //   window.location = "?halaman=foto";
    // });
    window.location = "?halaman=tambah_permohonan_detail&id_sipu=<?php echo $last_id_sipu ?>";
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
