<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\order;
use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function account()
    {
        if(!str_contains(url()->previous(),'account'))
        {
            session(['ads'=>url()->previous()]);
        }
        return view('account');
    }

    public function user() 
    {
        $categories = categories::all()->sortByDesc("id");
        $orders = order::where('id_user',Auth::id())->with('orderDetail.product')->get();
        return view('user',compact('categories','orders'));
    }
    public function register(Request $req) {
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        Auth::login($user);

        if (str_contains(Session::get('ads'), 'cart')) {
            Session::forget('ads');
            return redirect()->route('product.order');
        } else {
            Session::forget('ads');
            return redirect()->route('user');
        }
    }

    

    public function login(Request $req) 
    {
        $credentials = $req->only('name','email','password');

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->role)  {
                return redirect()->route('admin.home');
            }else   {
                if (str_contains(Session::get('ads'), 'cart')) {
                    Session::forget('ads');
                    return redirect()->route('product.order');
                } else {
                    Session::forget('ads');
                    return redirect()->route('user');
                }
            }
        }else {
            return redirect()->back()->with('message', 'Đăng nhập thất bại!');
        }

       
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('user');
    }
}
