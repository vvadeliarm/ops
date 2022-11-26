<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Layanan SKM</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: #151965">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages |||||||||||||||||||||||| Masih Bingung-->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts |||||||||||||||||| Tanda Masih Bingung-->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">Alerts Center</h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $akun['nama']; ?></span>
                            <img class="img-profile rounded-circle" src="/img/undraw_profile.svg" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-item">
                                <p><?= $akun['nim']; ?></p>
                                <p><?= $akun['kelas']; ?></p>
                            </div>
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a> -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Slider -->
            <section>
                <div class="row text-center mb-5">
                    <div class="col">
                        <h1 style="color: white ; text-align: center;"> LAYANAN SKM</h1>
                        <p style="color: white; text-align: center;">
                            Surat Keterangan Mahasiswa (SKM) merupakan salah satu jenis layanan kemahasiswaan yang dapat diakses mahasiswa yang bertujuan untuk legalitas dokumen dan kegiatan sesuai administrasi Politeknik Statistika STIS
                        </p>
                        <svg id="tentang" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 10">
                            <path fill="#ffff" fill-opacity="1"></path>
                        </svg>
                    </div>
                </div>

            </section>

            <!-- Akhir Slider-->
            <section>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/MahasiswaTabel?/<?= $akun['nim']; ?>"><button class="btn btn-primary" type="button">+ Ajukan SKM</button></a>
                </div>
            </section>

            <div class="container" style="background-color:white; color: black ;">
                <div class="row text-center mb-5">
                    <div class="col">
                        <h3>Daftar SKM </h3>
                        <?php if (session()->getFlashdata("pesan")) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata("pesan") ?>
                            </div>
                        <?php endif; ?>

                        <table class="table table-striped" style="color: black ;">


                            <thead>
                                <tr>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Tanggal dibuat</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td colspan="4">
                                        <?php if ($pengajuan == NULL) { ?>
                                            Belum Ada Pengajuan
                                        <?php }; ?>
                                    </td>
                                </tr>

                                <?php foreach ($pengajuan as $p) : ?>
                                    <tr>
                                        <td scope="row">SKM<?= sprintf("%03d", $p['idpengajuan']); ?></td>
                                        <td><?= $p['tanggalpengajuan']; ?></td>
                                        <td><?= $p['statusskm']; ?></td>
                                        <?php
                                        if ($p['statusskm'] == "Disetujui") { ?>
                                            <td><a href="/PengajuanTabel/<?= $p['idpengajuan']; ?>"><button type=" button" class="btn btn-success" data-toggle="modal" data-target="#disetujuiModal">Download</button></a></td>
                                        <?php } elseif ($p['statusskm'] == "Ditolak") { ?>
                                            <td><a href="/PengajuanTabel/<?= $p['idpengajuan']; ?>"><button type=" button" class="btn btn-danger" data-toggle="modal" data-target="#ditolakModal">Lihat alasan</button></a></td>
                                        <?php } elseif ($p['statusskm'] == "Ditangguhkan") { ?>
                                            <td><a href="/PengajuanTabel/<?= $p['idpengajuan']; ?>"><button type=" button" class="btn btn-warning">Perbaiki</button></a></td>
                                        <?php } else { ?>
                                            <td></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach; ?>
                                <!-- <tr>
                                        <td scope="row">SKM0002</td>
                                        <td>07 November 2021</td>
                                        <td>Ditolak</td>
                                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ditolakModal">Lihat alasan</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">SKM0003</td>
                                        <td>01 Desember 2022</td>
                                        <td>Ditangguhkan</td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ditangguhkanModal">Perbaiki</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">SKM0004</td>
                                        <td>23 Januari 2023</td>
                                        <td>Diajukan</td>
                                        <td></td>
                                    </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </section>
            <!-- Akhir tabel -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; OPS BAAK 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/pages/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
</body>

</html>