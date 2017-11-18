<?php
  session_start();

  if (isset($_SESSION['sudah_login']) && $_SESSION['sudah_login']) {
    if ($_SESSION['hak_akses']=='pemohon') {
      // login ke halaman pemohon
      ?>
      <script type="text/javascript">
        window.location = "pemohon";
      </script>
      <?php
    } else {
      // login ke halaman dashboard
      ?>
      <script type="text/javascript">
        window.location = "dashboard";
      </script>
      <?php
    }
  } else {
    include_once 'model_koneksi.php';
    $username = "";
    $password = "";

    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // cek username
      $query = "SELECT username FROM akun WHERE username='$username'";
      $hasil = mysqli_query($link,$query);
      $cekUsername = (mysqli_num_rows($hasil)>0);

      // cek password
      $query = "SELECT password FROM akun WHERE password=PASSWORD('$password')";
      $hasil = mysqli_query($link,$query);
      $cekPassword = (mysqli_num_rows($hasil)>0);

      if (!$cekUsername) {
        ?>
        <script type="text/javascript">
        swal("Username tidak ditemukan", "Silahkan periksa kembali username anda.", "error");
        </script>
        <?php
      }else if (!$cekPassword) {
        ?>
        <script type="text/javascript">
          swal("Password anda tidak cocok", "Silahkan periksa kembali password anda.", "error");
        </script>
        <?php
      }else {
        // ambil semua data akun
        $query = "SELECT * FROM akun WHERE username='$username' AND password=PASSWORD('$password')";
        $hasil = mysqli_query($link,$query);
        while($data = mysqli_fetch_assoc($hasil)){
          $_SESSION['id_akun'] = $data['id_akun'];
          $_SESSION['nip'] = $data['nip'];
          $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
          $_SESSION['username'] = $username;
          $_SESSION['hak_akses'] = $data['hak_akses'];
        }
        $_SESSION['sudah_login'] = true;
        // login sesuai hak akses
        if ($_SESSION['hak_akses']=='pemohon') {
          // login ke halaman pemohon
          ?>
          <script type="text/javascript">
          swal("Selamat Datang <?php echo $username; ?>!", "", "success");
          swal({
            title: "",
            text: "Selamat Datang <?php echo $username; ?>!",
            type: "success",
            confirmButtonText: "Oke",
            closeOnConfirm: false
          },
          function(){
            window.location = "pemohon";
          });
          </script>
          <?php
        } else {
          // login ke halaman dashboard
          ?>
          <script type="text/javascript">
          swal("Selamat Datang <?php echo $username; ?>!", "", "success");
          swal({
            title: "",
            text: "Selamat Datang <?php echo $username; ?>!",
            type: "success",
            confirmButtonText: "Oke",
            closeOnConfirm: false
          },
          function(){
            window.location = "dashboard";
          });
          </script>
          <?php
        }

      }

    }

  }

?>
