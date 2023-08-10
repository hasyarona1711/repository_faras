<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\JurusanModel;
use App\Models\JenjangModel;

class Login extends BaseController
{
    protected $usersModel;
    protected $jurusanModel;
    protected $jenjangModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->jurusanModel = new JurusanModel();
        $this->jenjangModel = new JenjangModel();
    }
    public function index()
    {
        return view('/pages/login');
    }
    public function doLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->usersModel->find($username);

        //jika admin
        if ($username == 'admin' && $password == 'admin') {
            $session = session();
            $session->set($username);
            return redirect()->to('/admin');
        } elseif ($password == $user['password']) {
            $jurusan = $this->jurusanModel->find($user['id_jurusan']);
            $jenjang = $this->jenjangModel->find($jurusan['id_jenjang']);
            $session = session();
            $login = [
                'isLogin' => true,
                'user' => $user,
                'jurusan' => $jurusan['nama'],
                'jenjang' => $jenjang['nama']
            ];
            $session->set($login);
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
