<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserProfileController extends Controller
{
    public function index() {
        return view('backend.user.profile');
    }

    public function update(Request $request) {

        $request->validate([
            'name' => 'required',
            'email'=> 'required',
        ]);

        $user = User::all()->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->updated_at = Carbon::now();
        $user->save();

        return redirect()->route('user.profile')->with('message',"User profile settings were updated sucessfully");;
    }

    public function updatePassword(Request $request) {
        $user = User::all()->first();

        $userPassword = $user->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('user.profile')->with('message',"Password successfully updated");
    }

}
