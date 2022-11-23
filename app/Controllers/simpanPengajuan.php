<?php

namespace App\Controllers;

class simpanPengajuan extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        dd($this->request->getVar());
    }
}
