<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index() {
        $home = Home::all()->first();

        return view('backend.settings.home', compact('home'));
    }

    public function update(Request $request) {

        $request->validate([
            'name' => 'required',
            'roles' => 'required',
            'resume'=>'mimes:pdf',
            'image'=>'mimes:jpg,jpeg',
        ]);

        $home = Home::all()->first();
        $oldName = $home->name;
        $home->name = $request->name;
        $home->roles = $request->roles;
        //resume upload
        if($request->resume == !NULL) {
            unlink($home->resume);
            $request->resume->move(public_path('upload'), 'resume.pdf');
        }
        //image upload
        if($request->image == !NULL) {
            unlink($home->image);
            $request->image->move(public_path('upload'), 'profile.jpg');
        }

        $home->save();

        return redirect()->route('settings.home')->with('message', 'Home section settings has been updated');

    }
}
