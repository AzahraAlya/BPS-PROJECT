<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-1 rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline small text-capitalize">
                            Administrator
                        </span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/startbootstrap/img/avatar/user.png') ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a href="/logout" class="dropdown-item"  data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->

            </ul>

            </nav>
        <!-- End of Topbar -->

                <div class="container">
                <div align="center">

            <form action="/admin/store-kegiatan" method="post">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <b>Masukkan Nama Kegiatan Baru</b>
                    </div>
                    <div class="card-body">
                        <div align="left">
                            <a>Nama Kegiatan:</a>
                        </div>
                        <input type="text" class="form-control" id= "nama_kegiatan" name = "nama_kegiatan" required>
                        <br>
                        <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                    </div>
                </div>
            </form>
        </div>

                <?= $this->endSection(); ?>