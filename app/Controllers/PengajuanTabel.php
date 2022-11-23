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
        $nim = 12345;
        // $pengajuan = $this->pengajuanModel->findAll();
        $pengajuan = $this->pengajuanModel->where(['nim' => $nim])->findAll();
        $pengajuanDetail = $atributmhs = $this->pengajuanModel->where(['nim' => $nim])->first();
        // dd($pengajuan);
        // var_dump($pengajuan);

        $data = [
            'pengajuan' => $pengajuan,
            'atributmhs' => $atributmhs,
            'pengajuanDetail' => $pengajuanDetail

        ];
        return view('pages/layananSKM', $data);
    }

    public function detail($idpengajuan)
    {
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->findAll();
        $data = [
            'pengajuanDetail' => $pengajuanDetail
        ];
        return view('pages/layananSKM', $data);
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
