<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Exceptions\AlertError;

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
        // dd($this->request->getVar('tempattanggallahir'));
        // $array = $this->request->getVar('value');
        // if (!$this->validate([
        //     'value' => 'required'
        // ])) {
        //     session()->setFlashdata(
        //         'msg',
        //         '<div class="alert alert-danger">
        //             <h2  style="text-align: center;">OOPS!!!</h2>
        //             <p  style="text-align: center;">ANDA BELUM MEN-CHECKLIST AGREEMENT</p>
        //             <p  style="text-align: center;">SILAHKAN CHECKLIST TERLEBIH DAHULU</p>
        //         </div>'
        //     );
        //     return redirect()->to('pages/notifikasiPengajuan');
        // }

        // if ($this->request->getVar('value') != 'required') {
        //     session()->setFlashdata(
        //         'msg',
        //         '<div class="alert alert-danger">
        //                     <h2  style="text-align: center;">OOPS!!!</h2>
        //                     <p  style="text-align: center;">KAMU BELUM MENCETANG AGREEMENT</p>
        //                     <p  style="text-align: center;">SILAHKAN CENTANG TERLEBIH DAHULU</p>
        //                 </div>'
        //     );
        //     return redirect()->to('pages/notifikasiPengajuan');
        // }

        // if ($this->request->getVar('tujuan') != 'required') {
        //     session()->setFlashdata(
        //         'msg',
        //         '<div class="alert alert-danger">
        //                     <h2  style="text-align: center;">OOPS!!!</h2>
        //                     <p  style="text-align: center;">TIDAK ADA TUJUAN YANG DIMASUKKAN</p>
        //                     <p  style="text-align: center;">MASUKKAN TUJUAN TERLEBIH DAHULU</p>
        //                 </div>'
        //     );
        //     return redirect()->to('pages/notifikasiPengajuan');
        // }

        if (!$this->validate([
            'tujuan' => 'required'
        ])) {
            session()->setFlashdata(
                'msg',
                '<div class="alert alert-danger">
                    <h2  style="text-align: center;">OOPS!!!</h2>
                    <p  style="text-align: center;">TIDAK ADA TUJUAN YANG DIMASUKKAN</p>
                    <p  style="text-align: center;">MASUKKAN TUJUAN TERLEBIH DAHULU</p>
                </div>'
            );
            return redirect()->to('pages/notifikasiPengajuan');
        }


        $kategori = $this->request->getVar('kategori');
        // if ($kategori != "Perpanjangan BPJS") {
        //     if ($this->request->getVar('file') != 'required') {
        //         session()->setFlashdata(
        //             'msg',
        //             '<div class="alert alert-danger">
        //                 <h2  style="text-align: center;">OOPS!!!</h2>
        //                 <p  style="text-align: center;">ANDA BELUM MENGUPLOAD FILE</p>
        //                 <p  style="text-align: center;">SILAHKAN UPLOAD FILE PENDUKUNG TERLEBIH DAHULU</p>
        //             </div>'
        //         );
        //         return redirect()->to('pages/notifikasiPengajuan');
        //     } elseif ($this->request->getVar('file') != 'max_size[file, 300]') {
        //         session()->setFlashdata(
        //             'msg',
        //             '<div class="alert alert-danger">
        //                 <h2  style="text-align: center;">OOPS!!!</h2>
        //                 <p  style="text-align: center;">UKURAN FILE TIDAK BOLEH DARI 300kb</p>
        //             </div>'
        //         );
        //         return redirect()->to('pages/notifikasiPengajuan');
        //     } elseif ($this->request->getVar('file') != 'ext_in[file,pdf]') {
        //         session()->setFlashdata(
        //             'msg',
        //             '<div class="alert alert-danger">
        //                 <h2  style="text-align: center;">OOPS!!!</h2>
        //                 <p  style="text-align: center;">FILE HARUS PDF</p>
        //             </div>'
        //         );
        //         return redirect()->to('pages/notifikasiPengajuan');
        //     }
        // }

        if ($kategori != "Perpanjangan BPJS") {
            if (!$this->validate([
                'file' => 'uploaded[file]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">ANDA BELUM MENGUPLOAD FILE</p>
                        <p  style="text-align: center;">SILAHKAN UPLOAD FILE PENDUKUNG TERLEBIH DAHULU</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'file' => 'max_size[file, 300]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">UKURAN FILE TIDAK BOLEH DARI 300kb</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'file' => 'ext_in[file,pdf]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">FILE HARUS PDF</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            }
        }

        if ($kategori != "Perpanjangan BPJS") {
            $file = $this->request->getFile('file');
            $namaFile = $file->getRandomName();
            $file->move('filePendukung', $namaFile);

            $this->pengajuanModel->save([
                'statusskm' => "Diajukan",
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
                'namafile' => $namaFile
            ]);
        } else {
            $this->pengajuanModel->save([
                'statusskm' => "Diajukan",
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
                'tujuan' => $this->request->getVar('tujuan')
            ]);
        }

        session()->setFlashdata("pesan", "Pengajuan Berhasil Ditambahkan");

        return redirect()->to('/pengajuanTabel');
    }

    public function updatePengajuan($idpengajuan)
    {
        // dd($this->request->getVar('file'));
        // $array = $this->request->getVar('value');
        // if (!$this->validate([
        //     'value' => 'required'
        // ])) {
        //     session()->setFlashdata(
        //         'msg',
        //         '<div class="alert alert-danger">
        //             <h2  style="text-align: center;">OOPS!!!</h2>
        //             <p  style="text-align: center;">ANDA BELUM MEN-CHECKLIST AGREEMENT</p>
        //             <p  style="text-align: center;">SILAHKAN CHECKLIST TERLEBIH DAHULU</p>
        //         </div>'
        //     );
        //     return redirect()->to('pages/notifikasiPengajuan');
        // }

        // if (!$this->validate([
        //     'tujuan' => 'required'
        // ])) {
        //     session()->setFlashdata(
        //         'msg',
        //         '<div class="alert alert-danger">
        //             <h2  style="text-align: center;">OOPS!!!</h2>
        //             <p  style="text-align: center;">TIDAK ADA TUJUAN YANG DIMASUKKAN</p>
        //             <p  style="text-align: center;">MASUKKAN TUJUAN TERLEBIH DAHULU</p>
        //         </div>'
        //     );
        //     return redirect()->to('pages/notifikasiPengajuan');
        // }

        $kategori = $this->request->getVar('kategori');
        if ($kategori != "Perpanjangan BPJS") {
            if (!$this->validate([
                'file' => 'uploaded[file]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">ANDA BELUM MENGUPLOAD FILE</p>
                        <p  style="text-align: center;">SILAHKAN UPLOAD FILE PENDUKUNG TERLEBIH DAHULU</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'file' => 'max_size[file, 300]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">UKURAN FILE TIDAK BOLEH DARI 300kb</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            } elseif (!$this->validate([
                'file' => 'ext_in[file,pdf]'
            ])) {
                session()->setFlashdata(
                    'msg',
                    '<div class="alert alert-danger">
                        <h2  style="text-align: center;">OOPS!!!</h2>
                        <p  style="text-align: center;">FILE HARUS PDF</p>
                    </div>'
                );
                return redirect()->to('pages/notifikasiPengajuan');
            }
        }
        if ($kategori != "Perpanjangan BPJS") {
            $file = $this->request->getFile('file');
            $namaFile = $file->getRandomName();
            $file->move('filePendukung', $namaFile);

            $this->pengajuanModel->save([
                'statusskm' => "Diajukan Kembali",
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
                'namafile' => $namaFile
            ]);
        } else {
            $this->pengajuanModel->save([
                'statusskm' => "Diajukan Kembali",
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
                'tujuan' => $this->request->getVar('tujuan')
            ]);
        }



        session()->setFlashdata("pesan", "Pengajuan Berhasil Diperbaiki");

        return redirect()->to('/pengajuanTabel');
    }
}
