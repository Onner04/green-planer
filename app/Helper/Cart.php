<?php
namespace App\Helper;

use App\Models\products;
use Session;

class Cart
{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct() 
    {
        $this->items = session('cart') ? session('cart') : [];
   
    }

    public function add($product, $quantity, $height)
    {
       
        $item = [
            'product_id'    => $product->id,
            'product_name'  => $product->name,
            'height'        => $height,
            'image'         => $product->image,
            'price'         => $product->sale_price > 0 ? $product->sale_price : $product->price,
            'quantity'      => max(1, $quantity),
        ];
        
       
        if(isset($this->items[$product->id.$height])){
            $this->items[$product->id.$height]['quantity'] += $quantity;
        }else{
            $this->items[$product->id.$height] = $item;
        }
        
        
        session(['cart'=>$this->items]);
    }

    public function getItems() 
    {
        return $this->items;
    }

    public function getTotalQuantity() {
        $totalQuantity = 0 ;
        foreach($this->items as $value)  {
            $totalQuantity += $value['quantity'];
        }
        return $totalQuantity ;
    }

    public function getTotalPrice() {
        $totalPrice = 0 ;
        foreach($this->items as $value)   {
            $totalPrice += $value['quantity'] * $value['price'];
        }
        return $totalPrice ;
    }

    public function update($id , $quantity) {
        if($quantity < 1) {
            $quantity = 1 ;
        }
        $this->items[$id]['quantity']= $quantity;
        session(['cart'=>$this->items]);
    }

    public function delete($id) {
        if(isset($this->items[$id]))    {
            unset($this->items[$id]);
        }
        session(['cart'=>$this->items]);
    }
}