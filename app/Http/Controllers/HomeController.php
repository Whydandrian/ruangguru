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
        
    }

    public function product_skillacademy()
    {
        
    }

    public function product_englishacademy()
    {
        
    }
}
