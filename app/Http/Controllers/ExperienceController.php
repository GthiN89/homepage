<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index() {
        $experiences = Experience::all();
        return view('backend.settings.experience', compact('experiences'));

    }

    public function AddExperience()
    {
        return view('backend.settings.experience_add');
    }

    public function StoreExperience(Request $request) {

        $request->validate([
            'start_date' => 'required',
            'company' => 'required',
            'location' => 'required',
            'role' => 'required',
            'text' => 'required',

        ]);

        $experience = New Experience;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->company = $request->company;
        $experience->location = $request->location;
        $experience->role = $request->role;
        $experience->text = $request->text;
        $experience->save();
        return redirect()->route('settings.experience')->with('message', 'Experience has been added');

    }

    public function EditExperience($id) {
        $experience = Experience::find($id);
        return view('backend.settings.experience_edit', compact('experience'));
    }

    public function UpdateExperience(Request $request, $id) {

        $request->validate([
            'start_date' => 'required',
            'company' => 'required',
            'location' => 'required',
            'role' => 'required',
            'text' => 'required',

        ]);

        $experience = Experience::find($id);
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->company = $request->company;
        $experience->location = $request->location;
        $experience->role = $request->role;
        $experience->text = $request->text;
        $experience->save();
        return redirect()->route('settings.experience')->with('message', 'Experience has been updated');

    }

    public function delete($id) {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('settings.experience')->with('message', 'Experience has been deleted');
    }
}
