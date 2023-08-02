<?php

namespace App\Controllers;

class Home extends BaseController
{
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
