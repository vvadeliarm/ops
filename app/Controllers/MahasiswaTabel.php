<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaTabel extends BaseController
{

    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();
        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('pages/pengajuanSKM', $data);
    }
}
