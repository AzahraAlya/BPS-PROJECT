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

                <div class="card mt-3">
                    <div class="card-header">
                        Form Edit Data Anggota
                    </div>
                    <div class="card-body">
                    <form action="/pencacah/store" method="POST">  
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Kode Mitra</label>
                                <input type="text" class="form-control" id= "Kode_Mitra" name = "Kode_Mitra">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">No Kecamatan</label>
                                <input type="text" class="form-control" id= "noKecamatan" name = "noKecamatan">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nomor Peserta</label>
                                <input type="text" class="form-control" id= "NOMOR_PESERTA" name = "NOMOR_PESERTA">    
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">NIK</label>
                                <input type="text" class="form-control" id= "NIK" name = "NIK">    
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama</label>
                                <input type="text" class="form-control" id= "NAMA" name = "NAMA">    
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                    <select name="JENIS_KELAMIN" class="form-control" required>
                                        <option value="">-Pilih Jenis Kelamin-</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id= "TEMPAT_LAHIR" name = "TEMPAT_LAHIR">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id= "TANGGAL_LAHIR" name = "TANGGAL_LAHIR">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Pendidikan</label>
                                
                                    <select name="PENDIDIKAN" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="S1/S2">S1/S1</option>
                                        <option value="D1/D2">D1/D2</option>
                                        <option value="D3">D3</option>
                                        <option value="SLTA">SLTA</option>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Status Perkawinan</label>    
                                    <select name="STATUS_PERKAWINAN" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                    </select>
                            </div>

                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id= "PEKERJAAN" name = "PEKERJAAN">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Pengalaman Survei BPS</label>
                                <input type="text" class="form-control" id= "PENGALAMAN_SURVEI_BPS" name = "PENGALAMAN_SURVEI_BPS">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id= "ALAMAT" name = "ALAMAT">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Desa</label>
                                <input type="text" class="form-control" id= "DESA" name = "DESA">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id= "KECAMATAN" name = "KECAMATAN">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" id= "KABUPATEN" name = "KABUPATEN">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">No HP</label>
                                <input type="text" class="form-control" id= "NOMOR_HP" name = "NOMOR_HP">    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">No WA</label>
                                <input type="text" class="form-control" id= "NOMOR_WA" name = "NOMOR_WA">    
                                </div>

                            <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                        </form>
                    </div>
                </div>
<?= $this->endSection(); ?>                