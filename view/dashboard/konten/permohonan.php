<div class="modal fade" id="edit_permohonan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">

          <input type="hidden" name="permohonan_id_permohonan" id="permohonan_id_permohonan">
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Judul Permohonan</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="permohonan_detail" name="permohonan_detail" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Sub Output</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="permohonan_no_sub_output" name="permohonan_no_sub_output" placeholder="">
            </div>
          </div>


          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Komponen</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="permohonan_no_komponen" name="permohonan_no_komponen" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Akun</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control"  name="permohonan_no_akun_dana_dipa" id="permohonan_no_akun_dana_dipa" placeholder="">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="update_permohonan">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Daftar Permohonan Pengadaan</h3>
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

        <?php for ($i=0; $i < $permohonan_banyakData; $i++) { ?>
        <!-- item SIPU -->
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-xs-8">
                <div class="row">
                  <div class="col-md-12">
                    <b style="font-size:18pt">
                      <?php echo $permohonan_detail[$i] ?>
                    </b>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-xs-6">
                        <b>
                          Sub Output
                        </b>
                      </div>
                      <div class="col-xs-6">
                        <?php echo $permohonan_no_sub_output[$i] ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <b>
                          Komponen
                        </b>
                      </div>
                      <div class="col-xs-6">
                        <?php echo $permohonan_no_komponen[$i] ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <b>
                          Akun
                        </b>
                      </div>
                      <div class="col-xs-6">
                        <?php echo $permohonan_no_akun_dana_dipa[$i] ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-xs-3">
                        <b>
                          Pemohon
                        </b>
                      </div>
                      <div class="col-xs-9">
                        <?php echo $permohonan_akun_nama_lengkap[$i] ?> (<?php echo $permohonan_sipu_unit[$i] ?>)
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3">
                        <b>
                          Tanggal
                        </b>
                      </div>
                      <div class="col-xs-9">
                        <?php echo $permohonan_sipu_tgl_pengajuan[$i] ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-3">
                        <b>
                          Status
                        </b>
                      </div>
                      <div class="col-xs-9">
                        <?php if ($permohonan_sipu_status[$i]=="selesai"): ?>
                          <span class="label label-success"><?php echo $permohonan_sipu_status[$i] ?></span>
                        <?php else: ?>
                          <span class="label label-warning"><?php echo $permohonan_sipu_status[$i] ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-4 text-right">
                <a href="?halaman=permohonan_detail&id_permohonan=<?php echo $permohonan_id_permohonan[$i] ?>&id_sipu=<?php echo $permohonan_id_sipu[$i] ?>&spk_id_spk=<?php echo $permohonan_id_spk[$i] ?>" class="btn btn-default ">
                  <i class="fa fa-list"></i> Detail
                </a>
                <!-- <a href="?halaman=edit_permohonan" class="btn btn-warning">
                  <i class="fa fa-edit"></i> Ubah/Revisi
                </a> -->
                <button type="button" class="btn btn-warning" onclick="editPermohonan('<?php echo $permohonan_id_permohonan[$i] ?>')">
                  <i class="fa fa-edit"></i> Ubah
                </button>
                <button type="button" class="btn btn-danger ">
                  <i class="fa fa-trash-o"></i> Hapus
                </button>
              </div>
            </div>
            <hr>
          </div>
        </div>
        <!-- / item SIPU -->
        <?php } ?>

      </div>
    </div>
  </div>
</div>
