<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function auth()
    {
        $session = session();
        $model = new MahasiswaModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        // $data = $model->findAll();
        $data = $model->where('email', $email)->first();
        // // dd($email);
        // dd($password);
        // dd($data);

        if ($data) {
            $pass = $data['password'];
            $email_ = $data['email'];
            if (($password == $pass)&&($email_ == $email)){
                $ses_data = [
                                'nim'       => $data['nim'],
                                // 'nama'     => $data['nama'],
                                'email'    => $data['email'],
                                'logged_in'     => TRUE
                            ];
                            $session->set($ses_data);
                            return redirect()->to('/PengajuanTabel');

            } else {
                // echo 'salah';
                $session->setFlashdata('msg', 'Password Salah atau Email Salah');
                return redirect()->to('/pages/login');
            }
        } else {
            $session->setFlashdata('msg', 'Password Salah atau Email Salah');
            return redirect()->to('/pages/login');
        }
        
        
        // if ($data) {
        //     $pass = $data['password'];
        //     $verify_pass = password_verify($password, $pass);
        //     if ($verify_pass) {
        //         $ses_data = [
        //             // 'nim'       => $data['nim'],
        //             // 'nama'     => $data['nama'],
        //             'email'    => $data['email'],
        //             'logged_in'     => TRUE
        //         ];
        //         $session->set($ses_data);
        //         return redirect()->to('/pages/index');
        //     } else {
        //         $session->setFlashdata('msg', 'Wrong Password');
        //         return redirect()->to('/pages/login');
        //     }
        // } else {
        //     $session->setFlashdata('msg', 'Email not Found');
        //     return redirect()->to('/pages/login');
        // }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/pages/login');
    }
}
