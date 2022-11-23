<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class simpanPengajuan extends BaseController
{
    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
        $this->pengajuanModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas')
            // 'prodi' => $this->request->getVar('prodi'),
            // 'semseter' => $this->request->getVar('semseter'),
            // 'tempat tanggal lahir' => $this->request->getVar('tempat tanggal lahir'),
            // 'diploma' => $this->request->getVar('diploma'),
            // 'tahun akademik' => $this->request->getVar('tahun akademik'),
            // 'status' => $this->request->getVar('status'),
            // 'kategori' => $this->request->getVar('kategori'),
            // 'tujuan' => $this->request->getVar('tujuan')
        ]);
        return redirect()->to('/pengajuanTabel');
    }
}
