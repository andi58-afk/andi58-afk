<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginController extends Controller{

    public function index()
    {
        $data['login']=$this->logins->findAll();
        return view('login_view');
    }
}