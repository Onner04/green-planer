<?php

namespace App\Http\Controllers;

use App\Models\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function product() 
    {
        return view('product-detail');
    }
}
