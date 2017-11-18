<?php include 'backend/controller_akun.php'; ?>
<div class="modal fade" id="edit_akun" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=""></h4>
      </div>
      <form class="" action="" method="post">
        <div class="modal-body">

          <input type="hidden" name="user_id_user" id="user_id_user">
          <div class="form-group row">
            <div class="col-md-4">
              <label for="">NIP</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="user_nip" name="user_nip" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Nama Lengkap</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="user_nama_lengkap" name="user_nama_lengkap" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Username</label>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="user_username" name="user_username" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-4">
              <label for="">Hak Akses</label>
            </div>
            <div class="col-md-8">
              <!-- <input type="text" class="form-control" id="user_hak_akes" name="user_hak_akes" placeholder=""> -->
              <select class="form-control" id="user_hak_akes" name="user_hak_akes">
                <option value="admin">Admin</option>
                <option value="keuangan">Keuangan</option>
                <option value="ppk">ppk</option>
                <option value="kapus">Kepala Pusat</option>
                <option value="perkap">Perkap</option>
                <option value="pemohon">Pemohon</option>
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="update_akun">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Tabel Akun</h3>
        <div class="box-tools pull-right">
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
                    NIP
                  </th>
                  <th class="text-center">
                    Nama Lengkap
                  </th>
                  <th class="text-center">
                    Username
                  </th>
                  <th class="text-center">
                    Hak Akses
                  </th>
                  <th class="text-center">
                    Tindakan
                  </th>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < $user_banyakData; $i++) { ?>
                    <tr>
                      <td>
                        <?php echo $i+1 ?>
                      </td>
                      <td>
                        <?php echo $user_nip[$i] ?>
                      </td>
                      <td>
                        <?php echo $user_nama_lengkap[$i] ?>
                      </td>
                      <td>
                        <?php echo $user_username[$i] ?>
                      </td>
                      <td>
                        <?php echo $user_hak_akes[$i] ?>
                      </td>
                      <td>
                        <form class="" action="" method="post">
                          <div class="btn-group btn-group-vertical btn-group-sm">
                            <button type="button" class="btn btn-warning" onclick="editUser('<?php echo $user_id_user[$i] ?>')">
                              <i class="fa fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deleteakun('<?php echo $user_id_user[$i] ?>')">
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
