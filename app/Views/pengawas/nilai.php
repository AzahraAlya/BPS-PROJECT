<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/startbootstrap/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/assets/startbootstrap/css/dboard.css" rel="stylesheet">

    <link href="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Perpustakaan<sup>xy</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pencacah</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="/pencacah">Edit Data</a>
                        <!-- <a class="collapse-item" href="/pencacah/tambah">Tambah Data</a> -->
                        <a class="collapse-item" href="/pencacah/home">Cari Data</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengawas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="/pengawas">List Pencacah</a>
                        
                        <a class="collapse-item" href="/pengawas/penilaian">Penilaian</a>
                        <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a> -->
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#adminUtilities" aria-expanded="true" aria-controls="adminUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin</span>
                </a>
                <div id="adminUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="/admin/print">Print to excel</a>
                        <a class="collapse-item" href="/admin/penilaian">Data Penilaian Mitra</a>
                        <a class="collapse-item" href="/admin/tambah-mitra">Tambah Data Mitra Baru</a>
                        <a class="collapse-item" href="/pengawas/tambah-kegiatan">Tambah Kegiatan</a>
                        <!-- <a class="collapse-item" href="/pengawas/tambah-kegiatan">Tambah Kegiatan</a> -->
                        <!-- <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a> -->
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggle (Topbar) -->


        </ul>
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
                                <label for="formGroupExampleInput" class="form-label">Status Keberadaan dan Partisipasi Mitra</label><br/>
                                <input type="radio" name="status" id="options" value="Aktif">Aktif<br/>
                                <input type="radio" name="status" id="options" value="Tidak Aktif">Tidak Aktif<br/>
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

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Apa saja kelebihan Mitra ini? </label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="que5" value="Disiplin" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Disiplin
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que5" value="Smart" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Smart
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que5" value="Teliti" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Teliti    
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que5" value="Sabar" id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        Sabar
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name = "que5" value="Tekun" id="defaultCheck5">
                                    <label class="form-check-label" for="defaultCheck5">
                                        Tekun
                                    </label>
                                    </div>
                                    <div class="mb-0">
                                    <label for="formGroupExampleInput2" class="form-label">Lainnya</label>
                                    <input type="text" class="form-control" name = "que5">    
                                    </div>
                                </label>
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
           
                            <button type="btn" class="btn btn-primary" name="btn-simpan">
                                <i class="fas fa-paper-plane"></i>Simpan</button>
                        </form>
                    </div>
                </div>

                            <!-- Bootstrap core JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
            <script src="/assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/assets/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/assets/startbootstrap/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/assets/startbootstrap/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="/assets/startbootstrap/js/demo/chart-area-demo.js"></script>
            <script src="/assets/startbootstrap/js/demo/chart-pie-demo.js"></script>

            <script src="/assets/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="/assets/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
           <script src="/assets/startbootstrap/js/demo/datatables-demo.js"></script>
        </div>
    </div>
    <script>
               $('input[name="status"]').on('change',function()
               {
                   $('input[name="que1"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que2"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que3"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que4"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que5"]').attr('disabled',this.value!="Aktif")
                   $('input[name="que6"]').attr('disabled',this.value!="Aktif")
                   $('input[name="catatan"]').attr('disabled',this.value!="Aktif")

               });
           </script>
</body>

</html>