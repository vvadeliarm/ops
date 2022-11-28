<?php

namespace App\Controllers;

use App\Models\PengajuanModel;
use CodeIgniter\Exceptions\AlertError;

class CRUDAlasan extends BaseController
{
    protected $pengajuanModel;
    public function __construct()
    {
        $this->pengajuanModel = new PengajuanModel();
    }

    public function index()
    {
    }

    public function insertAlasan($idpengajuan)
    {
        $this->request->getVar('alasan');
        return redirect()->to('/KepalaBaakTabel');
    }
}
