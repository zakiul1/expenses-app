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
    public function delete($id)
{
    $message = Message::find($id);

    // Check if the message exists
    if (!$message) {
        return response()->json(['error' => 'Message not found'], 404);
    }

    // Check if the authenticated user is the sender or receiver of the message
    if ($message->sender_id != auth()->id() && $message->receiver_id != auth()->id()) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    $message->delete();

    return response()->json(['message' => 'Message deleted successfully']);
}

public function deleteByReceiver($receiverId)
{
    // Find all messages for the specified receiver_id
    $messages = Message::where('receiver_id', $receiverId)->get();
    //dd($receiverId);

    // Check if any messages were found
    if ($messages->isEmpty()) {
        return response()->json(['error' => 'No messages found for the specified receiver_id'], 404);
    }

    // Check if the authenticated user is authorized to delete these messages
    foreach ($messages as $message) {
        if ($message->sender_id != auth()->id() && $message->receiver_id != auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }

    // Delete all messages for the specified receiver_id
    Message::where('receiver_id', $receiverId)->delete();

    return response()->json(['message' => 'Messages deleted successfully']);
}
}
