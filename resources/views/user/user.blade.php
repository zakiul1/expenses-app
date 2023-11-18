@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen">
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        {{--  Bradcums --}}


                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('user.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    user</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('user.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    users</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl font-semibold text-gray-600 sm:text-2xl dark:text-white">Users List</h1>

                    
                    <button type="button" data-modal-target="user-create-modal" data-modal-toggle="user-create-modal" class="inline-flex items-center justify-center px-3 py-2 text-xs md:text-sm font-medium text-center text-white rounded-lg bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 sm:w-auto dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add User</span>
                    </button>

                </div>
            </div>
        </div>


        {{-- Table  Start --}}


        {{-- Table  Start --}}


        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-sky-100 dark:bg-gray-700">
                                <tr>

                                    <th scope="col"
                                        class="p-4 w-3/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-3/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-3/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Role
                                    </th>

                                    <th scope="col"
                                        class="p-4 w-3/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-sky-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach ($users as $user)
                                    <tr class="hover:bg-sky-100 dark:hover:bg-gray-700">


                                        <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                            @if ($user->user_profile_image)
                                                <img class="w-10 h-10 rounded-full object-cover"
                                                    src="{{ asset('user/images') . '/' . $user->user_profile_image }}"
                                                    alt="Neil Sims avatar">
                                            @else
                                            @endif
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->email }}
                                        </td>
                                        <td
                                            class="p-2 uppercase text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->role->name }}
                                        </td>

                                        <td class="p-2 text-right space-x-2 whitespace-nowrap">
                                            <button onclick="showPrevData({{ $user->id }})" type="button"
                                                data-modal-target="user-update-modal" data-modal-toggle="user-update-modal"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-sky-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit user
                                            </button>
                                            <button type="button" onclick="deleteUserFunc({{ $user->id }})"
                                                id="categoryDeleteBtn"
                                                class="inline-flex
                                                items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600
                                                rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                                dark:focus:ring-red-900">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete user
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /pagination --}}
        <div class="flex justify-end items-end   mt-3">
            <nav aria-label="Page navigation example">
                {{ $users->links() }}
            </nav>
        </div>
        {{-- /pagination --}}







        <!-- User Profile Create modal Start-->
        <div id="user-create-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                    <button type="button" onclick="closeCreateUserProfile()"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="user-create-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add User </h3>
                        {{-- Form --}}
                        <form class="space-y-6" id="addUserForm">
                            <div>
                                <div>
                                    <label for="userProfileAddInput" class=" flex justify-center items-center">
                                        {{--   svg user --}}
                                        <div
                                            class="h-20 w-20 bg-gray-300 rounded-full flex justify-center items-center relative ">
                                            <div id="addUserProfilesvg">
                                                <svg class="w-20 h-20 p-4   cursor-pointer text-gray-400 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                                                </svg>
                                                <div class="absolute bottom-1 right-3 cursor-pointer">
                                                    <svg class="w-4 h-4 mr-2 fill-slate-900" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </div>

                                            {{--  img --}}
                                            <img class="w-full h-full rounded-full p-1 hidden object-cover" src=""
                                                alt="" id="userProfileAddPreview">

                                        </div>
                                        {{--   svg user --}}
                                        <input type="file" name="user_profile" id="userProfileAddInput" hidden>
                                        <p id="user_user_profile_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="userName"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="User Name" required>
                                <p id="user_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="userEmail"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Email" required>
                                <p id="user_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>

                                <label for="roles"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select As
                                    Role</label>
                                <select name="role_id" id="roles"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                    <option selected>Choose Role</option>
                                    <option value="2">User</option>
                                    <option value="1">Admin</option>

                                </select>
                                <p id="user_role_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="userPassword"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Password" required>
                                <p id="user_password_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>


                            <button type="submit"
                                class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Add
                                User</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Create modal End-->

        <!-- User Profile Update modal Start-->
        <div id="user-update-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                    <button type="button" onclick="closeCreateUserProfile()"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="user-update-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update User </h3>
                        {{-- Form --}}
                        <form class="space-y-6" id="updateUserForm">
                            <div>
                                <div>
                                    <label for="userProfileUpdateInput" class=" flex justify-center items-center">
                                        {{--   svg user --}}
                                        <div
                                            class="h-20 w-20 bg-gray-300 rounded-full flex justify-center items-center relative ">
                                            <div id="updateUserProfilesvg">
                                                <svg class="w-20 h-20 p-4   cursor-pointer text-gray-400 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                                                </svg>
                                                <div class="absolute bottom-1 right-3 cursor-pointer">
                                                    <svg class="w-4 h-4 mr-2 fill-slate-900" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </div>

                                            {{--  img --}}
                                            <img class="w-full h-full rounded-full p-1 hidden object-cover" src=""
                                                alt="" data-asset-url="{{ asset('user/images') . '/' }}"
                                                id="userProfileUpdatePreview">

                                        </div>
                                        {{--   svg user --}}
                                        <input type="file" name="user_profile" id="userProfileUpdateInput" hidden>
                                        <p id="user_update_user_profile_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="updateUserName"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="User Name" required>
                                <p id="user_update_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="updateUserEmail"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Email" required>
                                <p id="user_update_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>

                                <label for="roles"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select As
                                    Role</label>
                                <select name="role_id" id="updateUserRole"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                    <option selected>Choose Role</option>
                                    <option value="2">User</option>
                                    <option value="1">Admin</option>

                                </select>
                                <p id="user_update_role_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="updateUserPassword"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Password">
                                <p id="user_update_password_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>


                            <button type="submit" id="userUpdateSubmit" data-id=""
                                class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Update
                                User</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Update modal End-->






    </div>


    <script>
        /* Profile script */
        /* create */
        const userProfileAddInput = document.getElementById('userProfileAddInput');
        const userProfileAddPreview = document.getElementById('userProfileAddPreview');
        const addUserProfilesvg = document.getElementById('addUserProfilesvg');
        /*   update */
        const userProfileUpdateInput = document.getElementById('userProfileUpdateInput');
        const userProfileUpdatePreview = document.getElementById('userProfileUpdatePreview');
        const updateUserProfilesvg = document.getElementById('updateUserProfilesvg');
        const userUpdateSubmit = document.getElementById('userUpdateSubmit');
        /* create */
        userProfileAddInput.addEventListener('change', function() {
            const selectedFile = userProfileAddInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    userProfileAddPreview.src = event.target.result;
                    userProfileAddPreview.classList.remove('hidden')
                    addUserProfilesvg.classList.add('hidden')

                };

                reader.readAsDataURL(selectedFile);
            } else {
                userProfileAddPreview.src = '';
                userProfileAddPreview.classList.add('hidden')
                addUserProfilesvg.classList.remove('hidden')

            }
        });

        /* create */
        /* update */
        userProfileUpdateInput.addEventListener('change', function() {
            const selectedFile = userProfileUpdateInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    userProfileUpdatePreview.src = event.target.result;
                    userProfileUpdatePreview.classList.remove('hidden')
                    updateUserProfilesvg.classList.add('hidden')

                };

                reader.readAsDataURL(selectedFile);
            } else {
                userProfileUpdatePreview.src = '';
                userProfileUpdatePreview.classList.add('hidden')
                updateUserProfilesvg.classList.remove('hidden')

            }
        });
        /* update */
        const addUserForm = document.getElementById('addUserForm');
        const closeCreateUserProfile = () => {
            addUserForm.reset();
            userProfileAddPreview.src = '';
            userProfileAddPreview.classList.add('hidden')
            addUserProfilesvg.classList.remove('hidden')

        }
        /* Profile script */


        /* Create User */
        //const addUserForm = document.getElementById('addUserForm');

        addUserForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(addUserForm);

            try {
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });

                const response = await axios.post('/user/store', formData);

                if (response.status === 201) {
                    Notiflix.Loading.remove();
                    addUserForm.reset();
                    window.location.reload();
                }
            } catch (error) {
                Notiflix.Loading.remove();

                if (error.response && error.response.status === 422) {
                    const allError = error.response.data.errors;

                    for (const field in allError) {
                        const errorDiv = document.getElementById(`user_${field}_error`);

                        if (errorDiv) {
                            errorDiv.innerHTML = '';
                            allError[field].forEach(errorMessage => {
                                const p = document.createElement('p');
                                p.innerText = errorMessage;
                                errorDiv.appendChild(p);
                            });
                        }
                    }
                } else {
                    console.error('An error occurred:', error);
                }
            }
        });

        /* Create User */

        /* showPrevData */

        const showPrevData = async (id) => {
            const updateUserName = document.getElementById('updateUserName');
            const updateUserEmail = document.getElementById('updateUserEmail');
            const updateUserRole = document.getElementById('updateUserRole');
            const userProfileUpdatePreview = document.getElementById('userProfileUpdatePreview');
            const updateUserProfilesvg = document.getElementById('updateUserProfilesvg');

            try {
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });

                const response = await axios.get(`/user/individual/${id}`);

                if (response.data) {
                    Notiflix.Loading.remove();
                    const {
                        user_profile_image,
                        name,
                        email,
                        id: userId,
                        role_id
                    } = response.data;

                    if (user_profile_image) {
                        const assetUrl = userProfileUpdatePreview.getAttribute('data-asset-url');
                        userProfileUpdatePreview.classList.remove('hidden');
                        updateUserProfilesvg.classList.add('hidden');
                        userProfileUpdatePreview.src = assetUrl + user_profile_image;
                    }

                    updateUserName.value = name;
                    updateUserEmail.value = email;
                    userUpdateSubmit.setAttribute('data-id', userId);

                    for (let i = 0; i < updateUserRole.options.length; i++) {
                        if (updateUserRole.options[i].value === role_id.toString()) {
                            updateUserRole.options[i].selected = true;
                            break;
                        }
                    }
                }
            } catch (error) {
                Notiflix.Loading.remove();
                console.error(error);
            }
        };

        /* showPrevData */

        /* Update Data */
        const updateUserForm = document.getElementById('updateUserForm');

        updateUserForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            const formData = new FormData(updateUserForm);
            const id = userUpdateSubmit.getAttribute('data-id');

            try {
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });

                const response = await axios.post(`/user/update/${id}`, formData);

                if (response.status === 201) {
                    addUserForm.reset();
                    window.location.reload();
                }
            } catch (error) {
                Notiflix.Loading.remove();

                if (error.response && error.response.status === 422) {
                    const allError = error.response.data.errors;

                    for (const field in allError) {
                        const errorDiv = document.getElementById(`user_update_${field}_error`);

                        if (errorDiv) {
                            errorDiv.innerHTML = '';
                            allError[field].forEach(errorMessage => {
                                const p = document.createElement('p');
                                p.innerText = errorMessage;
                                errorDiv.appendChild(p);
                            });
                        }
                    }
                } else {
                    console.error('An error occurred:', error);
                }
            }
        });


        /* Update Data */


        /* delete User */
        const deleteUserFunc = (id) => {
            Notiflix.Confirm.show(
                'User Delete Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/user/delete/${id}`)
                        .then(response => {
                            if (response.status === 201) {
                                window.location.reload();
                            }
                        })
                        .catch(error => console.error(error));
                },
                null, {
                    width: '320px',
                    borderRadius: '8px',
                    messageColor: '#1e1e1e',
                    titleColor: '#DA1010',
                    okButtonColor: '#f8f8f8',
                    okButtonBackground: '#DA1010',
                }
            );
        }

        /* delete User */
    </script>
@endsection
