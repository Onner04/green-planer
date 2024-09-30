<?php

namespace App\Http\Controllers\Admin\attrProduct;

use App\Http\Controllers\Controller;
use App\Models\AttrProducts;
use App\Models\productAttrs;
use App\Models\products;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attr = AttrProducts::all();
        
        return view('admin.attr-product.index',compact('attr'));
    }

    public function add(){
        return view('admin.attr-product.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $req->validate([
            'value'=> ['required','unique:attr_products'], 
        ],[
            'value.required'=> 'Trường này không được để rỗng!',
            'value.unique' => 'Tên Thuộc tính "'.$req->value.'" đã tồn tại !'
        ]);
       
        $attr = AttrProducts::create([
            'name' => $req->name,
            'value' => $req->value
        ]);
        if($attr)
        {
            return redirect()->route('attr.home')->with('message','thêm thành công');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'height' => ['required', 'unique:attr_products,value'], 
        ],[
            'height.required' => 'Trường này không được để rỗng!',
            'height.unique' => 'Thuộc tính chiều cao "'.$req->height.'" đã tồn tại!'
        ]);

        $attr = AttrProducts::create([
            'name' => 'height',  
            'value' => $req->height
        ]);

        if($attr) {
            return redirect()->route('attr.home')->with('message', 'Thêm thành công');
        }
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
        $attr = AttrProducts::find($id);

        return view('admin.attr-product.update',compact('attr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attr = AttrProducts::find($id);
        $update = $attr->update($request->all());

        if($update)
        {
            return redirect()->route('attr.home')->with('message','update thành công');
        }
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

    public function delete($id)
    {
       
        $attr = AttrProducts::find($id);
        $attr->delete();

        if($attr)
        {
            return redirect()->route('attr.home')->with('message','xóa thành công');
        }
    }
}
