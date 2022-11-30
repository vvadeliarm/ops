<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\KepalaBaakModel;
use CodeIgniter\Exceptions\AlertError;

class CRUDStatus extends BaseController
{
    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
        $this->kepalaBaakModel = new KepalaBaakModel();
    }

    public function index()
    {
    }

    public function terimaStatusSkm($idpengajuan)
    {
        $kategori = $this->request->getVar('kategori');
        $kbaak = $this->kepalaBaakModel->first();
        $namaKbaak = $kbaak['nama'];
        $nip = $kbaak['nip'];
        if ($kategori != "Perpanjangan BPJS") {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');

            $this->pengajuanModel->save([
                'statusskm' => "Disetujui",
                'idpengajuan' => $idpengajuan,
                'nama' => $this->request->getVar('nama'),
                'nim' => $this->request->getVar('nim'),
                'kelas' => $this->request->getVar('kelas'),
                'prodi' => $this->request->getVar('prodi'),
                'semester' => $this->request->getVar('semester'),
                'tempattanggallahir' => $this->request->getVar('tempattanggallahir'),
                'diploma' => $this->request->getVar('diploma'),
                'tahunakademik' => $this->request->getVar('tahunakademik'),
                'status' => $this->request->getVar('status'),
                'kategori' => $this->request->getVar('kategori'),
                'tujuan' => $this->request->getVar('tujuan'),
                'fileupload' => $namaFile,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip

            ]);
        } else {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');
            // dd()
            $this->pengajuanModel->save([
                'statusskm' => "Disetujui",
                'idpengajuan' => $idpengajuan,
                'nama' => $this->request->getVar('nama'),
                'nim' => $this->request->getVar('nim'),
                'kelas' => $this->request->getVar('kelas'),
                'prodi' => $this->request->getVar('prodi'),
                'semester' => $this->request->getVar('semester'),
                'tempattanggallahir' => $this->request->getVar('tempattanggallahir'),
                'diploma' => $this->request->getVar('diploma'),
                'tahunakademik' => $this->request->getVar('tahunakademik'),
                'status' => $this->request->getVar('status'),
                'kategori' => $this->request->getVar('kategori'),
                'tujuan' => $this->request->getVar('tujuan'),
                'fileupload' => $namaFile,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip
            ]);
        }

        // $this->notifModel->save([
        //     'notif_mahasiswa' => "Terdapat Mahasiswa Yang Memperbaiki Pengajuan"
        // ]);

        // session()->setFlashdata("pesan", "Pengajuan Berhasil Diperbaiki");

        return redirect()->to('/KepalaBaakTabel');
    }

    public function tolakStatusSkm($idpengajuan)
    {
        $kategori = $this->request->getVar('kategori');
        $kbaak = $this->kepalaBaakModel->first();
        $namaKbaak = $kbaak['nama'];
        $nip = $kbaak['nip'];
        if ($kategori != "Perpanjangan BPJS") {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');

            $this->pengajuanModel->save([
                'statusskm' => "Ditolak",
                'idpengajuan' => $idpengajuan,
                'nama' => $this->request->getVar('nama'),
                'nim' => $this->request->getVar('nim'),
                'kelas' => $this->request->getVar('kelas'),
                'prodi' => $this->request->getVar('prodi'),
                'semester' => $this->request->getVar('semester'),
                'tempattanggallahir' => $this->request->getVar('tempattanggallahir'),
                'diploma' => $this->request->getVar('diploma'),
                'tahunakademik' => $this->request->getVar('tahunakademik'),
                'status' => $this->request->getVar('status'),
                'kategori' => $this->request->getVar('kategori'),
                'tujuan' => $this->request->getVar('tujuan'),
                'alasan' => $this->request->getVar('alasan'),
                'fileupload' => $namaFile,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip

            ]);
        } else {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');
            // dd()
            $this->pengajuanModel->save([
                'statusskm' => "Ditolak",
                'idpengajuan' => $idpengajuan,
                'nama' => $this->request->getVar('nama'),
                'nim' => $this->request->getVar('nim'),
                'kelas' => $this->request->getVar('kelas'),
                'prodi' => $this->request->getVar('prodi'),
                'semester' => $this->request->getVar('semester'),
                'tempattanggallahir' => $this->request->getVar('tempattanggallahir'),
                'diploma' => $this->request->getVar('diploma'),
                'tahunakademik' => $this->request->getVar('tahunakademik'),
                'status' => $this->request->getVar('status'),
                'kategori' => $this->request->getVar('kategori'),
                'tujuan' => $this->request->getVar('tujuan'),
                'alasan' => $this->request->getVar('alasan'),
                'fileupload' => $namaFile,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip
            ]);
        }

        // $this->notifModel->save([
        //     'notif_mahasiswa' => "Terdapat Mahasiswa Yang Memperbaiki Pengajuan"
        // ]);

        // session()->setFlashdata("pesan", "Pengajuan Berhasil Diperbaiki");

        return redirect()->to('/KepalaBaakTabel');
    }
}
