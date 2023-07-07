<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{

    public function index() {
        $histories = History::all();
        return view('dashboard.pages.history.show-history',compact('histories'));
    }

    public function create() {
        return view('dashboard.pages.history.add-history');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $history = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/history/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $history['image'] = "$profileImage";
        }
    
        History::create($history);
     
        return redirect()->route('histories.index')
                        ->with('success','History created successfully.');
    }


    public function edit(History $history) {
        $history = History::find($history)->first();
        return view('dashboard.pages.history.edit-history',compact('history'));
    }

    public function update(Request $request, History $history) {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $historyData = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('dashboard/history/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $historyData['image'] = "$profileImage";
        }else{
            unset($historyData['image']);
        }
          
        $history->update($historyData);
        return redirect()->route('histories.index')
                        ->with('success','History updated successfully.');

    }

    public function destroy(History $history) {
        $history->delete();
        return redirect()->route('histories.index')
                        ->with('success','History deleted successfully.');

    }

    
}
