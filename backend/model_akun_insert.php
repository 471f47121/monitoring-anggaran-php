<?php
session_start();

include_once 'model_koneksi.php';

$user_nip = "";
$user_nama_lengkap = "";
$user_username = "";
$user_password = "";

// hanya untuk menguji, bukan dimasukan ke database
$user_password_konfirmasi = "";

$user_nip                 = $_POST['nip'];
$user_nama_lengkap        = $_POST['nama_lengkap'];
$user_username            = $_POST['username'];
$user_password            = $_POST['password'];
$user_jenis               = 'pemohon';
$user_password_konfirmasi = $_POST['password_konfirmasi'];

if($user_password != $user_password_konfirmasi) {
  // jika tidak ada isian kosong tapi password dan password konfirmasi tidak sama
  ?>
  <script type="text/javascript">
    // alert("kata sandi dan konfirmasi kata sandi tidak sama");
    swal("Konfirmasi password tidak sesuai", "Silahkan periksa kembali password dan konfirmasi password anda.", "error");
  </script>
  <?php
}else {
  // jika tidak ada isian kosong serta sandi dan konfirmasi sandi sama

  // query input data
  $query= "INSERT INTO akun (nip, nama_lengkap, username, password, hak_akses) VALUES ('".$user_nip."','".$user_nama_lengkap."','".$user_username."', PASSWORD('".$user_password."'), '".$user_jenis."');";

  // eksekusi query dengan mysqli
  if (mysqli_query($link, $query)) {
    // die($username);
    ?>
    <script type="text/javascript">
    swal({
      title: "Pendaftaran berhasil",
      text: "Selamat bergabung <?php echo $user_username?>",
      // text: "Selamat bergabung <?php echo $user_username?>, silahkan unggah foto anda pada form selanjutnya (opsional)",
      type: "success",
      confirmButtonText: "Selanjutnya",
      closeOnConfirm: false
    },
    function(){
      window.location = "./";
      // window.location = "?halaman=foto";
    });
    </script>
    <?php
    // jika berhasil

    $_SESSION['nip'] = $user_nip;

  }else {
    // jika gagal
    ?>
    <script type="text/javascript">
    // alert("Terjadi kesalahan\nMohon periksa inputan anda dan inputkan kembali data yang benar.");
    swal("Terjadi kesalahan", "Mohon periksa inputan anda dan inputkan kembali data yang benar.", "error");
    </script>
    <?php
  }

}
?>
