<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\JendokModel;
use App\Models\SubjekModel;
use App\Models\SubsubjekModel;

class Home extends BaseController
{
    protected $fakultasModel;
    protected $jurusanModel;
    protected $jendokModel;
    protected $subjekModel;
    protected $subsubjekModel;

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
        $this->jurusanModel = new JurusanModel();
        $this->jendokModel = new JendokModel();
        $this->subjekModel = new SubjekModel();
        $this->subsubjekModel = new SubsubjekModel();
    }
    public function index()
    {
        $jurusan = $this->jurusanModel->findAll();
        $fakultas = $this->fakultasModel->findAll();
        $subjekModel = $this->subjekModel->findAll();
        $jendok = $this->jendokModel->findAll();
        $data = [
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
            'subjek' => $subjekModel,
            'jendok' => $jendok
        ];
        return view('pages/homepage', $data);
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
