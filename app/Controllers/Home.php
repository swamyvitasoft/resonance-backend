<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return  redirect()->to('https://vitasoft.in/resonancekarimnagar');
        // return view('welcome_message');
    }
}
