<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\JendokModel;

class Home extends BaseController
{
    protected $fakultasModel;
    protected $jurusanModel;
    protected $jendokModel;
    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
        $this->jurusanModel = new JurusanModel();
        $this->jendokModel = new JendokModel();
    }
    public function index()
    {
        return view('pages/homepage');
    }
    public function panduan()
    {
        return view('pages/panduan');
    }
    public function tentang()
    {
        return view('pages/tentang');
    }
}
