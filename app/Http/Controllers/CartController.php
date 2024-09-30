<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function Cart() 
    {
        $category = categories::all()->sortByDesc("id");
        $cart = new Cart();
        $totalPrice = $cart->getTotalPrice();
        $totalQuantity = $cart->getTotalQuantity();
        return view('cart', compact('category','cart','totalPrice','totalQuantity'));
    }
    public function add( Request $req){
        $product = products::find($req->id);
        
        $cart = new Cart() ;
        $cart->add($product , $req->quantity, $req->height);
       
        
        return redirect()->route('product.cart');
    }

    public function update(Request $req){
        $id = ($req->id);
        $cart = new Cart();
        $cart->update($id , $req->quantity);
        return redirect()->route('product.cart');
    }
    public function delete($id) {
        $cart = new Cart() ;
        $cart->delete($id);
        return redirect()->route('product.cart');
    }
    
}
