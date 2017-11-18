<style media="screen">
i.fa.fa-user-circle {
  font-size: 80pt;
}
</style>
<div class="row">
  <div class="col-sm-4 col-sm-push-4 col-xs-6 col-xs-push-3 text-center">
    <!-- <img src="images/profile/default.jpg" alt="" class="img-circle img-responsive text-center"/> -->
    <div class="text-primary">
      <i class="fa fa-user-circle"></i>
    </div>
    <br>
  </div>
</div>
<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="row form-group">
    <div class="col-xs-3 text-right">
      <label>Foto Profil</label>
    </div>
    <div class="col-xs-9">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-camera"></i></span>
        <input type="file" class="form-control" name="foto">
        <!-- <input type="file" class="form-control" placeholder="Gambar" name="gambar" > -->
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-xs-4 text-right">
      <div class="pagination">
        <a href="./" class="btn btn-danger">
          <i class="fa fa-times"></i> Batal
        </a>
      </div>
    </div>
    <div class="col-xs-4 text-center">
      <ul class="pagination">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <!-- <li><a href="#">3</a></li> -->
      </ul>
    </div>
    <div class="col-xs-4">
      <div class="pagination">
        <button type="submit" class="btn btn-primary" name="upload_foto_akun">
          <i class="fa fa-check"></i> Selesai
        </button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <a class="btn btn-link" href="./"><i class="fa fa-chevron-circle-right"></i> Lewati</a>       
    </div>
  </div>
</form>
