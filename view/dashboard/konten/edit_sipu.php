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
      <form class="" action="" method="post">
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
                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $sipu_no_sipu ?>" name="sipu_no_sipu">
                    <b></b>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    Tanggal
                  </div>
                  <div class="col-xs-9">
                    <input type="date" class="form-control" name="sipu_tgl_pengajuan" value="<?php echo $sipu_tgl_pengajuan ?>">
                  </div>
                </div>
                <!-- <div class="row">
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
      </div> -->
    </div>
    <div class="col-xs-4 text-right">

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
    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah_barang">
      <i class="fa fa-plus"></i> Tambah Barang
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
            <div class="btn-group btn-group-vertical btn-group-sm">
              <button type="button" class="btn btn-warning" onclick="editDetailSipu('<?php echo $detail_sipu_id_detail_sipu[$i] ?>')">
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger" onclick="deleteDetailSipuPengawas('<?php echo $detail_sipu_id_detail_sipu[$i] ?>','<?php echo $detail_sipu_id_sipu[$i] ?>')">
                <i class="fa fa-trash-o"></i> Hapus
              </button>
            </div>
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
      <!-- <input type="checkbox" name="name" value=""> -->
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-xs-8">
      <div class="row">
        <div class="col-xs-3">
          Setujui
        </div>
        <div class="col-xs-9">
          <input type="checkbox" name="sipu_acc_keuangan" value="acc" <?php if ($sipu_acc_keuangan=='acc'): ?> checked="" <?php endif; ?> >
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Beban MAK
          </div>
          <div class="col-xs-9">
            <input type="text" name="sipu_mak" value="<?php echo $sipu_mak ?>" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Persediaan Dana
          </div>
          <div class="col-xs-9">
            <div class="input-group">
              <span class="input-group-addon">Rp</span>
              <input type="text" class="form-control" placeholder="" value="<?php echo $sipu_dana ?>" name="sipu_dana">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Keterangan
          </div>
          <div class="col-xs-9">
            <textarea name="sipu_ket_keuangan" rows="8" cols="40" class="form-control">
              <?php echo $sipu_ket_keuangan ?>
            </textarea>
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
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-xs-8">
        <div class="row">
          <div class="col-xs-3">
            Setujui
          </div>
          <div class="col-xs-9">
            <input type="checkbox" name="sipu_acc_ppk" value="acc" <?php if ($sipu_acc_ppk=='acc'): ?> checked="" <?php endif; ?> >
            </div>
          </div>
        </div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-3">
              Instruksi
            </div>
            <div class="col-xs-9">
              <textarea name="sipu_ket_ppk" rows="8" cols="40" class="form-control"><?php echo $sipu_ket_ppk ?></textarea>
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
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-3">
              Setujui
            </div>
            <div class="col-xs-9">
              <input type="checkbox" name="sipu_acc_kapus" value="acc" <?php if ($sipu_acc_kapus=='acc'): ?> checked="" <?php endif; ?> >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
                Instruksi
              </div>
              <div class="col-xs-9">
                <textarea name="sipu_ket_kapus" rows="8" cols="40" class="form-control"><?php echo $sipu_ket_kapus ?></textarea>
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

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-8">
            <div class="row">
              <div class="col-xs-3">
                Setujui
              </div>
              <div class="col-xs-9">
                <input type="checkbox" name="sipu_acc_perkap" value="acc" <?php if ($sipu_acc_perkap=='acc'): ?> checked="" <?php endif; ?> >
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3">
                  Dipesan Tanggal
                </div>
                <div class="col-xs-9">
                  <input type="date" name="sipu_tgl_pesan" value="<?php echo $sipu_tgl_pesan ?>" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3">
                  Diterima Tanggal
                </div>
                <div class="col-xs-9">
                  <input type="date" name="sipu_tgl_terima" value="<?php echo $sipu_tgl_terima ?>" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3">
                  Keterangan
                </div>
                <div class="col-xs-9">
                  <textarea name="sipu_ket_perkap" rows="8" cols="40" class="form-control"><?php echo $sipu_ket_perkap ?></textarea>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
            </div>
          </div>
          <br>
          <hr>
          <!-- /pelaksana -->
          <div class="row">
            <div class="col-md-12 text-right">
              <a href="?halaman=sipu" class="btn btn-default">
                <i class="fa fa-times"></i> Batal
              </a>
              <button type="submit" class="btn btn-primary" name="update_sipu">
                <i class="fa fa-save"></i> Simpan
              </button>
            </div>
          </div>
        </div>
        <!-- /box body -->
      </form>
    </div>
  </div>
</div>
