<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Input Data Kepala BAAK</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    hr {
      height: 1px;
      background-color: #ccc;
      border: none;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="bi bi-person-gear"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN BAAK </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/HomeStaffBaakTabel">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Nav Item - Layanan SKM -->
      <li class="nav-item">
        <a class="nav-link" href="/HomeStaffBaakTabel/layananSkm">
          <i class="fas fa-fw fa-folder"></i>
          <span>Layanan SKM</span></a>
      </li>

      <!-- Nav Item - Arsip SKM -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-folder"></i>
          <span>Arsip SKM</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HomeStaffBaakTabel/ttdKepala">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Tanda Tangan & Data</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: rgb(255, 255, 255); ">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $staff['nama']; ?></span>
                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                <div class="dropdown-item">
                  <p><?= $staff['nip']; ?></p>
                </div>

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


        <!-- Begin Page Content -->
        <!-- Awal form -->
        <!-- <section id="form" style="background-color: black;"> -->
        <form style="background-color: rgb(255, 255, 255); padding: 5mm;">
          <div class="container">

            <!-- Surat -->

            <div class="row mb-3" style="padding-top: 5mm;">
              <h5>Detail Surat</h5>
            </div>

            <hr>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Surat</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="B-<?= sprintf("%04d", $pengajuanDetail['idpengajuan']); ?>/02711/KM.<?= date('d/m/Y'); ?> " readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">File Surat</label>
              <div class="col-sm-10">
                <a href="/view-pdf/<?= $pengajuanDetail['idpengajuan']; ?>" target="_blank" rel="nofollow" title="dewa inside blog">
                  <i class="fas fa-fw fa-file"></i>
                  <span><?= $pengajuanDetail['namafile']; ?></span>
                  <i class="fas fa-fw fa-eye"></i>
                </a>
              </div>
            </div>

            <!-- Akhir Surat -->

            <!-- Kepala BAAK -->

            <div class="row mb-3" style="padding-top: 5mm;">
              <h5>Kepala BAAK</h5>
            </div>

            <hr>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">NIP</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['nipkbaak']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['namakbaak']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal ACC</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= date('j F Y', strtotime($pengajuanDetail['tanggalacckbaak'])); ?>" readonly>
              </div>
            </div>

            <!-- AKhir Kepala BAAK -->

            <!-- Staff -->

            <div class="row mb-3" style="padding-top: 5mm;">
              <h5>Staff BAAK</h5>
            </div>

            <hr>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">NIP</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['nipoperator']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['namaoperator']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal ACC</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= date('j F Y', strtotime($pengajuanDetail['tanggalcekoperator'])); ?>" readonly>
              </div>
            </div>


            <!-- AKhir Staff BAAK -->

            <!-- Mahasiswa -->

            <div class="row mb-3" style="padding-top: 5mm;">
              <h5>Mahasiswa</h5>
            </div>

            <hr>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['nim']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['nama']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['tempattanggallahir']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['kelas']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Prodi</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['prodi']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Diploma</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['diploma']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Semester</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['semester']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tahun Akademik</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['tahunakademik']; ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['status']; ?>" readonly>
              </div>
            </div>

            <!-- AKhir Mahasiswa -->

            <!-- Pengajuan-->

            <div class="row mb-3" style="padding-top: 5mm;">
              <h5>Pengajuan</h5>
            </div>

            <hr>

            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">ID Pengajuan</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="SKM<?= sprintf("%03d", $pengajuanDetail['idpengajuan']); ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= date('j F Y', strtotime($pengajuanDetail['tanggalpengajuan'])); ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['kategori']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">Tujuan</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="<?= $pengajuanDetail['tujuan']; ?>" readonly>
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabel" class="col-sm-2 col-form-label">File Bukti</label>
              <div class="col-sm-10">
                <?php if ($pengajuanDetail['kategori'] == "Perpanjangan BPJS") { ?>
                  <input class="form-control" type="text" placeholder="Tidak Ada Dokumen Yang Diupload" aria-label="Disabled input example" disabled>
                <?php } else { ?>
                  <!-- <embed type="application/pdf" src="/filePendukung/<?= $pengajuanDetail['namafile']; ?>" width="600" height="400"></embed> -->
                  <a href="/Previewpdf/<?= $pengajuanDetail['idpengajuan']; ?>" target="_blank" rel="nofollow" title="dewa inside blog">
                    <i class="fas fa-fw fa-file"></i>
                    <span><?= $pengajuanDetail['namafile']; ?></span>
                    <i class="fas fa-fw fa-eye"></i>
                  </a>
                <?php } ?>
              </div>
            </div>

            <!-- Akhir Pengajuan -->

          </div>
      </div>
      </form>

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
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="/login/logout">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <!-- </section> -->

      <!-- Akhir form -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; OPS BAAK 2022</span>
          </div>
        </div>
      </footer>


      <!-- Bootstrap core JavaScript-->
      <script src="/vendor/jquery/jquery.min.js"></script>
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>