<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\AttrProducts;
use App\Models\banners;
use App\Models\categories;
use App\Models\categoryChilds;
use App\Models\orderDetail;
use App\Models\productAttrs;
use App\Models\productImgs;
use App\Models\products;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home(){
        if (!Session::get("view")) {
            Session::put("view", 1); 
            DB::table('views')->insert(['view' => 1]);
        }

        $banner = banners::all();

        $category = categories::all()->sortByDesc("id")->take(8);;
        
        $product  = products::all()->sortByDesc("id")->take(8);;

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
        $cart = new Cart();

        return view('home',compact('banner','category','product','Topbuy'));
    }
    public function product($id) 
    {
        
       
        $category = categories::all()->sortByDesc("id");
       
        $product = products::find($id); 

        $cate_id = null;
        $cateChild = null;
        $productRelate = collect();  
        $images = [];
        $heightArr = [];  

        if ($product) {
           
            $cate_id = $product->category_id;

            $images = productImgs::where('product_id', $id)->pluck('images')->toArray();

            // Lấy các sản phẩm liên quan dựa trên category_id, loại bỏ sản phẩm hiện tại
            $productRelate = products::where('category_id', $cate_id)->where('id', '<>', $id)->get();

            $cateChild = categoryChilds::find($cate_id);

            $attr = productAttrs::where('id_product', $id)->pluck('id_attr')->toArray();
        
            $attrHeight = AttrProducts::where('name', 'height')->pluck('id')->toArray();

            // Lọc các thuộc tính chiều cao
            foreach ($attr as $key => $value) {
                if (in_array($value, $attrHeight)) {
                    $heightArr[] = $value;  
                }
            }
            $height = AttrProducts::whereIn('id', $heightArr)->pluck('value')->toArray();

        } else {
          
            return redirect()->back()->with('error', 'Product not found');
        }

        return view('product-detail', compact('category', 'product', 'images', 'height', 'productRelate', 'cateChild'));
    }


    public function seeAll() {
        $name = 'sản phẩm mới nhất';
        $product = products::all()->sortByDesc("id");
        return view('see-all',compact('product','name'));
    }

    public function TopBuy()
    {
        $name = 'Top bán chạy' ;
        $ads = orderDetail::pluck('id_product')->toArray();
        $pro = array_count_values($ads);
        arsort($pro);
        $arr = array_keys($pro);

        if (!empty($arr)) {
            $product = products::whereIn('id', $arr)
                        ->orderByRaw("FIELD(id," . implode(',', $arr) . ")")
                        ->take(8)
                        ->get();
        } else {
            $product = products::take(8)->get();
        }

        return view('TopBuy',compact('product','name'));
    }

   
}
