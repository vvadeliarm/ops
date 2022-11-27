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
        $session = session();
        // echo "Welcome back, ".$session->get('nama');
        $nim = $session->get('nim');
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
            'akun' => $akun,
            'validation' => NULL
        ];
        return view('pages/layananSKM', $data);
    }

    public function detail($idpengajuan)
    {
        session();
        // $session = session();
        // $nim = $session->get('nim');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'validation' => \config\Services::validation()
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

    public function previewpdf($idpengajuan)
    {
        $preview = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'preview' => $preview
        ];
        return view('pages/previewpdf', $data);
    }
}
