<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Monitoring Anggaran PTRR BATAN</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/sweetalert.css" media="screen" title="no title">

    <link rel="stylesheet" href="../css/main.css" media="screen" title="no title">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- head -->
    <div class="head head-diagonal">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="../images/logoBATAN.png" alt="" />
            <h1>FORMULIR PERMOHONAN PENGADAAN BARANG/JASA <br><small>SISTEM INFORMASI MONITORING ANGGARAN PTRR BATAN</small></h1>
          </div>
        </div>
      </div>
    </div>

    <!-- isi -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="form-group row">
            <div class="col-md-3">
              <label for="no_dipa">DANA DIPA NO: </label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="no_dipa" placeholder="Nomor Dana DIPA...">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <label for="no">NO: </label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="no" placeholder="Nomor...">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <label for="eselon_iii">UNIT ESELON III: </label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="eselon_iii" placeholder="Unit Eselon III...">
            </div>
          </div>
        </div>
      </div> <!-- /.row -->

      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="row">
            <div class="col-xs-6">
              <b>Data Permohonan Pengajuan Barang/Jasa</b>
            </div>
            <div class="col-xs-6 text-right">
              <button type="button" class="btn btn-primary">
                <i class="fa fa-plus-circle"></i> Tambah Barang
              </button>
            </div>
          </div>
          <br>
          <!-- <hr> -->
          <!-- tabel barang -->
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th rowspan="2">
                    No
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
                  <th colspan="2" class="text-center">
                    Estimasi Harga Satuan
                  </th>
                  <th rowspan="2">
                    Estimasi Harga Total
                  </th>
                  <th rowspan="2">
                    Keterangan
                  </th>
                  <th rowspan="2">
                    Tindakan
                  </th>
                </tr>
                <tr>
                  <th>
                    Sebelum PPN 10%
                  </th>
                  <th>
                    Sesudah PPN 10%
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i=0; $i < 10; $i++) { ?>
                  <tr>
                    <td>
                      <?php echo $i+1; ?>
                    </td>
                    <td>
                      barang ke-<?php echo $i+1; ?>
                    </td>
                    <td>
                      spesifikasi barang ke-<?php echo $i+1; ?>
                    </td>
                    <td>
                      10
                    </td>
                    <td>
                      Rp. 1000000,-
                    </td>
                    <td>
                      Rp. 1100000,-
                    </td>
                    <td>
                      Rp. 11000000,-
                    </td>
                    <td>
                      keterangan untuk barang ke-<?php echo $i+1; ?>
                    </td>
                    <td>
                      <div class="btn-group btn-group-xs btn-group-vertical">
                        <button type="button" class="btn btn-warning">
                          <i class="fa fa-edit"></i> edit
                        </button>
                        <button type="button" class="btn btn-danger">
                          <i class="fa fa-times"></i> hapus
                        </button>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div> <!-- /.table-responsive -->
          <div class="text-center">
            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div> <!-- /.row -->

      <!-- sub bag keuangan -->
      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="page-header text-center">
            <h4>Sub Bag Keuangan</h4>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <label for="beban_mak">BEBAN MAK: </label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="beban_mak" placeholder="Beban MAK...">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <label for="persediaan_dana">PERSEDIAAN DANA: </label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" id="persediaan_dana" placeholder="Persediaan Dana...">
            </div>
          </div>
        </div>
      </div>
      <!-- /sub bag keuangan -->

      <!-- PPK -->
      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="page-header text-center">
            <h4>Pejabat Pembuat Komitmen</h4>
          </div>

          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" id="persetujuan_ppk" class="btn btn-primary">
                <i class="fa fa-check"></i> Setujui
              </button>
            </span>
            <input type="text" class="form-control" placeholder="Instruksi...">

          </div> <!-- /.input-group-btn -->
        </div>
      </div>
      <!-- /PPK -->

      <!-- KEPALA PUSAT -->
      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="page-header text-center">
            <h4>Kepala Pusat</h4>
          </div>

          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" id="persetujuan_kapus" class="btn btn-primary">
                <i class="fa fa-check"></i> Setujui
              </button>
            </span>
            <input type="text" class="form-control" placeholder="Instruksi...">

          </div> <!-- /.input-group-btn -->
        </div>
      </div>
      <!-- /KEPALA PUSAT -->

      <!-- SUB BAG PERKAP -->
      <div class="row">
        <div class="col-md-12 kartu melayang">
          <div class="page-header text-center">
            <h4>Pelaksanaan Pemesanan/Pembelian</h4>
          </div>

          <div class="input-group">
            <span class="input-group-btn">
              <button type="button" id="persetujuan_ppk" class="btn btn-primary">
                <i class="fa fa-check"></i> Setujui
              </button>
            </span>
            <input type="text" class="form-control" placeholder="Instruksi...">

          </div> <!-- /.input-group-btn -->
        </div>
      </div>
      <!-- /SUB BAG PERKAP -->
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
  </body>
</html>
