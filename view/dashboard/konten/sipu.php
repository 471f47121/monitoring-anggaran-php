<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Daftar SIPU</h3>
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

        <?php for ($i=0; $i < $sipu_banyakData; $i++) { ?>
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
                    <b><?php echo $sipu_no_sipu[$i] ?></b> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    Tanggal
                  </div>
                  <div class="col-xs-9">
                    <?php echo $sipu_tgl_pengajuan[$i] ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    Status
                  </div>
                  <div class="col-xs-9">
                    <?php if ($sipu_status[$i]=="selesai"): ?>
                      <span class="label label-success"><?php echo $sipu_status[$i] ?></span>
                    <?php else: ?>
                      <span class="label label-warning"><?php echo $sipu_status[$i] ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-xs-4 text-right">
                <a class="btn btn-default" href="?halaman=sipu_detail&id_sipu=<?php echo $sipu_id_sipu[$i] ?>">
                  <i class="fa fa-list"></i> Detail
                </a>
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
