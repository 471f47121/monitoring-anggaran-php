<!-- tambah -->
<div class="modal fade" id="tambah_spk" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">File SPK</label>
            </div>
            <div class="col-md-8">
              <input type="file" class="form-control" id="" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">PPK</label>
            </div>
            <div class="col-md-8">
              <select class="form-control" name="spk_id_akun_ppk">
                <?php for ($i=0; $i < $user_banyakData; $i++) { ?>
                  <option value="<?php echo $user_id_user[$i] ?>"><?php echo $user_nama_lengkap[$i] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Penyedia</label>
            </div>
            <div class="col-md-8">
              <select class="form-control" name="">
                <?php for ($i=0; $i < $penyedia_banyakData; $i++) { ?>
                  <option value="<?php echo $penyedia_id_penyedia[$i] ?>"><?php echo $penyedia_nama_instansi[$i] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Harga</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" placeholder="">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Waktu (hari)</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <input type="number" class="form-control" placeholder="">
                <span class="input-group-addon">Hari</span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Tanggal SPK</label>
            </div>
            <div class="col-md-8">
              <input type="date" class="form-control" id="" placeholder="">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- edit -->
<div class="modal fade" id="edit_spk" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <input type="hidden" name="spk_id_spk" value="" id="spk_id_spk">

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">File SPK</label>
            </div>
            <div class="col-md-8">
              <input type="file" class="form-control" id="spk_file" name="spk_file" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">PPK</label>
            </div>
            <div class="col-md-8">
              <select class="form-control" id="spk_id_akun_ppk" name="spk_id_akun_ppk">
                <?php for ($i=0; $i < $user_banyakData; $i++) { ?>
                  <option value="<?php echo $user_id_user[$i] ?>"><?php echo $user_nama_lengkap[$i] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Penyedia</label>
            </div>
            <div class="col-md-8">
              <select class="form-control" id="spk_id_penyedia" name="spk_id_penyedia">
                <?php for ($i=0; $i < $penyedia_banyakData; $i++) { ?>
                  <option value="<?php echo $penyedia_id_penyedia[$i] ?>"><?php echo $penyedia_nama_instansi[$i] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Harga</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" placeholder="" id="spk_harga" name="spk_harga">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Waktu (hari)</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <input type="number" class="form-control" placeholder="" id="spk_waktu" name="spk_waktu">
                <span class="input-group-addon">Hari</span>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Tanggal SPK</label>
            </div>
            <div class="col-md-8">
              <input type="date" class="form-control" id="spk_tgl_spk" name="spk_tgl_spk" placeholder="">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="update_spk">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Tabel SPK</h3>
        <div class="box-tools pull-right">
          <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_spk">
            <i class="fa fa-plus"></i> Tambah Data
          </button> -->
          <button type="button" class="btn btn-default btn-sm btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead class="text-center">
                  <th class="text-center">
                    No
                  </th>
                  <th class="text-center">
                    File
                  </th>
                  <th class="text-center">
                    PPK
                  </th>
                  <th class="text-center">
                    Penyedia
                  </th>
                  <th class="text-center">
                    Harga
                  </th>
                  <th class="text-center">
                    Waktu (Hari)
                  </th>
                  <th class="text-center">
                    Tanggal
                  </th>
                  <th class="text-center">
                    Tindakan
                  </th>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < $spk_banyakData; $i++) { ?>
                    <tr>
                      <td>
                        <?php echo $i+1 ?>
                      </td>
                      <td>
                        <a type="button" class="btn btn-default" href="file/<?php echo $spk_file[$i] ?>" target="_blank">
                          <i class="fa fa-download"></i>
                        </a>
                      </td>
                      <td>
                        <?php echo $spk_akun_nama_lengkap[$i] ?>
                      </td>
                      <td>
                        <?php echo $spk_penyedia_nama_instansi[$i] ?>
                      </td>
                      <td>
                        <?php echo $spk_harga[$i] ?>
                      </td>
                      <td>
                        <?php echo $spk_waktu[$i] ?>
                      </td>
                      <td>
                        <?php echo $spk_tgl_spk[$i] ?>
                      </td>
                      <td>
                        <form class="" action="" method="post">
                          <div class="btn-group btn-group-vertical btn-group-sm">
                            <button type="button" class="btn btn-warning" onclick="editSpk('<?php echo $spk_id_spk[$i] ?>')">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deleteSpk('<?php echo $spk_id_spk[$i] ?>')">
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
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-push-4">
            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <?php for ($i=0; $i < 3; $i++) { ?>
              <li><a href="#"><?php echo $i+1 ?></a></li>
              <?php } ?>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
