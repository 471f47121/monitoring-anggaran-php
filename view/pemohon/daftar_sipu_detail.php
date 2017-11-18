<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Formulir Permohonan Pengadaan Barang/Bahan</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 kartu melayang">
    <div class="row">
      <div class="col-xs-8">
        <div class="row">
          <div class="col-xs-3">
            Nomor
          </div>
          <div class="col-xs-9">
            <b>SOP 017.4.00.01/PL.00/TRR.3.01.04/2015</b> </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Unit Eselon III
          </div>
          <div class="col-xs-9">
            Bidang Teknologi Radiofarmaka
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Tanggal
          </div>
          <div class="col-xs-9">
            17/08/2015
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Status
          </div>
          <div class="col-xs-9">
            <span class="label label-warning">Menunggu MAK</span>
          </div>
        </div>
      </div>
      <div class="col-xs-4 text-right">
        <a href="?halaman=edit_sipu" class="btn btn-warning">
          <i class="fa fa-edit"></i> Ubah/Revisi
        </a>
        <a href="?halaman=daftar_sipu" class="btn btn-default">
          <i class="fa fa-chevron-circle-right"></i> Kembali
        </a>
      </div>
    </div>
    <br>
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
          <?php for ($i=0; $i < 5; $i++) { ?>
          <tr>
            <td>
              <?php echo $i+1 ?>
            </td>
            <td>
              barang-<?php echo $i+1 ?>
            </td>
            <td>
              Lorem ipsum dolor sit amet, consectetur adipisicing
            </td>
            <td>
              <?php echo $i+2 ?>
            </td>
            <td>
              <?php echo ($i+1)*100000 ?>
            </td>
            <td>
              <?php echo ($i+2)*(($i+1)*100000) ?>
            </td>
            <td>
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <br>
    <!-- subag keuangan -->
    <div class="row">
      <div class="col-xs-8">
        <b>Sub Bagian Keuangan</b>
      </div>
      <div class="col-xs-4 text-right">
        <?php if (true): ?>
          <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span>
        <?php else: ?>
          <?php if (true): ?>
            <span class="label label-success"> <i class="fa fa-check"></i> disetujui pada 17/08/2015</span>
          <?php else: ?>
            <span class="label label-danger"> <i class="fa fa-times"></i> dikembalikan pada 17/08/2015</span>
          <?php endif; ?>
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
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
            <?php else: ?>
              3441.006.008.011.521.811
            <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Persediaan Dana
          </div>
          <div class="col-xs-9">
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
            <?php else: ?>
              <b>Rp</b> 66690870
            <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Keterangan
          </div>
          <div class="col-xs-9">
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Sub Bagian Keuangan</span>
            <?php else: ?>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
        <?php if (true): ?>
          <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span>
        <?php else: ?>
          <?php if (true): ?>
            <span class="label label-success"> <i class="fa fa-check"></i> disetujui pada 17/08/2015</span>
          <?php else: ?>
            <span class="label label-danger"> <i class="fa fa-times"></i> ditolak pada 17/08/2015</span>
          <?php endif; ?>
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
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Pejabat Pembuat Komitmen</span>
            <?php else: ?>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
        <?php if (true): ?>
          <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span>
        <?php else: ?>
          <?php if (true): ?>
            <span class="label label-success"> <i class="fa fa-check"></i> disetujui pada 17/08/2015</span>
          <?php else: ?>
            <span class="label label-danger"> <i class="fa fa-times"></i> ditolak pada 17/08/2015</span>
          <?php endif; ?>
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
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Kepala Pusat</span>
            <?php else: ?>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
        <br>
        (Kepala Sub Bagian Perlengkapan)
      </div>
      <div class="col-xs-4 text-right">
        <?php if (true): ?>
          <span class="label label-warning"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</span>
        <?php else: ?>
          <?php if (true): ?>
            <span class="label label-success"> <i class="fa fa-check"></i> disetujui pada 17/08/2015</span>
          <?php else: ?>
            <span class="label label-danger"> <i class="fa fa-times"></i> ditolak pada 17/08/2015</span>
          <?php endif; ?>
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
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
            <?php else: ?>
              30/06/2017
            <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Diterima Tanggal
          </div>
          <div class="col-xs-9">
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
            <?php else: ?>
              17/08/2017
            <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Keterangan
          </div>
          <div class="col-xs-9">
            <?php if (true): ?>
              <span class="label label-warning">Menunggu Kepala Sub Bagian Perlengkapan</span>
            <?php else: ?>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-xs-4">
      </div>
    </div>
    <!-- /pelaksana -->
    <br>
    <hr>

  </div>
</div>
