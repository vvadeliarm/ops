<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
// use App\Models\MahasiswaModel;
// use App\config\Services;

class PerbaikanTabel extends BaseController
{

    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
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
