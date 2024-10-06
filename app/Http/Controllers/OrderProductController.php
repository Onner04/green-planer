<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\view;
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
    public function addOrder(Request $req)
    {
        $cart  = new Cart();
        
        $totalPrice = $cart->getTotalPrice();
        $totalQuantity = $cart->getTotalQuantity();
        
        $order = order::create(
            [
                'name'  =>$req->name,
                'phone' =>$req->phone,
                'addrest'=>$req->address,
                'quantity'=>$totalQuantity,
                'total_price'=>$totalPrice,
                'note'  =>$req->note,
                'id_user'   =>$req->id_user,
            ]);

        $orderDetails = [];
        foreach($cart->getItems() as $value)
        {
            $orderDetail= orderDetail::create([
                'id_product' => $value['product_id'],
                'id_order' => $order->id,
                'quantity' => $value['quantity'],
                'price' => $value['price'],      
                'size' => $value['height'],
            ]);
            $orderDetails[] = $orderDetail;
        }
        

        if($order)
        {
            return view('product-thank',compact('order','orderDetails','totalPrice','cart'));
        }

    }
    public function thanks() {
        return view('product-thank');
    }
}
