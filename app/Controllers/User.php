<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }
    public function lupa_pass()
    {
        return view('pages/lupa_pass');
    }
    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //jika admin
        if ($username == 'admin' && $password == 'admin') {
            return redirect()->to('/admin');
        }
    }
}
