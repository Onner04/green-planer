<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;
use App\Models\AttrProducts;
use App\Models\categoryChilds;
use App\Models\productAttrs;
use App\Models\productImgs;
use App\Models\products;
use App\Models\view;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $product = products::all();
        return view('admin.product.index', compact('product'));
    }

    public function add(){
        $attrSize = AttrProducts::where('name','height')->get();
        
        $categoryChild = categoryChilds::all();
        return view('admin.product.add',compact('attrSize','categoryChild'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $this->validate($req,[
                'name' => 'required|unique:products|max:255',
                'quantity' => 'required|numeric|min:1',
                'price' => 'required|numeric|min:1',
                'sale_price' => 'nullable|lt:price|numeric',
                'file' => 'required|mimes:jpg,jpeg,png',
                'files' => 'required',
        ],
        [
                'name.required'=> 'Tên không được để trống!',
                'name.unique' => 'Tên sản phẩm đã tồn tại !',
                'quantity.required' => 'Vui lòng nhập số lượng sản phẩm',
                'quantity.min' => 'Số lượng sản phẩm không được ít hơn 1',
                'file.mimes' => 'Định dạng hình ảnh không đúng',
                'file.required' => 'Vui lòng chọn hình ảnh sản phẩm',
                'price.required' => 'Vui lòng nhập giá sản phẩm',
                'sale_price.lt' => 'Giá sale phải nhỏ hơn giá nhập',
                'sale_price.gt' => 'Giá sale phải lớn hơn 50% của giá nhập',
                'price.numeric' => 'Giá phải là số',          
                'files.required' => 'Vui lòng chọn ảnh mô tả sảm phẩm sản phẩm',
        ]);
        
        
         // Check if directory exists and create if not
         $destinationPath = public_path('images');
         if (!file_exists($destinationPath)) {
             mkdir($destinationPath, 0755, true);
         }
 
         // Handle main image upload
         $imageName = null;
         if ($req->hasFile('file')) {
             $imgFile = $req->file('file')->getClientOriginalName();
             $imageName = time() . '_' . $imgFile;
             $req->file('file')->move($destinationPath, $imageName);
         }
 
         // Merge image name into request data
         if ($imageName) {
             $req->merge(['image' => $imageName]);
         }
 
         
         $product = products::create($req->all());
 
         // Handle additional images upload
         $files = [];
         if ($req->hasFile('files')) {
             foreach ($req->file('files') as $file) {
                 $fileName = time() . '_' . $file->getClientOriginalName();
                 $file->move($destinationPath, $fileName);
                 $files[] = ['images' => $fileName];
             }
         }
 
         // Save additional images to the database
         foreach ($files as $file) {
             productImgs::create([
                 'images' => $file['images'],
                 'product_id' => $product->id,
                 'ten' => 'Giá trị cần thiết', 
             ]);
         }
 
         // Handle attributes if any
         $attr = $req->attr;
         if (!empty($attr)) {
             foreach ($attr as $value) {
                 AttrProducts::create([
                     'id_attr' => $value,
                     'id_product' => $product->id,
                     'value' => 'Giá trị cần thiết',
                     'name' => 'Giá trị cần thiết',
                 ]);
             }
         }
 
         
         if ($product) {
             return redirect()->route('product.index')->with('message', 'Thêm mới sản phẩm "' . $req->name . '" thành công');
         }
     }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('admin.product.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
