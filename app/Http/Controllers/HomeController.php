<?php

namespace App\Http\Controllers;

use App\Models\AttrProducts;
use App\Models\banners;
use App\Models\categories;
use App\Models\categoryChilds;
use App\Models\productAttrs;
use App\Models\productImgs;
use App\Models\products;
use App\Models\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $banner = banners::all();

        $category = categories::all()->sortByDesc("id")->take(8);;
        
        $product  = products::all()->sortByDesc("id")->take(8);;

        return view('home',compact('banner','category','product'));
    }
    public function product($id) 
    {
        // Lấy danh sách tất cả danh mục và sắp xếp theo ID giảm dần
        $category = categories::all()->sortByDesc("id");

        // Tìm sản phẩm theo ID
        $product = products::find($id); 

        // Khởi tạo các biến cần thiết
        $cate_id = null;
        $cateChild = null;
        $productRelate = collect();  
        $images = [];
        $heightArr = [];  // Khởi tạo mảng heightArr để lưu dữ liệu chiều cao

        if ($product) {
            // Nếu sản phẩm tồn tại, lấy category_id
            $cate_id = $product->category_id;

            // Lấy hình ảnh của sản phẩm
            $images = productImgs::where('product_id', $id)->pluck('images')->toArray();

            // Lấy các sản phẩm liên quan dựa trên category_id, loại bỏ sản phẩm hiện tại
            $productRelate = products::where('category_id', $cate_id)->where('id', '<>', $id)->get();

            // Tìm danh mục con theo cate_id
            $cateChild = categoryChilds::find($cate_id);

            // Lấy các thuộc tính sản phẩm theo id_product
            $attr = productAttrs::where('id_product', $id)->pluck('id_attr')->toArray();

            // Lấy danh sách id của các thuộc tính có tên là "height"
            $attrHeight = AttrProducts::where('name', 'height')->pluck('id')->toArray();

            // Lọc các thuộc tính chiều cao
            foreach ($attr as $key => $value) {
                if (in_array($value, $attrHeight)) {
                    $heightArr[] = $value;  // Lưu các giá trị chiều cao vào mảng heightArr
                }
            }

            // Lấy các giá trị chiều cao dựa trên heightArr
            $height = AttrProducts::whereIn('id', $heightArr)->pluck('value')->toArray();

        } else {
            // Nếu không tìm thấy sản phẩm, quay lại trang trước với thông báo lỗi
            return redirect()->back()->with('error', 'Product not found');
        }

        // Trả về view với các biến đã chuẩn bị
        return view('product-detail', compact('category', 'product', 'images', 'height', 'productRelate', 'cateChild'));
    }

    public function cart() {
        return view('cart');
    }

}
