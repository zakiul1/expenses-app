<!-- resources/views/chat.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <div>
        <h2>Users</h2>
        <ul>
            @foreach($users as $user)
                <li>
                    <a href="{{ route('chat', ['receiver_id' => $user->id]) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h2>Chat</h2>
        @if($selectedUser)
            <h3>Chatting with {{ $selectedUser->name }}</h3>
            @foreach($messages as $message)
                <strong>{{ $message->sender->name }}:</strong> {{ $message->content }}<br>
            @endforeach

            <form action="{{ route('send.message') }}" method="post">
                @csrf
                <input type="hidden" name="receiver_id" value="{{ $selectedUser->id }}">
                <textarea name="content" placeholder="Type your message"></textarea>
                <button type="submit">Send</button>
            </form>
        @endif
    </div>
</body>
</html>
