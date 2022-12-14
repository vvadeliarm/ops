<?php

namespace App\Controllers;

use App\Models\KepalaBaakModel;
use App\Models\PengajuanModel;

class TerimaKbaakTabel extends BaseController
{

    protected $kepalaBaakModel;
    public function __construct()
    {
        $this->kepalaBaakModel = new KepalaBaakModel();
        $this->pengajuanModel = new PengajuanModel();
    }

    public function detail($idpengajuan)
    {
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaakDetail = $this->kepalaBaakModel->first();
        // dd($kbaakDetail);
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'kbaakDetail' => $kbaakDetail
            // 'validation' => \config\Services::validation()
        ];
        return view('pages/kbaakterimadetail', $data);
    }
}
