<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all()->first();
        return view('backend.settings.contact', compact('contact'));
    }

    public function update(Request $request) {

        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'linkedin' => 'required',
        ]);

        $contact = Contact::all()->first();
        $contact->name = $request->name;
        $contact->role = $request->role;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->adress = $request->adress;
        $contact->linkedin = $request->linkedin;
        $contact->save();
        return redirect()->route('settings.contact')->with('message', 'Your contact info has been updated');
    }
}
