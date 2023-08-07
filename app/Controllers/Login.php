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
        $jurusan = $this->jurusanModel->find($user['id_jurusan']);
        $jenjang = $this->jenjangModel->find($jurusan['id_jenjang']);

        //jika admin
        if ($username == 'admin' && $password == 'admin') {
            return redirect()->to('/admin');
        } elseif ($password == $user['password']) {
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
