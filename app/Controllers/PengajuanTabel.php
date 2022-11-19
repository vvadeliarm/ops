<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class PengajuanTabel extends BaseController
{

    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
        $pengajuan = $this->pengajuanModel->findAll();

        $data = [
            'pengajuan' => $pengajuan
        ];
        return view('pages/layananSKM', $data);
    }
}
