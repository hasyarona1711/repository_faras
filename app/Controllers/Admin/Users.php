<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UsersModel;
use App\Models\JurusanModel;

class Users extends BaseController
{
    protected $usersModel;
    protected $jurusanModel;
    protected $db;


    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->jurusanModel = new JurusanModel();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        //karena pakai join, jadi pakai koneksi langsung ke db. tidak menggunakan model
        $query = $this->db->query('SELECT a.nim, a.nama, b.nama as jurusan, a.email FROM users as a JOIN jurusan as b on a.id_jurusan = b.id');
        $result = $query->getResultObject();
        $jurusan = $this->jurusanModel->findAll();
        $data = [
            'users' => $result,
            'jurusans' => $jurusan
        ];
        return view('admin/users', $data);
    }
    public function add()
    {
        $nim = $this->request->getVar('nim');
        $jurusan = $this->request->getVar('jurusan');
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $pass = $this->request->getVar('password');
        $query = $this->db->query("INSERT INTO users (`nim`, `id_jurusan`, `nama`, `email`, `password`) VALUES ('$nim','$jurusan','$nama','$email','$pass')");
        $result = $this->db->affectedRows();
        if ($result != 1) {
            session()->setFlashdata('pesan', 'Data gagal ditambahkan.');
        } else {
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        }
        return redirect()->to('/admin/user');
    }
}
