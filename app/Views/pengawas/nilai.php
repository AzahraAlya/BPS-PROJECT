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
                <div class="card mt-3">
                    <div class="card-header">
                        Form Edit Data Anggota
                    </div>
                    <div class="card-body">
                    <form action="/pengawas/store-nilai" method="POST">  
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Kode Mitra</label>
                                <input type="text" class="form-control" id= "Kode_Mitra" name = "Kode_Mitra" autofocus value="<?= $pencacah['Kode_Mitra']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Penilai</label>
                                <input type="text" class="form-control" id= "nama_penilai" name = "nama_penilai">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Kegiatan</label>
                                
                                <select name="id_kegiatan" class="form-control" required>
                                    <option value="">-Pilih Kegiatan-</option>
                                    <?php
                                        foreach($kegiatan as $data){?>
                                            <option value="<?= $data['id_kegiatan'];?>"><?= $data['nama_kegiatan'];?></option>   
                                        <?php }?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Volume Beban Kerja</label>
                                <input type="text" class="form-control" id= "beban_kerja" name = "beban_kerja">    
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Status Keberadaan dan Partisipasi Mitra</label>
                                    <select name="JENIS_KELAMIN" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                            </div>
                            <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                        </form>
                    </div>
                </div>

                <?= $this->endSection(); ?>