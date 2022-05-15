<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Skills;
use App\Models\Portfolio;

class IndexController extends Controller
{
    public function index(){
        $home = Home::all()->first();
        $about = About::all()->first();
        $experiences = Experience::all();
        $skills = Skills::all();
        $portfolios = Portfolio::all();
        $contact = Contact::all()->first();

        return view('frontend.index', compact('home', 'about', 'experiences', 'skills', 'portfolios', 'contact'));
    }
}
