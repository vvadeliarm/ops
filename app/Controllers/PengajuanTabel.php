<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\MahasiswaModel;
use Config\View;
use App\Models\SuratModel;
use App\config\Services;
use Dompdf\Dompdf;
use Dompdf\Options;



class PengajuanTabel extends BaseController
{

    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
        $this->mahasiswaModel = new MahasiswaModel();
        $this->suratModel = new SuratModel();
    }

    public function index()
    {

        $session = session();
        // echo "Welcome back, ".$session->get('nama');
        $nim = $session->get('nim');
        
        if ($nim != NULL) {
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
        } else {
            echo '<div class="modal fade" id="disetujuiModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #2E179D; color: White; text-align: center;">
                        <h1 class="modal-title">Anda Belum Login</h1>
                        <h1 class="modal-title">Silahkan Login Terlebih Dahulu</h1>
                        <h1 class="modal-title">Sebentar lagi Anda Akan Diarahkan Ke Halaman Login</h1>
                        <img src="/images/STIS1.jpg" class="rounded mx-auto d-block" alt="" />
                    </div>
                </div>
            </div>
        </div>';
            echo '<meta http-equiv="refresh" content="3;url=pages/login">';
            // echo '<script type ="text/JavaScript">';  
            // echo 'alert("Anda Harus Login Terlebih Dahulu")';  
            // view('pages/login');
            // echo '</script>'; 
        }
    }

    public function detail($idpengajuan)
    {
        session();
        // $session = session();
        // $nim = $session->get('nim');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'surat' => $surat,
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

    public function exportPDF($idpengajuan)
    {
        // require 'autoload.php';
        // session();
        // // $session = session();
        // // $nim = $session->get('nim');
        $pengajuanDetail = $this->pengajuanModel->where(['idpengajuan' => $idpengajuan])->first();
        $surat = $this->suratModel->where(['idpengajuan' => $idpengajuan])->first();
        $data = [
            'pengajuanDetail' => $pengajuanDetail,
            'surat' => $surat
        ];
     
       
        // reference the Dompdf namespace
        
        $options = new Options;
        $options->set('chroot', realpath(''));
        $options->setIsRemoteEnabled(true);
        
        $options->isHtml5ParserEnabled(true);
        $view = view('pages/surat', $data);
        
        // instantiate and use the dompdf class

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        // $dompdf->setBasePath();
        // $dompdf->set_option('IsRemoteEnabled',TRUE);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');
        $canvas = $dompdf->get_canvas();
        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        // dd($dompdf->stream());
        $dompdf->stream("surat-skm", array("Attachment"=>false));
        // return view('pages/surat', $data);
    }
}
