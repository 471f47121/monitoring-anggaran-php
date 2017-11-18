<?php
// ob_start();
session_start();

$lokasi_gambar = "../images/profile/".$_SESSION['nip'].".jpg";
// $lokasi_gambar = "foto-".$_SESSION['nip'].".jpg";

$asal_gambar = $_FILES['foto']['tmp_name'];


// move_uploaded_file($asal_gambar,$lokasi_gambar);
if (move_uploaded_file($asal_gambar,$lokasi_gambar)) {
  ?>
  <script type="text/javascript">
  swal({
    title: "Pendaftaran berhasil",
    text: "Selamat bergabung, unggah foto anda berhasil",
    type: "success",
    confirmButtonText: "Selanjutnya",
    closeOnConfirm: false
  },
  function(){
    window.location = "./";
  });
  </script>
  <?php
} else {
  ?>
  <script type="text/javascript">
  swal("Terjadi kesalahan", "Mohon periksa file anda dan inputkan kembali file yang benar.", "error");
  </script>
  <?php
  var_dump($_FILES['foto']);
  echo "<br>";
  var_dump(pathinfo('../images/profile/'));
}

 ?>
