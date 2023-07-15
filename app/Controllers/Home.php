<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('_includes/header');
        echo view('home');
        echo view('_includes/footer');
        return;
    }
}
