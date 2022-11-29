<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use App\Models\MahasiswaModel;
use Config\View;
// use App\config\Services;
use Dompdf\Dompdf;

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
        if($nim != NULL){
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
        } else{
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

    public function exportPDF()
    {
        // reference the Dompdf namespace
        // $data = {
        //     'result'=>
        // }
        $view = view('pages/surat');
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('F4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        // $dompdf->stream("surat-skm", array("Attachment"=>false));
    }
}
