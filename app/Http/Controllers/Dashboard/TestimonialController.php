<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        return view('dashboard.pages.testimonial.show-testimonial',compact('testimonials'));
    }

    public function create() {
        return view('dashboard.pages.testimonial.add-testimonial');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $testimonial = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/testimonial/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $testimonial['image'] = "$profileImage";
        }
    
        Testimonial::create($testimonial);
     
        return redirect()->route('testimonials.index')
                        ->with('success','Testimonial created successfully.');
    }


    public function edit(Testimonial $testimonial) {
        $testimonial = Testimonial::find($testimonial)->first();
        return view('dashboard.pages.testimonial.edit-testimonial',compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial) {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $testimonialData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/testimonial/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $testimonialData['image'] = "$profileImage";
        }else{
            unset($testimonialData['image']);
        }
          
        $testimonial->update($testimonialData);
        return redirect()->route('testimonials.index')
                        ->with('success','Testimonial updated successfully.');

    }

    public function destroy(Testimonial $testimonial) {
        $testimonial->delete();
        return redirect()->route('testimonials.index')
                        ->with('success','Banner deleted successfully.');

    }

}
