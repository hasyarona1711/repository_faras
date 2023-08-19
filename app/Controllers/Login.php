<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\JurusanModel;
use App\Models\JenjangModel;
use App\Models\AttachmentModel;


class Login extends BaseController
{
    protected $usersModel;
    protected $jurusanModel;
    protected $jenjangModel;
    protected $attModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->jurusanModel = new JurusanModel();
        $this->jenjangModel = new JenjangModel();
        $this->attModel = new AttachmentModel();
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
        //ketika logout, file yang sudah di upload dan di cancel dihapus
        $db = db_connect();
        $resultfile = $db->query('SELECT * FROM `att_files` WHERE id_item is null');
        $datafile = $resultfile->getResultArray();
        if ($datafile) {
            foreach ($datafile as $data) {
                $this->attModel->delete($data['id']);
            }
        }
        return redirect()->to('/');
    }
}
