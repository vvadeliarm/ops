<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\MahasiswaModel;
// use App\config\Services;

class Previewpdf extends BaseController
{

    protected $pengajuanModel;

    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function previewpdf($idpengajuan)
    {
        $preview = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'preview' => $preview
        ];
        return view('pages/lihatpdf', $data);
    }
}
