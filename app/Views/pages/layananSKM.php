<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css" />

    <title>PEMBUATAN SKM</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #151965">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/up1.png" alt="" width="30" height="30" class="d-inline-block align-text-top" />
                BAAK Politeknik Statistika STIS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    <a class="nav-link" href="#tentang">Tentang Kami</a>
                    <a class="nav-link active" href="/pages/layananSKM">Layanan</a>
                    <a class="nav-link" href="/pages/login">Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

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

    <section>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/pages/pengajuanSKM"><button class="btn btn-primary" type="button">+ Ajukan SKM</button></a>
        </div>
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h5>Daftar SKM Saya</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Dokumen</th>
                                <th scope="col">Tanggal dibuat</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($pengajuan as $p) : ?>
                                <tr>
                                    <td scope="row">SKM<?= sprintf("%03d", $p['idpengajuan']); ?></td>
                                    <td><?= $p['tanggal pengajuan']; ?></td>
                                    <td><?= $p['statusskm']; ?></td>
                                    <?php
                                    if ($p['statusskm'] == "Disetujui") { ?>
                                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#disetujuiModal">Download</button></td>
                                    <?php } elseif ($p['statusskm'] == "Ditolak") { ?>
                                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ditolakModal">Lihat alasan</button></td>
                                    <?php } elseif ($p['statusskm'] == "Ditangguhkan") { ?>
                                        <td><a href="/pages/perbaikiSKM"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ditangguhkanModal">Perbaiki</button></a></td>
                                    <?php } else { ?>
                                        <td></td>
                                    <?php } ?>

                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td scope="row">SKM0002</td>
                                <td>07 November 2021</td>
                                <td>Ditolak</td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ditolakModal">Lihat alasan</button></td>
                            </tr>
                            <tr>
                                <td scope="row">SKM0003</td>
                                <td>01 Desember 2022</td>
                                <td>Ditangguhkan</td>
                                <td><a href="/pages/perbaikiSKM"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ditangguhkanModal">Perbaiki</button></a></td>
                            </tr>
                            <tr>
                                <td scope="row">SKM0004</td>
                                <td>23 Januari 2023</td>
                                <td>Diajukan</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!-- Akhir tabel -->

    <div class="modal fade" id="ditolakModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E179D; color: White; ">
                    <h5 class="modal-title">Detail SKM</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="idDokumen" class="form-label">Dokumen</label>
                            <input class="form-control" type="text" placeholder="SKM<?= sprintf("%03d", $p['idpengajuan']); ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="namaMhsw" class="form-label">Nama Mahasiswa</label>
                            <input class="form-control" type="text" placeholder="<?= $p['nama']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input class="form-control" type="text" placeholder="<?= $p['kategori']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="Tujuan" class="form-label">Tujuan</label>
                            <input class="form-control" type="text" placeholder="<?= $p['tujuan']; ?>" aria-label="Disabled input example" disabled>
                        </div>
                        <div class="col-md-12">
                            <label for="alasan" class="form-label">Alasan</label>
                            <textarea class="form-control" id="alasan" rows="3" placeholder="<?= $p['alasan']; ?>" aria-label="Disabled input example" disabled></textarea>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!--FOOTER-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - BAAK STIS, All Rights Reserved.</small>
        </div>
    </footer>
    <!-- Akhir Footer-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>