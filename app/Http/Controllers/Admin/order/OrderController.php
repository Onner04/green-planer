<?php

namespace App\Http\Controllers\Admin\order;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\view;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::with('orderDetail.product')->get();
       
        return view('admin.order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $order = order::find($id);
        $order->update([
            'status' =>$request->status,
        ]);

        if($order)
        {
            return redirect()->route('order.index');
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
        orderDetail::where('id_order', $id)->delete();

       
        $order = order::find($id);
        
       
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Đơn hàng không tồn tại');
        }

       
        $order->delete();

       
        return redirect()->route('order.index')->with('message', 'Xóa thành công');
    }
   
    
    public function delete($id)
    {
       
        orderDetail::where('order_id', $id)->delete();

       
        $order = order::find($id);
        dd($order);

       
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Đơn hàng không tồn tại');
        }

       
        $order->delete();

       
        return redirect()->route('order.index')->with('message', 'Xóa thành công');
    }

}
