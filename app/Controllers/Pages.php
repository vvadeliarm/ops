<?php

namespace App\Controllers;


class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('pages/index');
    }

    public function HomeAdminStaff()
    {
        // return view('welcome_message');
        return view('pages/HomeAdminStaff');
    }

    public function HomeKepala()
    {
        // return view('welcome_message');
        return view('pages/HomeKepala');
    }

    public function layananSKM()
    {
        // return view('welcome_message');
        session();
        return view('pages/layananSKM');
    }

    public function login()
    {
        // return view('welcome_message');
        return view('pages/login');
    }

    public function pengajuanSKM()
    {
        // return view('welcome_message');
        // session();
        // $data = [
        //     'validation' =>\config\Services::validation()
        // ];
        return view('pages/pengajuanSKM');
    }

    public function profil()
    {
        // return view('welcome_message');
        return view('pages/profil');
    }

    public function SkmAdminStaff()
    {
        // return view('welcome_message');
        return view('pages/SkmAdminStaff');
    }

    public function SkmKepala()
    {
        // return view('welcome_message');
        return view('pages/SkmKepala');
    }

    public function TTDKepala()
    {
        // return view('welcome_message');
        return view('pages/TTDKepala');
    }

    public function perbaikiSKM()
    {
        // return view('welcome_message');
        return view('pages/perbaikiSKM');
    }

    public function detail()
    {
        // return view('welcome_message');
        return view('pages/detail');
    }

    public function notifikasiPengajuan()
    {
        // return view('welcome_message');
        return view('pages/notifikasiPengajuan');
    }

    public function previewpdf()
    {
        // return view('welcome_message');
        return view('pages/previewpdf');
    }
}
