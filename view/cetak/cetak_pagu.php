<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Monitoring Anggaran</title>
  </head>
  <body>

    <?php
    include '../../backend/model_pagu_select_all.php';
    ?>
    <div align="center">
      <img src="../../images/logoBATAN.png" alt="logo batan"/>
    </div>
    <h1 align="center">SISTEM INFORMASI MONITORING ANGGARAN <br><small>PTRR BADAN TENAGA NUKLIR NASIONAL</small></h1>
    <h2 align="center">
      Rencana Anggaran Pengandaan Barang
      <br>
      Tahun <?php echo date("Y") ?>
    </h2>
    <hr>
    <?php
    $pagu_total = 0;
    for ($i=0; $i < $pagu_banyakData; $i++) {
      $pagu_total+=$pagu_pagu[$i];
    }
    ?>
    <b>Alokasi : Rp.<?php echo $pagu_total ?>,-</b>
    <br>
    <br>

    <table align="center" border="1">
      <thead style="background: aquamarine;">
        <th class="text-center">
          Sub Output
        </th>
        <th class="text-center">
          Komponen
        </th>
        <th class="text-center">
          Akun
        </th>
        <th class="text-center">
          Detail
        </th>
        <th class="text-center">
          PAGU (Rp)
        </th>
        <th class="text-center">
          Terikat (Rp)
        </th>
        <th class="text-center">
          Realisasi (Rp)
        </th>
        <th class="text-center">
          Sisa PAGU (Rp) <br>
          <small><i>Dengan Terikat</i></small>
        </th>
        <th class="text-center">
          Sisa PAGU (Rp)
        </th>
      </thead>
      <tbody>
        <?php for ($i=0; $i < $pagu_banyakData; $i++) { ?>
          <tr>
            <td>
              <?php echo $pagu_permohonan_no_sub_output[$i] ?>
            </td>
            <td>
              <?php echo $pagu_permohonan_no_komponen[$i] ?>
            </td>
            <td>
              <?php echo $pagu_permohonan_akun_dana_dipa[$i] ?>
            </td>
            <td>
              <?php echo $pagu_permohonan_detail[$i] ?>
            </td>
            <td>
              <b>
                <?php echo $pagu_pagu[$i] ?>
              </b>
            </td>
            <td>
              <?php echo $pagu_terikat[$i] ?>
            </td>
            <td>
              <?php echo $pagu_realisasi[$i] ?>
            </td>
            <td>
              <?php echo $pagu_pagu[$i]-$pagu_terikat[$i] ?>
            </td>
            <td>
              <b>
                <?php echo $pagu_sisa_pagu[$i] ?>
              </b>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
<script type="text/javascript">
  window.print();
</script>
