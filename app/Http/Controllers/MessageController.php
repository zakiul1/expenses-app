<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /*   public function chat()
      {
          return view('user.chat');
      } */
    public function index(Request $request, $receiverId = null)
    {
        $users = User::where('id', '!=', auth()->id())->get();
        $selectedUser = $receiverId ? User::findOrFail($receiverId) : null;

        if ($selectedUser) {
            $messages = Message::where(function ($query) use ($selectedUser) {
                $query->where('sender_id', auth()->id())
                    ->where('receiver_id', $selectedUser->id);
            })->orWhere(function ($query) use ($selectedUser) {
                $query->where('sender_id', $selectedUser->id)
                    ->where('receiver_id', auth()->id());
            })->get();
        } else {
            $messages = [];
        }

        // dd($messages);
        return view('user.chat', ['users' => $users, 'selectedUser' => $selectedUser, 'messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
}
