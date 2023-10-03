<?php

namespace App\Controllers;

class Home extends BaseController
{    
    public function index()
    {
        return view('template/header')
             . view('template/menu')
             . view('home')
             . view('template/footer');        
    }
    
}
