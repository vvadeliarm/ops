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

    <title>Perbaikan SKM</title>
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
                    <a class="nav-link" href="/#tentangKami">Tentang Kami</a>
                    <a class="nav-link active" href="/PengajuanTabel">Layanan</a>
                    <a class="nav-link" href="/pages/login">Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!--Awal Slider-->
    <section class="jumbotron text-center">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h1>Perbaikan SKM</h1>
                    <p>Surat Keterangan Mahasiswa (SKM) merupakan salah satu jenis layanan kemahasiswaan yang dapat diakses mahasiswa yang bertujuan untuk legalitas dokumen dan kegiatan sesuai administrasi Politeknik Statistika STIS</p>
                </div>
                <svg id="tentang" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 10">
                    <path fill="#ffff" fill-opacity="1"></path>
                </svg>
    </section>
    <!--Akhir Slider-->

    <!--Awal Form-->
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <br />
                <h5>Form Perbaikan SKM</h5>
                <form form action="/CRUDPengajuan/updatePengajuan/<?= $perbaiki['idpengajuan']; ?>" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input class="form-control" type="text" name="nama" value="<?= $perbaiki['nama']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Kategori</label>
                        <select id="inputState" class="form-select" name="kategori">
                            <option>Administrasi Orang tua</option>
                            <option>Administrasi Perlombaan</option>
                            <option>Perpanjangan BPJS</option>
                            <option>Lain-lain</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputTtl" class="form-label">Tempat Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tempat tanggal lahir" value="<?= $perbaiki['tempattanggallahir']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Tujuan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="tujuan" rows="3"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="inputNIM" class="form-label">NIM</label>
                        <input class="form-control" type="text" name="nim" value="<?= $perbaiki['nim']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="inputKelas" class="form-label">Kelas</label>
                        <input class="form-control" type="text" name="kelas" value="<?= $perbaiki['kelas']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">Unggah file pendukung</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-md-3">
                        <label for="inputDiploma" class="form-label">Diploma</label>
                        <input class="form-control" type="text" name="diploma" value="<?= $perbaiki['diploma']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="inputSems" class="form-label">Semester</label>
                        <input class="form-control" type="text" name="semester" value="<?= $perbaiki['semester']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div></div>
                    <div class="col-md-6">
                        <label for="inputProdi" class="form-label">Program Studi</label>
                        <input class="form-control" type="text" name="prodi" value="<?= $perbaiki['prodi']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div></div>
                    <div class="col-md-3">
                        <label for="inputTA" class="form-label">Tahun Akademik</label>
                        <input class="form-control" type="text" name="tahun akademik" value="<?= $perbaiki['tahunakademik']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="inputStatus" class="form-label">Status</label>
                        <input class="form-control" type="text" name="status" value="<?= $perbaiki['status']; ?>" aria-label="readonly input example" readonly>
                    </div>
                    <div class="col-md-7">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Formulir ini saya isi dengan sebenar-benarnya sesuai dengan data yang ada
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Ajukan SKM</button>
                    </div>
                </form>
                <!-- Akhir Form-->

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