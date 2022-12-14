<?php

namespace App\Controllers;

use App\Models\FormModel;
use CodeIgniter\Controller;

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
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        // dd($kbaak);
        $kategori = $pengajuanDetail['statusskm'];
        $namaKbaak = $kbaak['nama'];
        $nip = $kbaak['nip'];
        if ($kategori != "Perpanjangan BPJS") {
            $file = $pengajuanDetail['namafile'];
            $namaFile = $pengajuanDetail['namafile'];

            $this->pengajuanModel->save([
                'statusskm' => "Disetujui",
                'idpengajuan' => $idpengajuan,
                'nama' => $pengajuanDetail['nama'],
                'nim' => $pengajuanDetail['nim'],
                'kelas' => $pengajuanDetail['kelas'],
                'prodi' => $pengajuanDetail['prodi'],
                'semester' => $pengajuanDetail['semester'],
                'tempattanggallahir' => $pengajuanDetail['tempattanggallahir'],
                'diploma' => $pengajuanDetail['diploma'],
                'tahunakademik' => $pengajuanDetail['tahunakademik'],
                'status' => $pengajuanDetail['status'],
                'kategori' => $pengajuanDetail['kategori'],
                'tujuan' => $pengajuanDetail['tujuan'],
                'fileupload' => $file,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip,
                'tanggalacckbaak' => $kbaak['tanggalacckbaak']

            ]);
        } else {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');
            // dd()
            $this->pengajuanModel->save([
                'statusskm' => "Disetujui",
                'idpengajuan' => $idpengajuan,
                'nama' => $pengajuanDetail['nama'],
                'nim' => $pengajuanDetail['nim'],
                'kelas' => $pengajuanDetail['kelas'],
                'prodi' => $pengajuanDetail['prodi'],
                'semester' => $pengajuanDetail['semester'],
                'tempattanggallahir' => $pengajuanDetail['tempattanggallahir'],
                'diploma' => $pengajuanDetail['diploma'],
                'tahunakademik' => $pengajuanDetail['tahunakademik'],
                'status' => $pengajuanDetail['status'],
                'kategori' => $pengajuanDetail['kategori'],
                'tujuan' => $pengajuanDetail['tujuan'],
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip,
                'tanggalacckbaak' => $kbaak['tanggalacckbaak']
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
        $to = $this->request->getVar('mailTo');
        $subject = "SKM Ditolak";
        $message = "Maaf Pengajuan Anda Telah Ditolak Oleh BAAK. Kunjungi Halaman Web Untuk Melihat Alasan Penolakan";

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('Anonymous@gmail.com', 'Pengajuan SKM');

        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
            echo 'Email successfully sent';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        $session = session();
        $nip = $session->get('nip');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $kbaak = $this->kepalaBaakModel->where(['nip' => $nip])->first();
        // dd($kbaak);
        $kategori = $pengajuanDetail['statusskm'];
        $namaKbaak = $kbaak['nama'];
        $nip = $kbaak['nip'];
        if ($kategori != "Perpanjangan BPJS") {
            $file = $pengajuanDetail['namafile'];
            $namaFile = $pengajuanDetail['namafile'];

            $this->pengajuanModel->save([
                'statusskm' => "Ditolak",
                'idpengajuan' => $idpengajuan,
                'nama' => $pengajuanDetail['nama'],
                'nim' => $pengajuanDetail['nim'],
                'kelas' => $pengajuanDetail['kelas'],
                'prodi' => $pengajuanDetail['prodi'],
                'semester' => $pengajuanDetail['semester'],
                'tempattanggallahir' => $pengajuanDetail['tempattanggallahir'],
                'diploma' => $pengajuanDetail['diploma'],
                'tahunakademik' => $pengajuanDetail['tahunakademik'],
                'status' => $pengajuanDetail['status'],
                'kategori' => $pengajuanDetail['kategori'],
                'tujuan' => $pengajuanDetail['tujuan'],
                'fileupload' => $file,
                'namafile' => $namaFile,
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip,
                'tanggalacckbaak' => $kbaak['tanggalacckbaak'],
                'alasan' => $this->request->getVar('alasan')

            ]);
        } else {
            $file = $this->request->getVar('namafile');
            $namaFile = $this->request->getVar('namafile');
            // dd()
            $this->pengajuanModel->save([
                'statusskm' => "Ditolak",
                'idpengajuan' => $idpengajuan,
                'nama' => $pengajuanDetail['nama'],
                'nim' => $pengajuanDetail['nim'],
                'kelas' => $pengajuanDetail['kelas'],
                'prodi' => $pengajuanDetail['prodi'],
                'semester' => $pengajuanDetail['semester'],
                'tempattanggallahir' => $pengajuanDetail['tempattanggallahir'],
                'diploma' => $pengajuanDetail['diploma'],
                'tahunakademik' => $pengajuanDetail['tahunakademik'],
                'status' => $pengajuanDetail['status'],
                'kategori' => $pengajuanDetail['kategori'],
                'tujuan' => $pengajuanDetail['tujuan'],
                'namakbaak' => $namaKbaak,
                'nipkbaak' => $nip,
                'tanggalacckbaak' => $kbaak['tanggalacckbaak'],
                'alasan' => $this->request->getVar('alasan')
            ]);
        }

        // $this->notifModel->save([
        //     'notif_mahasiswa' => "Terdapat Mahasiswa Yang Memperbaiki Pengajuan"
        // ]);

        // session()->setFlashdata("pesan", "Pengajuan Berhasil Diperbaiki");

        return redirect()->to('/KepalaBaakTabel');
    }
}
