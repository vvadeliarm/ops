<?php

namespace App\Controllers;

use App\Models\KepalaBaakModel;
use App\Models\PengajuanModel;

class HomeKepalaBaakTabel extends BaseController
{

    protected $kepalaBaakModel;
    public function __construct()
    {
        $this->kepalaBaakModel = new KepalaBaakModel();
        $this->pengajuanModel = new PengajuanModel();
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
            return view('pages/HomeKepala', $data);
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

    public function detailSetuju($idpengajuan)
    {
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        // $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'kbaak' => $kbaak
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/arsipKepala', $data);
    }
}
