<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class CRUDPengajuan extends BaseController
{
    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
    }

    public function simpanPengajuan()
    {
        if (!$this->validate([
            'tujuan' => 'required'
        ])) {
            $validation = \config\Services::validation();
            $data['validation'] = $validation;
            return redirect()->back();
        }

        $this->pengajuanModel->save([
            'statusskm' => "Diajukan",
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'prodi' => $this->request->getVar('prodi'),
            'semester' => $this->request->getVar('semester'),
            'tempattanggallahir' => $this->request->getVar('tempat tanggal lahir'),
            'diploma' => $this->request->getVar('diploma'),
            'tahunakademik' => $this->request->getVar('tahun akademik'),
            'status' => $this->request->getVar('status'),
            'kategori' => $this->request->getVar('kategori'),
            'tujuan' => $this->request->getVar('tujuan')
        ]);

        session()->setFlashdata("pesan", "Pengajuan Berhasil Ditambahkan");

        return redirect()->to('/pengajuanTabel');
    }

    public function updatePengajuan($idpengajuan)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'tujuan' => 'required'
        ])) {
            $validation = \config\Services::validation();
            $data['validation'] = $validation;
            return redirect()->back();
        }

        $this->pengajuanModel->save([
            'statusskm' => "Diajukan Kembali",
            'idpengajuan' => $idpengajuan,
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kelas' => $this->request->getVar('kelas'),
            'prodi' => $this->request->getVar('prodi'),
            'semester' => $this->request->getVar('semester'),
            'tempattanggallahir' => $this->request->getVar('tempat tanggal lahir'),
            'diploma' => $this->request->getVar('diploma'),
            'tahunakademik' => $this->request->getVar('tahun akademik'),
            'status' => $this->request->getVar('status'),
            'kategori' => $this->request->getVar('kategori'),
            'tujuan' => $this->request->getVar('tujuan')
        ]);

        session()->setFlashdata("pesan", "Pengajuan Berhasil Diperbaiki");

        return redirect()->to('/pengajuanTabel');
    }
}
