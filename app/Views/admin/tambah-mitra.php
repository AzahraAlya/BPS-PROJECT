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
                        Tambah Data Mitra Baru
                    </div>
                    <div class="card-body">
                    <form action="/admin/store" method="POST">  
                        <div class="card-body">

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Kode Mitra</label>
                            <input type="text" class="form-control" id= "Kode_Mitra" name = "Kode_Mitra"  value="<?php echo $id_mitra?>" readonly>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Nomor Kecamatan</label>
                            <select name="noKecamatan" class="form-control" required>
                                    <option value="">-Pilih Kecamatan-</option>
                                    <?php
                                        foreach($kecamatan as $data){?>
                                            <option value="<?= $data['kode_kcm'];?>"><?= $data['nama_kcm'];?></option>   
                                        <?php }?>
                                </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Nomor Peserta</label>
                            <input type="text" class="form-control" id= "NOMOR_PESERTA" name = "NOMOR_PESERTA" required>  
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">NIK</label>
                                <input type="text" class="form-control" id= "NIK" name = "NIK" required>    
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Nama</label>
                                <input type="text" class="form-control" id= "NAMA" name = "NAMA" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>    
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Jenis Kelamin</label>
                                    <select name="JENIS_KELAMIN" class="form-control" required>
                                        <option value="">-Pilih Jenis Kelamin-</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div> 
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Tempat Lahir</label>
                                <input type="text" class="form-control" id= "TEMPAT_LAHIR" name = "TEMPAT_LAHIR" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div> 
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Tanggal Lahir</label>
                                <input type="date" class="form-control" id= "TANGGAL_LAHIR" name = "TANGGAL_LAHIR" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Pendidikan</label>
                                
                                    <select name="PENDIDIKAN" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="D3">D3</option>
                                        <option value="D1/D2">D1/D2</option>
                                        <option value="SLTA">SLTA</option>
                                    </select>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Status Perkawinan</label>   
                                    <select name="STATUS_PERKAWINAN" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                    </select>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>

                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Pekerjaan</label>
                                <input type="text" class="form-control" id= "PEKERJAAN" name = "PEKERJAAN" required> 
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>   
                            </div>
                        
                        </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Pengalaman Survei BPS</label>
                                <input type="text" class="form-control" id= "PENGALAMAN_SURVEI_BPS" name = "PENGALAMAN_SURVEI_BPS" required>    
                                </div>
                                <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id= "ALAMAT" name = "ALAMAT" required>    
                                </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Desa</label>
                                <input type="text" class="form-control" id= "DESA" name = "DESA" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>     
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Kecamatan</label>
                                <input type="text" class="form-control" id= "KECAMATAN" name = "KECAMATAN" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>        
                            </div>
                            <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Kabupaten</label>
                                <input type="text" class="form-control" id= "KABUPATEN" name = "KABUPATEN" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>     
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Nomor Hp</label>
                                <input type="text" class="form-control" id= "NOMOR_HP" name = "NOMOR_HP" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>     
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Nomor WA</label>
                                <input type="text" class="form-control" id= "NOMOR_WA" name = "NOMOR_WA" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>     
                        </div>
                        </div>

                            <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                        </form>
                    </div>
                </div>
<?= $this->endSection(); ?>                