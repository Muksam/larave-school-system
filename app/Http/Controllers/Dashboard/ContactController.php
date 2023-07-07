<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
      $contacts = Contact::all();  
      return view('dashboard.pages.contact.show-contact',compact('contacts'));
    }

   
    public function destroy($id)
    {
        $contact->delete();
        return redirect()->route('contacts.index')
                        ->with('success','Contact deleted successfully.');
    }
}
