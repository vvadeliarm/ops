<?php

namespace App\Controllers;

use App\Models\StaffBaakModel;
use App\Models\PengajuanModel;
use App\Models\SuratModel;

class HomeStaffBaakTabel extends BaseController
{

    // protected $kepalaBaakModel;
    public function __construct()
    {
        $this->staffBaakModel = new StaffBaakModel();
        $this->pengajuanModel = new PengajuanModel();
        $this->suratModel = new SuratModel();
    }

    public function index()
    {
        $session = session();
        $nip = $session->get('nip');

        if ($nip != NULL) {
            $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
            $pengajuan = $this->pengajuanModel->findAll();
            // dd($kbaak);
            $data = [
                'staff' => $staff,
                'pengajuan' => $pengajuan
            ];
            return view('pages/HomeAdminStaff', $data);
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

    public function layananSKM()
    {
        $session = session();
        $nip = $session->get('nip');
        $keyword = '';

        if ($nip != NULL) {
            $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
            $pengajuan = $this->pengajuanModel->findAll();
            $keyword = $this->request->getGet('keyword');
            if ($keyword) {
                $pengajuan = $this->pengajuanModel->cari($keyword);
            } else {
                $pengajuan = $this->pengajuanModel->findAll();
            }

            $data = [
                'staff' => $staff,
                'pengajuan' => $pengajuan,
                'keyword' => $keyword
            ];
            return view('pages/SkmAdminStaff', $data);
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
        $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
        $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'surat' => $surat,
            'pengajuanDetail' => $pengajuanDetail,
            'staff' => $staff
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/staffdetail', $data);
    }

    public function detailSetuju($idpengajuan)
    {
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
        $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'surat' => $surat,
            'pengajuanDetail' => $pengajuanDetail,
            'staff' => $staff
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/arsip', $data);
    }

    public function ttdKepala()
    {
        $session = session();
        $nip = $session->get('nip');

        if ($nip != NULL) {
            $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
            $pengajuan = $this->pengajuanModel->findAll();
            // dd($kbaak);
            $data = [
                'staff' => $staff,
                'pengajuan' => $pengajuan
            ];
            return view('pages/TTDKepala', $data);
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
        // $staff = $this->staffBaakModel->where(['nip' => $nip])->first();
        // $data = [
        //     'surat' => $surat,
        //     'pengajuanDetail' => $pengajuanDetail,
        //     'staff' => $staff
        //     // 'validation' => \config\Services::validation()
        // ];
        // return view('pages/staffdetail', $data);
    }
}
