<div class="modal fade" id="edit_pagu" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">ubah data</h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">
          <!-- form edit pagu -->

          <input type="hidden" name="pagu_id_pagu" id="pagu_id_pagu">
          <input type="hidden" name="pagu_id_permohonan" id="pagu_id_permohonan">
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Sub Output</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="pagu_permohonan_no_sub_output" name="pagu_permohonan_no_sub_output" placeholder="">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Komponen</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="pagu_permohonan_no_komponen" name="pagu_permohonan_no_komponen" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Akun</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="pagu_permohonan_akun_dana_dipa" name="pagu_permohonan_akun_dana_dipa" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Detail</label>
            </div>
            <div class="col-md-8">
              <textarea id="pagu_permohonan_detail" name="pagu_permohonan_detail" rows="8" cols="40" class="form-control"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Pagu</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" placeholder="" id="pagu_pagu" name="pagu_pagu">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Terikat</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" placeholder="" id="pagu_terikat" name="pagu_terikat">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Realisasi</label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" class="form-control" placeholder="" id="pagu_realisasi" name="pagu_realisasi">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="update_pagu_permohonan">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Tabel PAGU</h3>
        <div class="box-tools pull-right">
          <a href="view/cetak/cetak_pagu" class="btn btn-default btn-sm btn-box-tool" target="_blank">
            <i class="fa fa-print"></i> cetak
          </a>
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
                  <th class="text-center">
                    Tindakan
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
                      <td>
                        <form class="" action="" method="post">
                          <div class="btn-group btn-group-vertical btn-group-sm">
                            <!-- ?halaman=permohonan_detail&id_permohonan=1&id_sipu=1 -->
                            <?php $_GET['id_permohonan']=$pagu_id_pagu[$i] ?>
                            <?php include 'backend/model_permohonan_select_by_id_permohonan.php'; ?>
                            <a href="?halaman=permohonan_detail&id_permohonan=<?php echo $pagu_id_pagu[$i] ?>&id_sipu=<?php echo $pagu_permohonan_id_sipu[$i] ?>&spk_id_spk=<?php echo $pagu_id_pagu[$i] ?>" class="btn btn-default">
                              <i class="fa fa-list"></i> Detail
                            </a>
                            <button type="button" class="btn btn-warning" onclick="editPagu('<?php echo $pagu_id_pagu[$i] ?>')">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deletePagu('<?php echo $pagu_id_pagu[$i] ?>')">
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
