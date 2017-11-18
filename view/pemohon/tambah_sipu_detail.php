<div class="modal fade" id="modal_tambah_barang" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Tambah Barang/Bahan</h4>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            <label>Nama Barang/Bahan</label>
          </div>
          <div class="col-xs-9">
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            <label>Spesifikasi</label>
          </div>
          <div class="col-xs-9">
            <textarea name="name" rows="8" cols="40" class="form-control"></textarea>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            Jumlah
          </div>
          <div class="col-xs-9">
            <input type="number" class="form-control" id="" placeholder="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            Harga Satuan
          </div>
          <div class="col-xs-9">
            <!-- <input type="number" class="form-control" id="" placeholder=""> -->
            <div class="input-group">
              <span class="input-group-addon">Rp </span>
              <input type="number" class="form-control" placeholder="">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            Harga Total
          </div>
          <div class="col-xs-9">
            <!-- <input type="number" class="form-control" id="" placeholder=""> -->
            <div class="input-group">
              <span class="input-group-addon">Rp </span>
              <input type="number" class="form-control" placeholder="">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-xs-3 text-right">
            <label>Keterangan</label>
          </div>
          <div class="col-xs-9">
            <textarea name="name" rows="8" cols="40" class="form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Barang</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
      </div>
    </div>
  </div>
</div>

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
      <div class="col-xs-10">
        <b>Tabel Barang/Bahan</b>
      </div>
      <div class="col-xs-2 text-right">
        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_tambah_barang">
          <i class="fa fa-plus-circle"></i> Tambah Barang
        </button>
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
            <th rowspan="2">
              Tindakan
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
            <td>
              <div class="btn-group-vertical btn-group-sm">
                <button type="button" class="btn btn-warning">
                  <i class="fa fa-edit"></i> Edit
                </button>
                <button type="button" class="btn btn-danger">
                  <i class="fa fa-times"></i> Hapus
                </button>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="row form-group">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-check"></i> Ajukan SIPU
        </button>
        <a href="pemohon" class="btn btn-danger">
          <i class="fa fa-times"></i> Batal
        </a>
      </div>
    </div>
  </div>
</div>
