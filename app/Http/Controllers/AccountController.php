<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login() 
    {
        // We don't need to fetch all users for the login page
        // Just return the login view
        return view('admin.login');
    }
    
}
