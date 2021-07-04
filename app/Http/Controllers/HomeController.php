<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }
    
    public function products()
    {
        return view('frontend.products');
    }

    public function product_ruangbelajar()
    {
        return view('frontend.ruangbelajar');
    }

    public function product_skillacademy()
    {
        return view('frontend.skillacademy');
    }

    public function product_englishacademy()
    {
        return view('frontend.englishacademy');
    }
}