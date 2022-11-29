<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\SuratModel;
use App\Models\MahasiswaModel;
// use App\config\Services;

class Previewpdf extends BaseController
{

    protected $pengajuanModel;

    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
        $this->suratModel = new SuratModel();
    }

    public function previewpdf($idpengajuan)
    {
        $preview = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'preview' => $preview
        ];
        return view('pages/lihatpdf', $data);
    }

    public function previewpdfSkm($idpengajuan)
    {
        $preview = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'preview' => $preview
        ];
        return view('pages/lihatpdfSkm', $data);
    }

    function download($namafile)
    {
        $file = "filePendukung/" . $namafile;
        return $this->response->download($file, NULL);
        // return redirect()->back()->back();
    }
}
