<?php

namespace App\Controllers;

use App\Models\KepalaBaakModel;
use App\Models\SuratModel;
use App\Models\PengajuanModel;

class KepalaBaakTabel extends BaseController
{

    protected $kepalaBaakModel;
    public function __construct()
    {
        $this->kepalaBaakModel = new KepalaBaakModel();
        $this->pengajuanModel = new PengajuanModel();
        $this->suratModel = new SuratModel();
    }

    public function index()
    {
        $session = session();
        $nip = $session->get('nip');

        if ($nip != NULL) {
            $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
            $pengajuan = $this->pengajuanModel->findAll();
            // dd($kbaak);
            $data = [
                'kbaak' => $kbaak,
                'pengajuan' => $pengajuan
            ];
            return view('pages/SkmKepala', $data);
        } else {
            echo '<div class="modal fade" id="disetujuiModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #2E179D; color: White; text-align: center;">
                        <h1 class="modal-title">Anda Belum Login</h1>
                        <h1 class="modal-title">Silahkan Login Terlebih Dahulu</h1>
                        <h1 class="modal-title">Sebentar lagi Anda Akan Diarahkan Ke Halaman Login</h1>
                        <img src="/images/STIS1.jpg" class="rounded mx-auto d-block" alt="" />
                    </div>
                </div>
            </div>
        </div>';
            echo '<meta http-equiv="refresh" content="3;url=pages/login">';
            // echo '<script type ="text/JavaScript">';  
            // echo 'alert("Anda Harus Login Terlebih Dahulu")';  
            // view('pages/login');
            // echo '</script>'; 
        }
    }

    public function detail($idpengajuan)
    {
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        // dd($surat);
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'surat' => $surat
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/kbaakdetail', $data);
    }

    public function updateTTD()
    {
        $nip = $this->request->getVar('nip');
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();

        if ($kbaak == NULL) {
            session()->setFlashdata(
                'msg',
                '<div class="alert alert-danger">
                <h2  style="text-align: center;">OOPS!!!</h2>
                <p  style="text-align: center;">NIP YANG ANDA MASUKKAN TIDAK DITEMUKAN</p>
            </div>'
            );
            return redirect()->to('pages/notifikasiPengajuan');
        } else {

            if (!$this->validate([
                'ttd' => 'uploaded[ttd]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">ANDA BELUM MENGUPLOAD FILE</p>
                    <p  style="text-align: center;">SILAHKAN UPLOAD TANDA TANGAN KEPALA BAAK TERLEBIH DAHULU</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'ttd' => 'max_size[ttd, 300]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">UKURAN FILE TIDAK BOLEH DARI 300kb</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'ttd' => 'is_image[ttd]',
                'ttd' => 'mime_in[ttd, image/png,image/jpeg, image/jpg]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">GAMBAR HARUS JPG/JPEG</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            }

            if (!$this->validate([
                'cap' => 'uploaded[cap]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">ANDA BELUM MENGUPLOAD FILE</p>
                    <p  style="text-align: center;">SILAHKAN UPLOAD CAP KEPALA BAAK TERLEBIH DAHULU</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'cap' => 'max_size[cap, 300]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">UKURAN FILE TIDAK BOLEH DARI 300kb</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'cap' => 'is_image[cap]',
                'cap' => 'mime_in[cap, image/png,image/jpeg, image/jpg]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">GAMBAR HARUS JPG/JPEG</p>
                </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            }

            $ttd = $this->request->getFile('ttd');
            $namaTtd = $ttd->getRandomName();
            $ttd->move('ttd', $namaTtd);

            $cap = $this->request->getFile('cap');
            $namaCap = $cap->getRandomName();
            $cap->move('cap', $namaCap);

            $this->kepalaBaakModel->save([
                'nip' => $kbaak['nip'],
                'nama' => $kbaak['nama'],
                'email' => $kbaak['email'],
                'password' => $kbaak['password'],
                'ttd' => $namaTtd,
                'cap' => $namaCap
            ]);

            session()->setFlashdata("pesan", "Tanda Tangan dan Cap Kepala BAAK berhasil Ditambahkan");

            return redirect()->to('/HomeStaffBaakTabel/ttdKepala');
            // $data = [
            //     'pengajuanDetail' => $pengajuanDetail
            //     // 'validation' => \config\Services::validation()
            // ];
            // return view('pages/kbaakdetail', $data);
        }
    }

    public function timestamp($idpengajuan)
    {
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        $this->kepalaBaakModel->save([
            'nip' => $kbaak['nip'],
            'nama' => $kbaak['nama'],
            'email' => $kbaak['email'],
            'password' => $kbaak['password'],
            'ttd' => $kbaak['ttd'],
            'cap' => $kbaak['cap']
        ]);
        // dd($surat);
        // $data = [
        //     'pengajuanDetail' => $pengajuanDetail,
        //     'surat' => $surat
        //     // 'validation' => \config\Services::validation()
        // ];
        // view('/CRUDStatus/terimaStatusSkm/' . $pengajuanDetail['idpengajuan']);
        // view("CRUDStatus");
        return redirect()->to('/CRUDStatus/terimaStatusSkm/' . $pengajuanDetail['idpengajuan']);
    }

    public function timestamp2($idpengajuan)
    {
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        $this->kepalaBaakModel->save([
            'nip' => $kbaak['nip'],
            'nama' => $kbaak['nama'],
            'email' => $kbaak['email'],
            'password' => $kbaak['password'],
            'ttd' => $kbaak['ttd'],
            'cap' => $kbaak['cap']
        ]);
        // dd($surat);
        // $data = [
        //     'pengajuanDetail' => $pengajuanDetail,
        //     'surat' => $surat
        //     // 'validation' => \config\Services::validation()
        // ];
        // view('/CRUDStatus/terimaStatusSkm/' . $pengajuanDetail['idpengajuan']);
        // view("CRUDStatus");
        return redirect()->to('/CRUDStatus/tolakStatusSkm/' . $pengajuanDetail['idpengajuan']);
    }
}
