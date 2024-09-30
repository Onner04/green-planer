<?php

namespace App\Http\Controllers\Admin\categorychild;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\categoryChilds;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryChild = categoryChilds::all();
        
        return view('admin.category-child.index',compact('categoryChild'));
    }
    public function add()
    {
        $category = categories::all();
        return view('admin.category-child.add',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $this->validate($req,[
            'name'  =>'required|unique:category_childs|max:100'
       ],
       [
            'name.required' =>'Bạn chưa nhập trường này ',
            'name.unique' => 'Tên danh mục đã tồn tại !',
            'name.max'  => 'tên quá dài '
       ]);

       $categoryChild  = categoryChilds::create($req->all());

       if($categoryChild)
       {
            return redirect()->route('category-child.home')->with('message','thêm thành công');
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
        $category = categories::all();
        $cateChild = categoryChilds::find($id);

        return view('admin.category-child.update',compact('cateChild','category'));
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
        $categoryChild  = categoryChilds::find($id);
        $categoryChild = $categoryChild->update($request->all());

       if($categoryChild)
       {
            return redirect()->route('category-child.home')->with('message','thêm thành công');
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
        $delePro = DB::table('products')->where('category_id',$id)->delete();
        $cate_child = categoryChilds::find($id);
        $cate_child->delete();

        return redirect()->route('category-child.home')->with('message','đã xóa thành công');
    }
}
