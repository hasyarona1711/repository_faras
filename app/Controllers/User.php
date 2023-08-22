<?php

namespace App\Controllers;

use App\Models\ItemModel;
use App\Models\UsersModel;
use App\Models\JendokModel;
use App\Models\AuthorsModel;
use DateTime;

class User extends BaseController
{
    protected $itemModel;
    protected $usersModel;
    protected $jendokModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->usersModel = new UsersModel();
        $this->jendokModel = new JendokModel();
    }
    public function index()
    {
        return view('pages/login');
    }
    public function lupa_pass()
    {
        return view('pages/lupa_pass');
    }
    public function manage($username = '')
    {
        $datearr = array();
        $db = db_connect();
        $result = $db->query("SELECT item.id, DATE(item.updated_at) as updated_at, item.judul, item.status, item.penulis_depan, item.penulis_belakang, jenis_dokumen.nama  FROM item JOIN jenis_dokumen on item.id_jenis_dokumen=jenis_dokumen.id where item.username = '$username' order by item.id desc");
        $dokumen = $result->getResultArray();
        $data = [
            'dokumen' => $dokumen
        ];
        return view('user/manage', $data);
    }
}
