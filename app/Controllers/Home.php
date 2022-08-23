<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function portfolio_details()
    {
        return view('portfolio-details');
    }
}
