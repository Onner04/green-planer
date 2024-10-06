<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\products;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home(){
        $order = order::all();

        $totalRevenue = $order->sum('total_price');
        $views = DB::table('views')->count();

        $ads = orderDetail::pluck('id_product')->toArray();
        $pro = array_count_values($ads);
        arsort($pro);
        $arr = array_keys($pro);

        $Topbuy = [];
        if($arr)
        {
            $Topbuy = products::whereIn('id',$arr)
            ->orderByRaw("field(id,".implode(',',$arr).")")
            ->take(8)
            ->get();

        }


       return view('admin.home',compact('order','totalRevenue','Topbuy' ,'views')); 
    }
    public function login(){
        return view("admin.login");
    }

    public function postLogin(Request $request)
    {
        // Kiểm tra đăng nhập
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('message', 'Email hoặc mật khẩu không chính xác. Vui lòng thử lại.')->withInput();
        }
    }


    public function checkLogin(Request $req)
    {
        if(Auth::attempt(['email' =>$req->email , 'password' => $req->password]))
        {
            return redirect()->route('admin.home');
        }else{
            return redirect()->back()->with('message','email hoặc mật khẩu không đứng');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.home');
    }
}
