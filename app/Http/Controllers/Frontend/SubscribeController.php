<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{

    public function index() {
        $subscribes = Subscribe::all();  
        return view('dashboard.pages.subscribe.show-subscribe',compact('subscribes'));
      }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
  
        Subscribe::create($request->all());
     
        return redirect()->route('homes.index');
    }

    public function destroy(Subscribe $subscribe) {
        $subscribe->delete();
        return redirect()->route('subscribes.index')
                        ->with('success','Contact deleted successfully.');

    }
    
}
