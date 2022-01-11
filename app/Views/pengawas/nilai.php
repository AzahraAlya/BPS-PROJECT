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
                                <input type="text" class="form-control" id= "kode_mitra" name = "kode_mitra" autofocus value="<?= $pencacah['Kode_Mitra']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Penilai</label>
                                <input type="text" class="form-control" id= "nama_penilai" name = "nama_penilai">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama Kegiatan</label>
                                
                                <select name="nama_kegiatan" class="form-control" required>
                                    <option value="">-Pilih Kegiatan-</option>
                                    <?php
                                        foreach($kegiatan as $data){?>
                                            <option value="<?= $data['nama_kegiatan'];?>"><?= $data['nama_kegiatan'];?></option>   
                                        <?php }?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Volume Beban Kerja</label>
                                <input type="text" class="form-control" id= "beban_kerja" name = "beban_kerja">    
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Status Keberadaan dan Partisipasi Mitra</label>
                                    <select name="status" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                            </div>

                            <!-- Halaman Berikutnya -->

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana penguasaan konsep dan definisi Mitra ketika melaksanakan kegiatan pencacahan di lapangan?</label></br>
                                <input type="radio" name="que1" id="options" value="1"> 1<br/>
                                <input type="radio" name="que1" id="options" value="2"> 2<br/>
                                <input type="radio" name="que1" id="options" value="3"> 3<br/>
                                <input type="radio" name="que1" id="options" value="4"> 4<br/>
                                <input type="radio" name="que1" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Bagaimana teknik wawancara yang dilakukan Mitra, jika dilihat dari segi probing (mencari jawaban dengan pertanyaan lain yang berkaitan/mendekati)?</label>
                                <input type="radio" name="que2" id="options" value="1"> 1<br/>
                                <input type="radio" name="que2" id="options" value="2"> 2<br/>
                                <input type="radio" name="que2" id="options" value="3"> 3<br/>
                                <input type="radio" name="que2" id="options" value="4"> 4<br/>
                                <input type="radio" name="que2" id="options" value="5"> 5    
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat ketepatan waktu Mitra dalam menyelesaikan tugas/target yang diberikan?</label></br>
                                <input type="radio" name="que3" id="options" value="1"> 1<br/>
                                <input type="radio" name="que3" id="options" value="2"> 2<br/>
                                <input type="radio" name="que3" id="options" value="3"> 3<br/>
                                <input type="radio" name="que3" id="options" value="4"> 4<br/>
                                <input type="radio" name="que3" id="options" value="5"> 5
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tingkat respon komunikasi yang dilakukan bersama Mitra ketika dihubungi/dibutuhkan?</label></br>
                                <input type="radio" name="que4" id="options" value="1"> 1<br/>
                                <input type="radio" name="que4" id="options" value="2"> 2<br/>
                                <input type="radio" name="que4" id="options" value="3"> 3<br/>
                                <input type="radio" name="que4" id="options" value="4"> 4<br/>
                                <input type="radio" name="que4" id="options" value="5"> 5
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="ques5" class="form-label">Apa saja kelebihan Mitra ini?</label>
                                </div>    
                                <div class="col-75" style="margin-top: 25px;">
                                    <input class="form-check-input" type="checkbox" name="que5[]" value="Disiplin">Disiplin <br>
                                    <input class="form-check-input" type="checkbox" name="que5[]" value="Tekun">Tekun<br>
                                    <input class="form-check-input" type="checkbox" name="que5[]" value="Smart">Smart<br>
                                    <input class="form-check-input" type="checkbox" name="que5[]" value="Sabar">Sabar<br>
                                
                                    <div class="form">
                                    <label for="formGroupExampleInput2" class="form-label">Lainnya</label>
                                    <input type="text" class="form-control" name = "que5">    
                                    </div>
                                </div>    
                            </div>
                             
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apa saja kekurangan Mitra ini? </label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="que6" value="Tidak Punya Kendaraan" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tidak Punya Kendaraan
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que6" value="Malas" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Malas
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que6" value="Lambat berhitung " id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Lambat berhitung     
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que6" value="Ceroboh" id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        Ceroboh
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que6" value="Sulit Bergaul" id="defaultCheck5">
                                    <label class="form-check-label" for="defaultCheck5">
                                        Sulit Bergaul
                                    </label>
                                    </div>
                                    <div class="mb-0">
                                    <label for="formGroupExampleInput2" class="form-label">Lainnya</label>
                                    <input type="text" class="form-control" name = "que6">    
                                    </div>
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Catatan</label>
                                <input type="text" class="form-control"  name = "catatan">
                            </div>


                                            
                            <button type="btn" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                        </form>
                    </div>
                </div>

                <?= $this->endSection(); ?>