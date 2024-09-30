<?php

namespace App\Http\Controllers\Admin\banner;

use App\Http\Controllers\Controller;
use App\Models\banners;
use App\Models\view;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = banners::all();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinationPath = public_path('images');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $imageName = null;
        if ($request->hasFile('file')) {
            $imgFile = $request->file('file');
            $imageName = time() . '_' . $imgFile->getClientOriginalName();
            $imgFile->move($destinationPath, $imageName);
        }

        $bannerData = $request->only(['name', 'link']);
        if ($imageName) {
            $bannerData['image'] = $imageName;
        }
        
        $banner = banners::create($bannerData);

        if ($banner) {
            return redirect()->route('banner.home')->with('success', 'Banner added successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add banner')->withInput();
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

    public function delete($id)
    {
        $banner = banners::find($id);
        $banner->delete();
    
        if ($banner) {
            $banner->delete();
            return redirect()->route('banner.home')->with('message', 'Xóa thành công');
        } else {
            return redirect()->route('banner.home')->with('error', 'Banner không tồn tại');
        }
    }
    
}
