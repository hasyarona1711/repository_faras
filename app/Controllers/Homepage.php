<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        return view('pages/homepage');
    }

    public function fakultas()
    {
        return view('pages/fakultas');
    }

    public function jurusan()
    {
        return view('pages/jurusan');
    }

    public function jenis_dokumen()
    {
        return view('pages/jenis_dokumen');
    }
}
