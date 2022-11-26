<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class index extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('nama');
    }
}