<?php
// session_start();
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
?>
