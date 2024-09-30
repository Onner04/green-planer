<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function order()
    {
        $cart = new Cart() ;
        $totalPrice = $cart->getTotalPrice();
        $totalQuantity = $cart->getTotalQuantity();
        return view('order', compact('cart', 'totalPrice', 'totalQuantity'));
    }
}
