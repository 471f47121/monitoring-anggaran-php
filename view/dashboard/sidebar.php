<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="images/boxed-bg.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $_SESSION['nama_lengkap'] ?></p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <!-- <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form> -->
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active" id="dashboard"><a href="dashboard"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
    <li id="pagu"><a href="?halaman=pagu"><i class="fa fa-bar-chart-o"></i> <span>Anggaran</span></a></li>
    <li id="permohonan"><a href="?halaman=permohonan"><i class="fa fa-plus-square-o"></i> <span>Permohonan</span></a></li>
    <li id="sipu"><a href="?halaman=sipu"><i class="fa fa-file-text-o"></i> <span>SIPU</span></a></li>
    <li id="spk"><a href="?halaman=spk"><i class="fa fa-handshake-o"></i> <span>SPK</span></a></li>
    <li id="penyedia"><a href="?halaman=penyedia"><i class="fa fa-building-o"></i> <span>Penyedia</span></a></li>
    <li id="akun"><a href="?halaman=akun"><i class="fa fa-users"></i> <span>Akun</span></a></li>

    <!-- <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li> -->

  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
