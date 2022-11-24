<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\MahasiswaModel;
// use App\config\Services;

class PengajuanTabel extends BaseController
{

    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $nim = 12345;
        // $pengajuan = $this->pengajuanModel->findAll();
        $pengajuan = $this->pengajuanModel->where(['nim' => $nim])->findAll();
        $pengajuanDetail = $atributmhs = $this->pengajuanModel->where(['nim' => $nim])->first();
        $akun = $this->mahasiswaModel->where(['nim' => $nim])->first();
        // dd($pengajuan);
        // var_dump($pengajuan);

        $data = [
            'pengajuan' => $pengajuan,
            'atributmhs' => $atributmhs,
            'pengajuanDetail' => $pengajuanDetail,
            'akun' => $akun
        ];
        return view('pages/layananSKM', $data);
    }

    public function detail($idpengajuan)
    {
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/detail', $data);
    }

    public function perbaikiSKM($idpengajuan)
    {
        $perbaiki = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'perbaiki' => $perbaiki
        ];
        return view('pages/perbaikiSKM', $data);
    }
}
