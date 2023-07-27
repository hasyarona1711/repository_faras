<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo ("home");
    }

    public function kontak($nama)
    {
        echo ("nama saya $nama");
    }
}
