<?php

namespace App\Controllers;

class User extends BaseController
{

    public function index()
    {
        return view('pages/login');
    }
    public function lupa_pass()
    {
        return view('pages/lupa_pass');
    }
}
