<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\view;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = categories::all();
        return view('admin.category.index',compact('category'));
    }

    public function add(){
        return view('admin.category.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $this->validate($req,[
            'name'  =>'required|unique:categories|max:100'
       ],
       [
            'name.required' =>'Bạn chưa nhập trường này ',
            'name.unique' => 'Tên danh mục đã tồn tại !',
            'name.max'  => 'tên quá dài '
       ]);
       $category = categories::create($req->all());
       if($category)  {
        return redirect()->route('category.index')->with('message', 'thêm thành công');
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
    public function update(Request $request, $id)
    {
        //
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
