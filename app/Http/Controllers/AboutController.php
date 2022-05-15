<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index() {
        $about = About::all()->first();
        return view('backend.settings.about', compact('about'));
    }

    public function update(Request $request) {
        $about = About::all()->first();
        $about->text = $request->text;
        $about->save();
        return redirect()->route('settings.about')->with('message', 'Your about me settings has been changed');
    }

}
