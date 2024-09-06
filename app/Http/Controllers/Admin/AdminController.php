<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\view;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
       return view('admin.home'); 
    }
    public function login(){
        return view("admin.login");
    }
}
