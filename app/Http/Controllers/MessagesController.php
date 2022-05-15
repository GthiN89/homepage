<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index() {
        $messages = Messages::all();
        return view('backend.settings.messages', compact('messages'));
    }

    public function send(Request $request) {
        $message = new Messages();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('home');
    }

    public function read($id) {
        $message = Messages::find($id);
        return view('backend.settings.messages_read', compact('message'));
    }

    public function delete($id) {
        $message = Messages::find($id);
        $message->delete();
        return redirect()->route('messages')->with('message', 'Message has been deleted');
    }
}
