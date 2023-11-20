@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen">

        <div class="w-full mb-1">
            <div class="mb-4">
                <!-- Sidebar -->
                <div class="sm:flex h-full sm:overflow-x-hidden">
                    <!-- Sidebar Content -->
                    <div class="sm:flex flex-col py-8 pl-6 pr-2 w-64 bg-sky-50 dark:bg-gray-900 flex-shrink-0">
                        <!-- Sidebar Header -->
                        <div class="flex flex-row items-center h-12 w-full">
                            <!-- Your sidebar header content here -->
                        </div>

                        <!-- Active Conversations -->
                        <div class="flex flex-col mt-8">
                            <!-- Active Conversations header -->
                            <div class="flex flex-row items-center justify-between text-xs">
                                <!-- Your Active Conversations content -->
                            </div>

                            <!-- User List -->
                            <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 sm:overflow-y-auto">
                                @foreach ($users as $user)
                              <div class="flex items-center">
                              
                                    <!-- User Item -->
                                    <a href="{{ route('chat', ['receiver_id' => $user->id]) }}">
                                        <button
                                            class="flex flex-row items-center hover:bg-sky-100 dark:hover:bg-gray-800 rounded-xl p-2">
                                            <!-- User Avatar -->
                                            <div
                                                class="flex items-center justify-center h-8 w-8 bg-sky-100 dark:bg-gray-700 dark:text-white rounded-full">
                                                @if ($user->user_profile_image)
                                                    <img class="w-8 h-8 rounded-full object-cover p-1 bg-sky-100 dark:bg-gray-700"
                                                        src="{{ asset('user/images') . '/' . $user->user_profile_image }}"
                                                        alt="">
                                                @else
                                                    {{ strtoupper($user->name[0]) }}
                                                @endif
                                            </div>
                                            <!-- User Name -->
                                            <div class="ml-2 text-sm font-semibold dark:text-white">{{ $user->name }}

                                                
                                            </div>
                                        
                                         
                                        </button>
                                    </a>
                                    <div>
                                        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class=" inline-flex items-center p-2 text-sm font-medium text-center text-gray-900  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                          </button> 
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-30 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                                  <li>
                                                    
                                                    <button onclick="deleteAllSmsFunc({{  auth()->id() }} )" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete All Conversation</button>
                                                  </li>
                                               
                                                </ul>
                                              
                                            </div>
                                      </div>
                              </div>
                                    <!-- User Item -->
                                  
                                @endforeach
                            </div>
                            <!-- User List -->
                        </div>
                        <!-- Active Conversations -->
                    </div>
                    <!-- Sidebar Content -->

                    <!-- Chat Area -->
                    <div class="flex flex-col flex-auto h-full p-6">
                        @if ($selectedUser)
                            <!-- Chat Box -->
                            <div
                                class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 dark:bg-gray-800 h-screen p-4">
                                <!-- Chat Messages -->
                                <div class="flex flex-col h-screen overflow-x-auto mb-4" id="messageContainer">
                                    <div class="flex flex-col h-screen">
                                        <!-- Messages Loop -->
                                        @foreach ($messages as $message)
                                            <div
                                                class="p-3 rounded-lg {{ $message->sender_id === auth()->id() ? 'col-start-6 col-end-13' : 'col-start-1 col-end-8' }}">
                                                <div
                                                    class="flex items-center {{ $message->sender_id === auth()->id() ? 'justify-start flex-row-reverse' : 'flex-row' }}">
                                                    <!-- Sender Avatar or Initials -->
                                                    <div
                                                        class="flex items-center justify-center h-10 w-10 rounded-full bg-sky-100 dark:bg-gray-700 flex-shrink-0">
                                                        @if ($message->sender_id === auth()->id())
                                                            @if (auth()->user()->user_profile_image)
                                                                <img class="w-8 h-8 rounded-full object-cover bg-sky-100 dark:bg-gray-700"
                                                                    src="{{ asset('user/images') . '/' . auth()->user()->user_profile_image }}"
                                                                    alt="">
                                                            @else
                                                                {{ strtoupper(auth()->user()->name[0]) }}
                                                            @endif
                                                        @else
                                                            @php
                                                                $receiver = \App\Models\User::find($message->sender_id);
                                                                $receiverName = strtoupper($receiver->name[0]);
                                                            @endphp
                                                            @if ($receiver->user_profile_image)
                                                                <img class="w-8 h-8 rounded-full object-cover bg-sky-100 dark:bg-gray-800"
                                                                    src="{{ asset('user/images') . '/' . $receiver->user_profile_image }}"
                                                                    alt="">
                                                            @else
                                                                {{ $receiverName }}
                                                            @endif
                                                        @endif
                                                    </div>
                                                    <!-- Message Content -->
                                                    <div
                                                        class="relative flex {{ $message->sender_id === auth()->id() ? 'mr-3' : 'ml-3' }} text-sm bg-sky-50 dark:text-white dark:bg-gray-700 py-2 px-4 shadow rounded-xl">
                                                      {{--  Content --}}
                                                        <div>{{ $message->content }} </div>
                                                    {{--  Content --}}
                                                    {{--  Icon Delete --}}
                                                    <div class="pl-3">
                                                        <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class=" inline-flex items-center p-2 text-sm font-medium text-center text-gray-900  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                                            </svg>
                                                          </button>
                                                          
                                                          <!-- Dropdown menu -->
                                                          <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-30 dark:bg-gray-700 dark:divide-gray-600">
                                                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                                                <li>
                                                                  
                                                                  <button onclick="deleteSmsFunc({{ $message->id }} )" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</button>
                                                                </li>
                                                             
                                                              </ul>
                                                            
                                                          </div>
                                                    </div>
                                                    {{--  Icon Delete --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- Messages Loop -->
                                    </div>
                                </div>
                                <!-- Chat Messages -->

                                <!-- Message Input -->
                                <form action="{{ route('send.message') }}" method="post">
                                    @csrf
                                    <div
                                        class="flex flex-row items-center h-16 rounded-xl bg-sky-50 dark:bg-gray-900 w-full px-2 md:px-4">
                                        <div>
                                            <button
                                                class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                                                <svg class="w-5 h-5 hidden md:block" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex-grow ml-4">

                                            <input type="hidden" name="receiver_id" value="{{ $selectedUser->id }}">
                                            <div class="relative w-full">
                                                <input type="text" name="content" id="sendMsgInput"
                                                    class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 dark:bg-gray-800 pl-4 h-8 md:h-10" />
                                                <button
                                                    class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>

                                        </div>

                                        <div class="ml-4">
                                            <button type="submit" onclick="addNewMessages()" id="sendMsgBtn"
                                                class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                                                <span class="hidden md:block">Send</span>
                                                <span class="ml-2">
                                                    <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Message Input -->
                            </div>
                            <!-- Chat Box -->
                        @endif
                    </div>
                    <!-- Chat Area -->
                </div>
                <!-- Sidebar and Chat Area -->
            </div>
        </div>
    </div>

    <script>
        // Function to scroll the message container to the bottom
        function scrollToBottom() {
            var element = document.getElementById("messageContainer");
            element.scrollTop = element.scrollHeight;
        }

        window.onload = function() {
            scrollToBottom();
        };


        function addNewMessages() {
            // Logic to add new messages
            // After adding messages, call scrollToBottom()
            scrollToBottom();
        }



        document.addEventListener("DOMContentLoaded", function() {
            const textInput = document.getElementById('sendMsgInput');
            const submitButton = document.getElementById('sendMsgBtn');
            console.log(submitButton);

            if (!textInput.value.trim()) {

                submitButton.setAttribute('disabled', 'disabled');



            }
            textInput.addEventListener('change', function() {
                // Check if text input is empty
                if (!textInput.value.trim()) {

                    submitButton.setAttribute('disabled', 'disabled');


                } else {
                    submitButton.removeAttribute('disabled');

                }
            });
        });



        /* Delete Message Fucntion */
        const deleteSmsFunc =($id)=>{

            axios.delete(`/message/${$id}`, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            // Handle success, e.g., remove the deleted message from the frontend
            console.log(response.data.message);
           window.location.reload();
        })
        .catch(error => {
            // Handle error, e.g., display an error message
            console.error(error.response.data.error);
        });
        }
        /* Delete Message Fucntion */

        /* Delete All Delete */
        const deleteAllSmsFunc=(receiverId)=>{

            axios.delete(`/messages/${receiverId}`)
            .then(response => {
                // Handle the success response
                console.log(response.data);
                window.location.reload();
            })
            .catch(error => {
                // Handle the error response
                console.error(error.response.data);
            });
        }
        /* Delete All Delete */
    </script>

@endsection
