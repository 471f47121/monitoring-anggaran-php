<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Daftar SIPU <small></small></h1>
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
<?php for ($i=0; $i < 5; $i++) { ?>
<!-- daftar SIPU -->
<div class="row">
  <div class="col-md-12 kartu melayang">
    <div class="row">
      <div class="col-xs-8">
        <div class="row">
          <div class="col-xs-3">
            Nomor
          </div>
          <div class="col-xs-9">
            <b>SOP 017.4.00.01/PL.00/TRR.3.01.04/2015</b> </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Tanggal
          </div>
          <div class="col-xs-9">
            17/08/2015
          </div>
        </div>
        <div class="row">
          <div class="col-xs-3">
            Status
          </div>
          <div class="col-xs-9">
            <span class="label label-warning">Menunggu MAK</span>
          </div>
        </div>
      </div>
      <div class="col-xs-4 text-right">
        <a href="?halaman=daftar_sipu_detail" class="btn btn-default ">
          <i class="fa fa-list"></i> Detail
        </a>
        <a href="?halaman=edit_sipu" class="btn btn-warning">
          <i class="fa fa-edit"></i> Ubah/Revisi
        </a>
        <button type="button" class="btn btn-danger ">
          <i class="fa fa-trash-o"></i> Hapus
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end daftar SIPU -->
<?php } ?>
<?php endif; ?>
