<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index() {
        $banners = Banner::all();
        return view('dashboard.pages.banner.show-banner',compact('banners'));
    }

    public function create() {
        return view('dashboard.pages.banner.add-banner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $banner = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/banner/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $banner['image'] = "$profileImage";
        }
    
        Banner::create($banner);
        return redirect()->route('banners.index')->with('success','Banner created successfully.');
    }


    public function edit(Banner $banner) {
        $banner = Banner::find($banner)->first();
        return view('dashboard.pages.banner.edit-banner',compact('banner'));
    }

    public function update(Request $request, Banner $banner) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $bannerData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/banner/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $bannerData['image'] = "$profileImage";
        }else{
            unset($bannerData['image']);
        }
          
        $banner->update($bannerData);
        return redirect()->route('banners.index')
                        ->with('success','Banner updated successfully.');

    }

    public function destroy(Banner $banner) {
        $banner->delete();
        return redirect()->route('banners.index')
                        ->with('success','Banner deleted successfully.');

    }
    
}
