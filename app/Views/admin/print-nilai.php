
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- /.content-header -->
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Daftar Pencacah</h1>
                
                <!-- <a href="/buku/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <!-- DataTales Example -->
                <div class="card mt-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Pencacah</h6>
                        <a href="/admin/excel" class="btn btn-outline-danger shadow float-right">Excel<i class="fa fa-file-excel"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No Urut</th>
                                        <th scope="col">Kode Mitra</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No HP</th>                                        
                                        <th scope="col">Alamat</th> 
                                        <th scope="col">Nama Penilai</th>
                                        <th scope="col">Volume Beban Kerja</th>
                                        <th scope="col">Status Partisipasi Mitra</th>
                                        <th scope="col">Penguasaan Konsep</th>
                                        <th scope="col">Teknik Wawancara</th>
                                        <th scope="col">Ketepatan Waktu</th>
                                        <th scope="col">Respon Komunikasi</th>
                                        <th scope="col">Kelebihan</th>
                                        <th scope="col">Kekurangan</th>
                                        <th scope="col">Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($admin as $i => $adm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i + 1;?></th>
                                            <td><?= $adm->kode_mitra; ?></td>
                                            <td><?= $adm->nama; ?></td>
                                            <td><?= $adm->nik; ?></td>
                                            <td><?= $adm->no_hp; ?></td>
                                            <td><?= $adm->alamat; ?></td>
                                            <td><?= $adm->nama_penilai; ?></td>
                                            <td><?= $adm->beban_kerja; ?></td>
                                            <td><?= $adm->status; ?></td>
                                            <td><?= $adm->que1; ?></td>
                                            <td><?= $adm->que2; ?></td>
                                            <td><?= $adm->que3; ?></td>
                                            <td><?= $adm->que4; ?></td>
                                            <td><?= $adm->que5; ?></td>
                                            <td><?= $adm->que6; ?></td>
                                            <td><?= $adm->catatan; ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?= $this->endSection(); ?>