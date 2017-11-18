<script type="text/javascript">
  document.onload=(function() {
    setActive('sipu');
  });
  // setActive('sipu');
</script>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title"> SIPU</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-default btn-sm btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <!-- <div class="page-header">
          <h4>SIPU belum Diinputkan MAK <small></small></h4>
        </div> -->

        <!-- item SIPU -->
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-xs-8">
                <div class="row">
                  <div class="col-xs-3">
                    Nomor
                  </div>
                  <div class="col-xs-9">
                    <b><?php echo $sipu_no_sipu ?></b> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    Tanggal
                  </div>
                  <div class="col-xs-9">
                    <?php echo $sipu_tgl_pengajuan ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    Status
                  </div>
                  <div class="col-xs-9">
                    <?php if ($sipu_status=="selesai"): ?>
                      <span class="label label-success"><?php echo $sipu_status ?></span>
                    <?php else: ?>
                      <span class="label label-warning"><?php echo $sipu_status ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-xs-4 text-right">
                <a href="?halaman=sipu" class="btn btn-default">
                  <i class="fa fa-chevron-circle-left"></i> Kembali
                </a>
                <a href="?halaman=edit_sipu&id_sipu=<?php echo $_GET['id_sipu'] ?>" class="btn btn-warning">
                  <i class="fa fa-edit"></i> Ubah/Revisi
                </a>
                <!-- <button type="button" class="btn btn-danger ">
                  <i class="fa fa-trash-o"></i> Hapus
                </button> -->
              </div>
            </div>
            <hr>
          </div>
        </div>
        <!-- / item SIPU -->

        <br>
        <!-- tabel barang -->
        <div class="row">
          <div class="col-xs-10">
            <b>Tabel Barang/Bahan</b>
          </div>
          <div class="col-xs-2 text-right">
          </div>
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th rowspan="2">
                  No.
                </th>
                <th rowspan="2">
                  Nama Barang/Bahan
                </th>
                <th rowspan="2">
                  Spesifikasi
                </th>
                <th rowspan="2">
                  Jumlah
                </th>
                <th colspan="2">
                  Estimasi Harga (Rp)
                </th>
                <th rowspan="2">
                  Keterangan
                </th>
              </tr>
              <tr>
                <th>
                  Satuan
                </th>
                <th>
                  Total
                </th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < $detail_sipu_banyakData; $i++) { ?>
              <tr>
                <td>
                  <?php echo $i+1 ?>
                </td>
                <td>
                  <?php echo $detail_sipu_nama_barang[$i] ?>
                </td>
                <td>
                  <?php echo $detail_sipu_spesifikasi[$i] ?>
                </td>
                <td>
                  <?php echo $detail_sipu_jumlah[$i] ?>
                </td>
                <td>
                  Rp. <?php echo $detail_sipu_harga_satuan[$i] ?>
                </td>
                <td>
                  Rp. <?php echo $detail_sipu_jumlah[$i]*$detail_sipu_harga_satuan[$i] ?>
                </td>
                <td>
                  <?php echo $detail_sipu_keterangan[$i] ?>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /tabel barang -->
        <br>
        <!-- subag keuangan -->
        <div class="row">
          <div class="col-xs-8">
            <b>Sub Bagian Keuangan</b>
          </div>
          <div class="col-xs-4 text-right">
            <?php if ($sipu_acc_keuangan==''): ?>
              <!-- <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span> -->
              <form class="" action="" method="post">
                <input type="hidden" name="id" value="">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i> Setujui
                </button>
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-times"></i> Tolak
                </button>
              </form>
            <?php else: ?>
              <span class="label label-success"> <i class="fa fa-check"></i> <?php echo $sipu_acc_keuangan ?> pada <?php echo $sipu_tgl_acc_keuangan ?></span>
            <?php endif; ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-3">
                Beban MAK
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_keuangan==''): ?>
                  <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
                <?php else: ?>
                  <?php echo $sipu_mak ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                Persediaan Dana
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_keuangan==''): ?>
                  <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
                <?php else: ?>
                  <b>Rp</b> <?php echo $sipu_dana ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                Keterangan
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_keuangan==''): ?>
                  <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
                <?php else: ?>
                  <?php echo $sipu_ket_keuangan ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
          </div>
        </div>
        <!-- /subag keuangan -->
        <br>
        <hr>
        <!-- ppk -->
        <div class="row">
          <div class="col-xs-8">
            <b>Pejabat Pembuat Komitmen</b>
          </div>
          <div class="col-xs-4 text-right">
            <?php if ($sipu_acc_ppk==''): ?>
              <!-- <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span> -->
              <form class="" action="" method="post">
                <input type="hidden" name="id" value="">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i> Setujui
                </button>
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-times"></i> Tolak
                </button>
              </form>
            <?php else: ?>
              <span class="label label-success"> <i class="fa fa-check"></i> <?php echo $sipu_acc_ppk ?> pada <?php echo $sipu_tgl_acc_ppk ?></span>
            <?php endif; ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-3">
                Instruksi
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_ppk==''): ?>
                  <span class="label label-warning">Menunggu Pejabat Pembuat Komitmen</span>
                <?php else: ?>
                  <?php echo $sipu_ket_ppk ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
          </div>
        </div>
        <!-- /ppk -->
        <br>
        <hr>
        <!-- kapus -->
        <div class="row">
          <div class="col-xs-8">
            <b>Kepala Pusat</b>
          </div>
          <div class="col-xs-4 text-right">
            <?php if ($sipu_acc_kapus==''): ?>
              <!-- <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span> -->
              <form class="" action="" method="post">
                <input type="hidden" name="id" value="">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i> Setujui
                </button>
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-times"></i> Tolak
                </button>
              </form>
            <?php else: ?>
              <span class="label label-success"> <i class="fa fa-check"></i> <?php echo $sipu_acc_kapus ?> pada <?php echo $sipu_tgl_acc_kapus ?></span>
            <?php endif; ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-3">
                Instruksi
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_kapus=''): ?>
                  <span class="label label-warning">Menunggu Kepala Pusat</span>
                <?php else: ?>
                  <?php echo $sipu_ket_kapus ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
          </div>
        </div>
        <!-- /kapus -->
        <br>
        <hr>
        <!-- pelaksana -->
        <div class="row">
          <div class="col-xs-8">
            <b>Pelaksanaan Pemesanan/Pembelian</b>
          </div>
          <div class="col-xs-4 text-right">
            <?php if ($sipu_acc_keuangan==''): ?>
              <!-- <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span> -->
              <form class="" action="" method="post">
                <input type="hidden" name="id" value="">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check"></i> Setujui
                </button>
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-times"></i> Tolak
                </button>
              </form>
            <?php else: ?>
              <span class="label label-success"> <i class="fa fa-check"></i> <?php echo $sipu_acc_perkap ?></span>
            <?php endif; ?>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-3">
                Dipesan Tanggal
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_perkap=''): ?>
                  <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
                <?php else: ?>
                  <?php echo $sipu_tgl_pesan ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                Diterima Tanggal
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_perkap): ?>
                  <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
                <?php else: ?>
                  <?php echo $sipu_tgl_terima ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                Keterangan
              </div>
              <div class="col-xs-9">
                <?php if ($sipu_acc_perkap=''): ?>
                  <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
                <?php else: ?>
                  <?php echo $sipu_ket_perkap ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xs-4">
          </div>
        </div>
        <br>
        <hr>
        <!-- /pelaksana -->

      </div>
    </div>
  </div>
</div>
