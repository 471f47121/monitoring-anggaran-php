<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Daftar Permohonan <small></small></h1>
    </div>
  </div>
</div>

<?php if (false): ?>
<div class="row">
  <div class="col-md-12 kartu melayang">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h3>Belum ada SIPU ditambahkan, silahkan klik tombol "Tambah SIPU"</h3>
        <a href="?halaman=tambah_sipu" class="btn btn-success btn-lg"> <i class="fa fa-plus-circle"></i> Tambah SIPU</a>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
<?php for ($i=0; $i < $permohonan_banyakData; $i++) { ?>
<!-- daftar SIPU -->
<div class="row">
  <div class="col-md-12 kartu melayang">
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
          <div class="col-sm-6">
            <div class="row">
              <div class="col-xs-4">
                <b>
                  Sub Output
                </b>
              </div>
              <div class="col-xs-8">
                <?php echo $permohonan_no_sub_output[$i] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <b>
                  Komponen
                </b>
              </div>
              <div class="col-xs-8">
                <?php echo $permohonan_no_komponen[$i] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <b>
                  Akun
                </b>
              </div>
              <div class="col-xs-8">
                <?php echo $permohonan_no_akun_dana_dipa[$i] ?>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-xs-4">
                <b>
                  Tanggal
                </b>
              </div>
              <div class="col-xs-8">
                <?php echo $permohonan_sipu_tgl_pengajuan[$i] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <b>
                  Status
                </b>
              </div>
              <div class="col-xs-8">
                <span class="label label-default"><?php echo $permohonan_sipu_status[$i] ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-4 text-right">
        <a href="?halaman=daftar_permohonan_detail&id_permohonan=<?php echo $permohonan_id_permohonan[$i] ?>&id_sipu=<?php echo $permohonan_id_sipu[$i] ?>&spk_id_spk=<?php echo $permohonan_id_spk[$i] ?>" class="btn btn-default ">
          <i class="fa fa-list"></i> Detail
        </a>
        <!-- <a href="?halaman=edit_permohonan&id_permohonan=<?php echo $permohonan_id_permohonan[$i] ?>&id_sipu=<?php echo $permohonan_id_sipu[$i] ?>&spk_id_spk=<?php echo $permohonan_id_spk[$i] ?>" class="btn btn-warning">
          <i class="fa fa-edit"></i> Ubah/Revisi
        </a> -->
        <button type="button" class="btn btn-danger " onclick="deleteSipuPermohonan('<?php echo $permohonan_id_sipu[$i] ?>','<?php echo $permohonan_id_permohonan[$i] ?>')">
          <i class="fa fa-trash-o"></i> Hapus
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end daftar SIPU -->
<?php } ?>
<?php endif; ?>
