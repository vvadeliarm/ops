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
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: white">
        <!-- Main Content -->
        <div id="content">

            <section>
                <!-- Slider -->
                <section class="jumbotron text-center">
                    <div class="container">
                        <div class="row text-center mb-5">
                            <div class="col">
                                <h1>Layanan SKM</h1>
                                <p>Surat Keterangan Mahasiswa (SKM) merupakan salah satu jenis layanan kemahasiswaan yang dapat diakses mahasiswa yang bertujuan untuk legalitas dokumen dan kegiatan sesuai administrasi Politeknik Statistika STIS</p>
                            </div>
                            <svg id="tentang" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 10">
                                <path fill="#ffff" fill-opacity="1"></path>
                            </svg>
                </section>
                <!-- Akhir Slider-->
                <?php if ($pengajuanDetail['statusskm'] == "Disetujui") { ?>
                    <button type="hidden" class="but" data-toggle="modal" data-target="#disetujuiModal"></button>
                <?php } elseif ($pengajuanDetail['statusskm'] == "Ditolak") { ?>
                    <button type="hidden" class="but" data-toggle="modal" data-target="#ditolakModal"></button>
                <?php } elseif ($pengajuanDetail['statusskm'] == "Ditangguhkan") { ?>
                    <button type="hidden" class="but" data-toggle="modal" data-target="#ditangguhkanModal"></button>
                <?php } ?>

<<<<<<< HEAD
            </section>
            <!-- Akhir tabel -->

=======
<<<<<<< HEAD

                <?php } elseif ($pengajuanDetail['statusskm'] == "Ditolak") { ?>
                    <button type="hidden" class="but" data-toggle="modal" data-target="#ditolakModal"></button>
                <?php } elseif ($pengajuanDetail['statusskm'] == "Ditangguhkan") { ?>
                    <button type="hidden" class="but" data-toggle="modal" data-target="#ditangguhkanModal"></button>
                <?php } ?>

            </section>
            <!-- Akhir tabel -->

>>>>>>> eb94447c862f8375fb27419a7802a103fe729967
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; OPS BAAK 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
<<<<<<< HEAD
=======
=======
>>>>>>> 850039ccdad7d6389bd9f2df2d437ca551c6f721
>>>>>>> eb94447c862f8375fb27419a7802a103fe729967
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal Disetujui -->
    <div class="modal fade" id="disetujuiModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E179D; color: White; ">
                    <h5 class="modal-title">Detail SKM</h5>
                    <a href="/PengajuanTabel"><button class="btn btn-primary" type="button" style="background-color: red">X</button></a>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="idDokumen" class="form-label">Dokumen</label>
                            <input class="form-control" type="text" placeholder="Dokumen_<?= sprintf("%03d", $pengajuanDetail['idpengajuan']); ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="namaMhsw" class="form-label">Nama Mahasiswa</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['nama']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <!-- <embed type="application/pdf" src="/filePendukung/<?= $pengajuanDetail['namafile']; ?>" width="600" height="400"></embed> -->
                        <div class="col-md-12">
                            <label for="namaMhsw" class="form-label">File SKM</label>
                            <!-- <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['nama']; ?>" aria-label="Disabled input example" disabled> -->
                            <div>
                                <a href="/view-pdf/<?= $pengajuanDetail['idpengajuan']; ?>" target="_blank" rel="nofollow" title="dewa inside blog">
                                    <i class="fas fa-fw fa-file"></i>
                                    <span><?= $pengajuanDetail['namafile']; ?></span>
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <!-- <button href="/export-pdf" class="btn btn-primary">Export PDF</button> -->
                    <!-- <button type="button" class="btn btn-primary">Export PDF</button> -->
                    <a target="_blank" href="/export-pdf/<?= $pengajuanDetail['idpengajuan']; ?>" class="btn btn-primary">Cetak</a>
                    <!-- <a href="/export-pdf" class="btn btn-warning">Export PDF</a> -->
                </div>
                </form>
            </div>



        </div>
    </div>
    </div>

    <!-- Modal Ditolak -->
    <div class="modal fade" id="ditolakModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E179D; color: White; ">
                    <h5 class="modal-title">Detail SKM</h5>
                    <a href="/PengajuanTabel"><button class="btn btn-primary" type="button" style="background-color: red">X</button></a>
                    <!-- <a class="nav-link" href="/PengajuanTabel"><button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">X</button></a> -->
                </div>
                <div class="modal-body" style="margin-left: 3%;">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="idDokumen" class="form-label">Dokumen</label>
                            <input class="form-control" type="text" placeholder="Dokumen_<?= sprintf("%03d", $pengajuanDetail['idpengajuan']); ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="namaMhsw" class="form-label">Nama Mahasiswa</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['nama']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['kategori']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="Tujuan" class="form-label">Tujuan</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['tujuan']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Dokumen Pendukung</label>
                            <br>
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
                        <div class="col-md-12">

                            <label for="alasan" class="form-label">Alasan</label>
                            <textarea class="form-control" id="alasan" rows="3" placeholder="<?= $pengajuanDetail['alasan']; ?>" aria-label="Disabled input example" disabled></textarea>
<<<<<<< HEAD
                            <div class="modal-footer">
                                <a target="_blank" href="/export-pdf/<?= $pengajuanDetail['idpengajuan']; ?>" class="btn btn-primary">Export PDF</a>
                            </div>
=======
                            
>>>>>>> eb94447c862f8375fb27419a7802a103fe729967
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Ditangguhkan -->
    <div class="modal fade" id="ditangguhkanModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E179D; color: White; ">
                    <h5 class="modal-title">Detail SKM</h5>
                    <a href="/PengajuanTabel"><button class="btn btn-primary" type="button" style="background-color: red">X</button></a>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="idDokumen" class="form-label">Dokumen</label>
                            <input class="form-control" type="text" placeholder="Dokumen_<?= sprintf("%03d", $pengajuanDetail['idpengajuan']); ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="namaMhsw" class="form-label">Nama Mahasiswa</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['nama']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['kategori']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="Tujuan" class="form-label">Tujuan</label>
                            <input class="form-control" type="text" placeholder="<?= $pengajuanDetail['tujuan']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Dokumen Pendukung</label>
                            <br>
                            <?php if ($pengajuanDetail['kategori'] == "Perpanjangan BPJS") { ?>
                                <input class="form-control" type="text" placeholder="Tidak Ada Dokumen Yang Diupload" aria-label="Disabled input example" disabled>
                            <?php } else { ?>
                                <a href="/Previewpdf/<?= $pengajuanDetail['idpengajuan']; ?>" target="_blank" rel="nofollow" title="dewa inside blog">
                                    <i class="fas fa-fw fa-file"></i>
                                    <span><?= $pengajuanDetail['namafile']; ?></span>
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-md-12">
                            <label for="alasan" class="form-label">Alasan</label>
                            <textarea class="form-control" id="alasan" rows="3" placeholder="<?= $pengajuanDetail['alasan']; ?>" aria-label="Disabled input example" disabled></textarea>
                        </div>
                    </form>
                    <br />
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <?php if ($pengajuanDetail != NULL) { ?>
                            <a href="/PerbaikanTabel/<?= $pengajuanDetail['idpengajuan']; ?>"><button class="btn btn-primary" type="button">Perbaiki SKM</button></a>
                        <?php }; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.but').trigger('click');
        })
    </script>
</body>

</html>