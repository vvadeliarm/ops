<?php

namespace App\Controllers;

use App\Models\KepalaBaakModel;
use App\Models\PengajuanModel;

class KepalaBaakTabel extends BaseController
{

    protected $kepalaBaakModel;
    public function __construct()
    {
        $this->kepalaBaakModel = new KepalaBaakModel();
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
        $nip = 123456789;
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        $pengajuan = $this->pengajuanModel->findAll();
        // dd($kbaak);
        $data = [
            'kbaak' => $kbaak,
            'pengajuan' => $pengajuan
        ];
        return view('pages/SkmKepala', $data);
    }

    public function detail($idpengajuan)
    {
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/kbaakdetail', $data);
    }
}
