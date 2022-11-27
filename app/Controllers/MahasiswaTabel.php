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
        $session = session();
        $nim = $session->get('nim');
        $mahasiswa = $this->mahasiswaModel->findAll();
        $mhs = $this->mahasiswaModel->where(['nim' => $nim])->first();
        $data = [
            'mahasiswa' => $mahasiswa,
            'mhs' => $mhs
        ];
        return view('pages/pengajuanSKM', $data);
    }
}
