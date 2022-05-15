<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('backend.settings.portfolio', compact('portfolios'));
    }

    public function AddPortfolio() {
        return view('backend.settings.portfolio_add');
    }

    public function StorePortfolio(Request $request){

        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'github' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $portfolio = New Portfolio;
        $portfolio->name = $request->name;
        $portfolio->link = $request->link;
        $portfolio->github = $request->github;
        $imageName = uniqid().'.'.$request->image->extension();
        $portfolio->image = 'upload/'.$imageName;
        $request->image->move(public_path('upload'), $imageName);
        $portfolio->save();
        return redirect()->route('settings.portfolio')->with('message', 'Your project has been added');
    }

    public function EditPortfolio($id) {
        $portfolio = Portfolio::find($id);
        return view('backend.settings.portfolio_edit', compact('portfolio'));
    }

    public function UpdatePortfolio(Request $request, $id) {
        $portfolio = Portfolio::find($id);
        $portfolio->name = $request->name;
        $portfolio->link = $request->link;
        $portfolio->github = $request->github;
        if($request->image == !NULL) {
            unlink($portfolio->image);
            $imageName = uniqid().'.'.$request->image->extension();
            $portfolio->image = 'upload/'.$imageName;
            $request->image->move(public_path('upload'), $imageName);

        }
        $portfolio->save();
        return redirect()->route('settings.portfolio')->with('message', 'Your project has been updated');
    }

    public function delete($id) {
        $portfolio = Portfolio::find($id);
        unlink($portfolio->image);
        $portfolio->delete();
        return redirect()->route('settings.portfolio')->with('message', 'Your project has been deleted');
    }





}
