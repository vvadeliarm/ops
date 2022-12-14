<?php

namespace App\Controllers;

use App\Models\KepalaBaakModel;
use App\Models\SuratModel;
use App\Models\PengajuanModel;
use App\Models\FormModel;
use CodeIgniter\Controller;

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
        $keyword = '';
<<<<<<< HEAD
        if ($nip != NULL) {
=======

        if ($nip != NULL) {

>>>>>>> 3f766bba3446c6a790f3e05f2b938b59feed3759
            $keyword = $this->request->getGet('keyword');
            if ($keyword) {
                $pengajuan = $this->pengajuanModel->cari($keyword);
            } else {
                $pengajuan = $this->pengajuanModel->findAll();
            }
            $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
<<<<<<< HEAD
            // $pengajuan = $this->pengajuanModel->findAll();
            // dd($kbaak);
=======
            $filter = $this->pengajuanModel->filter();
            // $filter = $this->->group_by('statusskm')->get('idPengajuan')->result();

            // dd($filter);
>>>>>>> 3f766bba3446c6a790f3e05f2b938b59feed3759
            $data = [
                'kbaak' => $kbaak,
                'pengajuan' => $pengajuan,
                'keyword' => $keyword
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

    // public function custom_filter()
    // {
    //     $db = db_connect();
    //     $builder = $db->table('pengajuan')->select('statusskm');

    //     return PengajuanModel::

    //         ->filter(function ($builder, $request) {

    //             if ($request->country)
    //                 $builder->where('country', $request->country);
    //         })
    //         ->toJson();
    // }

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

    // public function TimeStamp($idpengajuan)
    // {
    //     $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
    //     $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
    //     // dd($surat);
    //     $data = [
    //         'pengajuanDetail' => $pengajuanDetail,
    //         'surat' => $surat
    //         // 'validation' => \config\Services::validation()
    //     ];
    //     return view('pages/kbaakdetail', $data);
    // }
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
        $to = $this->request->getVar('mailTo');
        $subject = "SKM Sudah Disetujui";
        $message = "Selamat Pengajuan Anda Sudah Disetujui Oleh Kepala BAAK. Silahkan Ambil SKM H+1 Setelah Menerima Email Ini";

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('Anonymous@gmail.com', 'Pengajuan SKM');

        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
            echo 'Email successfully sent';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }

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
        $data = [
            'pengajuanDetail' => $pengajuanDetail
            // 'surat' => $surat
            // 'validation' => \config\Services::validation()
        ];
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
