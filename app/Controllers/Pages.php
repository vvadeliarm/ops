<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('pages/index.html');
    }

    public function HomeAdminStaff()
    {
        // return view('welcome_message');
        return view('pages/HomeAdminStaff.html');
    }

    public function HomeKepala()
    {
        // return view('welcome_message');
        return view('pages/HomeKepala.html');
    }

    public function layananSKM()
    {
        // return view('welcome_message');
        return view('pages/layananSKM.html');
    }

    public function login()
    {
        // return view('welcome_message');
        return view('pages/login.html');
    }

    public function pengajuanSKM()
    {
        // return view('welcome_message');
        return view('pages/pengajuanSKM');
    }

    public function profil()
    {
        // return view('welcome_message');
        return view('pages/profil.html');
    }

    public function SkmAdminStaff()
    {
        // return view('welcome_message');
        return view('pages/SkmAdminStaff.html');
    }

    public function SkmKepala()
    {
        // return view('welcome_message');
        return view('pages/SkmKepala.html');
    }

    public function TTDKepala()
    {
        // return view('welcome_message');
        return view('pages/TTD kepala.html');
    }

    public function perbaikiSKM()
    {
        // return view('welcome_message');
        return view('pages/perbaikiSKM.html');
    }
}
