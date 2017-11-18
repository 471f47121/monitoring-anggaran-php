<!-- tambah -->
<div class="modal fade" id="tambah_penyedia" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Nama Instansi</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_nama_instansi">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Alamat</label>
            </div>
            <div class="col-md-8">
              <textarea name="penyedia_alamat" rows="8" cols="40" class="form-control" name="penyedia_alamat"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Bank</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_bank">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">No Rekening</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_no_rekening">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">NPWP</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_npwp">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Penanggung Jawab</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_penanggung_jawab">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Jabatan Penanggung Jawab</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="" placeholder="" name="penyedia_jabatan_pj">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="insert_penyedia">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- edit -->
<div class="modal fade" id="edit_penyedia" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">

          <input type="hidden" name="penyedia_id_penyedia" id="penyedia_id_penyedia">

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Nama Instansi</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_nama_instansi" name="penyedia_nama_instansi" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Alamat</label>
            </div>
            <div class="col-md-8">
              <textarea id="penyedia_alamat" name="penyedia_alamat" rows="8" cols="40"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Bank</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_bank" name="penyedia_bank" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">No Rekening</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_no_rekening" name="penyedia_no_rekening" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">NPWP</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_npwp" name="penyedia_npwp" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Penanggung Jawab</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_penanggung_jawab" name="penyedia_penanggung_jawab" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Jabatan Penanggung Jawab</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="penyedia_jabatan_pj" name="penyedia_jabatan_pj" placeholder="">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="update_penyedia">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Tabel Penyedia</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_penyedia">
            <i class="fa fa-plus"></i> Tambah Data
          </button>
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
                    Nama Instansi
                  </th>
                  <th class="text-center">
                    Alamat
                  </th>
                  <th class="text-center">
                    Bank
                  </th>
                  <th class="text-center">
                    No Rekening
                  </th>
                  <th class="text-center">
                    NPWP
                  </th>
                  <th class="text-center">
                    Penanggung Jawab
                  </th>
                  <th class="text-center">
                    Jabatan
                  </th>
                  <th class="text-center">
                    Tindakan
                  </th>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < $penyedia_banyakData; $i++) { ?>
                    <tr>
                      <td>
                        <?php echo $i+1 ?>
                      </td>
                      <td>
                        <?php echo $penyedia_nama_instansi[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_alamat[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_bank[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_no_rekening[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_npwp[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_penanggung_jawab[$i] ?>
                      </td>
                      <td>
                        <?php echo $penyedia_jabatan_pj[$i] ?>
                      </td>
                      <td>
                        <form class="" action="" method="post">
                          <div class="btn-group btn-group-vertical btn-group-sm">
                            <button type="button" class="btn btn-warning" onclick="editPenyedia('<?php echo $penyedia_id_penyedia[$i]?>')">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deletepenyedia('<?php echo $penyedia_id_penyedia[$i]?>')">
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
