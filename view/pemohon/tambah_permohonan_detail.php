<!-- tambah detail sipu -->
<div class="modal fade" id="modal_tambah_barang" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Tambah Barang/Bahan</h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Nama Barang/Bahan</label>
            </div>
            <div class="col-xs-9">
              <input type="text" class="form-control" id="" placeholder="" name="detail_sipu_nama_barang">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Spesifikasi</label>
            </div>
            <div class="col-xs-9">
              <textarea name="detail_sipu_spesifikasi" rows="8" cols="40" class="form-control"></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              Jumlah
            </div>
            <div class="col-xs-9">
              <input type="number" class="form-control" id="detail_sipu_jumlah_tambah" placeholder="" name="detail_sipu_jumlah">
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
                <input type="number" class="form-control" placeholder="" name="detail_sipu_harga_satuan" id="detail_sipu_harga_satuan_tambah">
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
                <input type="number" class="form-control" placeholder="" id="detail_sipu_harga_total_tambah">
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Keterangan</label>
            </div>
            <div class="col-xs-9">
              <textarea name="detail_sipu_keterangan" rows="8" cols="40" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="insert_detail_sipu">
            <i class="fa fa-plus-circle"></i> Tambah Barang
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- edit detail sipu -->
<div class="modal fade" id="edit_detail_sipu" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Tambah Barang/Bahan</h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">
          <input type="hidden" name="detail_sipu_id_detail_sipu" value="" id="detail_sipu_id_detail_sipu">
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Nama Barang/Bahan</label>
            </div>
            <div class="col-xs-9">
              <input type="text" class="form-control" id="detail_sipu_nama_barang" placeholder="" name="detail_sipu_nama_barang">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Spesifikasi</label>
            </div>
            <div class="col-xs-9">
              <textarea name="detail_sipu_spesifikasi" rows="8" cols="40" class="form-control" id="detail_sipu_spesifikasi"></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              Jumlah
            </div>
            <div class="col-xs-9">
              <input type="number" class="form-control" id="detail_sipu_jumlah" placeholder="" name="detail_sipu_jumlah">
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
                <input type="number" class="form-control" placeholder="" name="detail_sipu_harga_satuan" id="detail_sipu_harga_satuan">
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
                <input type="number" class="form-control" placeholder="" id="detail_sipu_harga_total">
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-xs-3 text-right">
              <label>Keterangan</label>
            </div>
            <div class="col-xs-9">
              <textarea name="detail_sipu_keterangan" rows="8" cols="40" class="form-control" id="detail_sipu_keterangan"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="update_detail_sipu">
            <i class="fa fa-save"></i> Simpan
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Tambah Permohonan Pengadaan Barang/Bahan</h1>
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
            <td>
              <form class="" action="" method="post">
                <div class="btn-group btn-group-vertical btn-group-sm">
                  <button type="button" class="btn btn-warning" onclick="editDetailSipu('<?php echo $detail_sipu_id_detail_sipu[$i] ?>')">
                    <i class="fa fa-edit"></i> Edit
                  </button>
                  <button type="button" class="btn btn-danger" onclick="deleteDetailSipu('<?php echo $detail_sipu_id_detail_sipu[$i] ?>','<?php echo $detail_sipu_id_sipu[$i] ?>')">
                    <i class="fa fa-trash-o"></i> Hapus
                  </button>
                </div>
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="row form-group">
      <div class="col-md-12 text-center">
        <button type="button" class="btn btn-primary" onclick="selesai()">
          <i class="fa fa-check"></i> Selesai
        </button>
        <!-- <button type="button" class="btn btn-danger" onclick="deleteSipuPermohonan('<?php //echo $_GET['id_sipu'] ?>','')">
          <i class="fa fa-times"></i> Batal
        </button> -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function selesai() {
    swal({
      title: "Data Tersimpan",
      text: "",
      type: "success",
      confirmButtonText: "Selesai",
      closeOnConfirm: false
    },
    function(){
      window.location = "pemohon";
    });
  }
</script>
