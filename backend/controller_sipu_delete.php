<?php
include_once 'model_koneksi.php';

$sipu_id_sipu = "";

$sipu_id_sipu = $_GET['id_sipu'];

// query input data
$query= "DELETE FROM sipu WHERE id_sipu='$sipu_id_sipu';";

// echo "query: $query";
// eksekusi query dengan mysqli
if (mysqli_query($link, $query)) {
  // jika berhasil
  $query= "DELETE FROM detail_sipu WHERE id_sipu='$sipu_id_sipu';";

  // echo "query: $query";
  // eksekusi query dengan mysqli
  if (mysqli_query($link, $query)) {
    // jika berhasil
    ?>
    <script type="text/javascript">
    </script>
    <?php
  }else {
    // jika gagal
  }
}else {
  // jika gagal
}

?>
