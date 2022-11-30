<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;
use App\Models\KepalaBaakModel;
use App\Models\StaffBaakModel;

class login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    protected $mahasiswaModel;
    protected $kepalaBaakModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
        $this->kepalaBaakModel = new kepalaBaakModel();
        $this->staffBaakModel = new StaffBaakModel();
    }

    public function auth()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        //auth mahasiswa
        $model = new MahasiswaModel();
        // $data = $model->findAll();
        $data = $this->mahasiswaModel->where(['email' => $email])->first();
        // // dd($email);
        // dd($password);
        // dd($data);

        //auth kepala baak
        $model2 = new KepalaBaakModel();
        $data2 = $this->kepalaBaakModel->where(['email' => $email])->first();

        $data3 = $this->staffBaakModel->where(['email' => $email])->first();

        if ($data) {
            $pass = $data['password'];
            $email_ = $data['email'];
            if (($password == $pass) && ($email_ == $email)) {
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
        } elseif ($data2) {
            $pass = $data2['password'];
            $email_ = $data2['email'];
            if (($password == $pass) && ($email_ == $email)) {
                $ses_data = [
                    'nip'       => $data2['nip'],
                    // 'nama'     => $data['nama'],
                    'email'    => $data2['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/HomeKepalaBaakTabel');
            }
        } elseif ($data3) {
            $pass = $data3['password'];
            $email_ = $data3['email'];
            if (($password == $pass) && ($email_ == $email)) {
                $ses_data = [
                    'nip'       => $data3['nip'],
                    // 'nama'     => $data['nama'],
                    'email'    => $data3['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/HomeStaffBaakTabel');
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
