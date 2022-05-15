<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    public function index(){
        $skills = Skills::all();
        return view('backend.settings.skills', compact('skills'));
    }

    public function AddSkill()
    {
        return view('backend.settings.skills_add');
    }

    public function StoreSkill(Request $request) {
        $request->validate([
            'header' => 'required',
            'text' => 'required',
        ]);

        $skill = New Skills;
        $skill->header = $request->header;
        $skill->text = $request->text;
        $skill->save();

        return redirect()->route('settings.skills')->with('message', 'Your skill has been added');
    }

    public function EditSkill($id) {
        $skill = Skills::find($id);
        return view('backend.settings.skills_edit', compact('skill'));
    }

    public function UpdateSkill(Request $request, $id) {
        $skill = Skills::find($id);
        $skill->header = $request->header;
        $skill->text = $request->text;
        $skill->save();

        return redirect()->route('settings.skills')->with('message', 'Your skill has been updated');
    }

    public function delete($id) {
        $skill = Skills::find($id);
        $skill->delete();

        return redirect()->route('settings.skills')->with('message', 'Your skill has been deleted');
    }
}
