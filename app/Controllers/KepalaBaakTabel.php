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
        $keyword = '';

        if ($nip != NULL) {

            $keyword = $this->request->getGet('keyword');
            if ($keyword) {
                $pengajuan = $this->pengajuanModel->cari($keyword);
            } else {
                $pengajuan = $this->pengajuanModel->findAll();
            }
            $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
            // $pengajuan = $this->pengajuanModel->findAll();
            // $pengajuan2 = $cari;
            // dd($cari);

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

    public function detail($idpengajuan)
    {
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

    public function TimeStamp($idpengajuan)
    {
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
}
