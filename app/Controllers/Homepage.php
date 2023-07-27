<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('pages/homepage');
    }
}
