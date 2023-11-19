@extends('layouts.app')
@section('content')
    {{-- Bradcums  --}}
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
                                <a href="{{ route('employee.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    employee</a>
                            </div>
                        </li>
                        {{--     <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('employee.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    category</a>
                            </div>
                        </li> --}}

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl font-semibold text-gray-500 md:text-2xl dark:text-white">Employee List</h1>

                    {{--   <button data-modal-target="employee-create-modal" data-modal-toggle="employee-create-modal"
                        class="bg-sky-700 hover:bg-sky-800 text-white font-semibold hover:text-white py-1 px-8 border border-gray-500 hover:border-transparent rounded">
                        Add
                    </button> --}}
                    <button type="button" data-modal-target="employee-create-modal"
                        data-modal-toggle="employee-create-modal" data-modal-toggle="attendance-entry-modal"
                        data-modal-toggle="category-create-modal"
                        class="inline-flex items-center justify-center  px-3 py-2 text-xs md:text-sm font-medium text-center text-white rounded-lg bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 sm:w-auto dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add User</span>
                    </button>

                </div>
            </div>
        </div>


        {{-- Table  Start --}}


        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-sky-100 dark:bg-gray-700">
                                <tr>


                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>

                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Phone
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Department Name
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Address
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Join Date
                                    </th>
                                    @if (auth()->user()->role->name === 'admin')
                                        <th scope="col"
                                            class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                            Documents
                                        </th>
                                        <th scope="col"
                                            class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                            Download All Info
                                        </th>

                                        <th scope="col"
                                            class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                            Action
                                        </th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody class="bg-sky-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @foreach ($employees as $employee)
                                    <tr class="hover:bg-sky-100 dark:hover:bg-gray-700">
                                        <td class="flex items-center  p-4 mr-12 space-x-2 whitespace-nowrap">
                                         
                                            @if ($employee->image_path)
                                                <div class="w-8 h-8 rounded-full">
                                                    <img class="w-8 h-8 rounded-full  object-cover"
                                                        src="{{ asset('employee/images') . '/' . $employee->image_path }}"
                                                        alt="employee profile">
                                                </div>
                                            @endif

                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                <div class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $employee->first_name . ' ' . $employee->last_name }}
                                                </div>

                                            </div>
                                        </td>


                                        <td
                                            class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $employee->phone }}</td>
                                        <td
                                            class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $employee->email }}</td>
                                        <td
                                            class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $employee->department->name }}</td>
                                        <td
                                            class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $employee->address }}</td>
                                        <td
                                            class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $employee->join_date }}</td>
                                        @if (auth()->user()->role->name === 'admin')
                                            <td
                                                class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                @php
                                                    $json = json_decode($employee->document_path);
                                                   
                                                @endphp
                                                @if ($json)
                                                <a
                                                        href="{{ route('employee.download.documents', ['id' => $employee->id]) }}">

                                                        <button type="button"
                                                            class="p-2 flex text-sky-600 items-center rounded hover:bg-sky-100">Download

                                                            <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400"
                                                                fill="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                                    d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                                                </path>
                                                            </svg>
                                                            <span class="sr-only">Download</span>
                                                        </button>
                                                    </a>
                                                @else
                                                    
                                                @endif
                                            </td>
                                            <td
                                                class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">


                                                <a
                                                    href="{{ route('employee.download.allInfo', ['id' => $employee->id]) }}">

                                                    <button type="button"
                                                        class="p-2 flex text-sky-600 items-center rounded hover:bg-sky-100">Details

                                                        <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400"
                                                            fill="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                                d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Download</span>
                                                    </button>
                                                </a>

                                            </td>
                                        @endif

                                        @if (auth()->user()->role->name === 'admin')
                                            <td class="p-2 text-right space-x-2 whitespace-nowrap">


                                                <a href="{{ url('employee/details/update') . '/' . $employee->id }}">
                                                    <button type="button" data-id="{{ $employee->id }}"
                                                        id="updateButton" {{--  data-modal-toggle="transactionEditModal" --}}
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Update
                                                    </button>
                                                </a>

                                                <button data-id="{{ $employee->id }} "
                                                    onclick="deleteEmployeeFunc({{ $employee->id }})"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span>
                                                        Delete
                                                    </span>
                                                </button>
                                            </td>
                                        @endif


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
                {{ $employees->links() }}
            </nav>
        </div>
        {{-- /pagination End --}}

    </div>



    <!-- Employee Create modal -->
    <div id="employee-create-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Add New Employee
                    </h3>
                    <button type="button" onclick="closeCreateEmpModal()"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="employee-create-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form id="employeeCreateForm" enctype="multipart/form-data">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="text" name="first_name" id="first_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " required />
                                    <label for="first_name"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                        name</label>
                                    <p id="employee_first_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="text" name="last_name" id="last_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " required />
                                    <label for="last_name"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                        name</label>
                                    <p id="employee_last_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="email" name="email" id="email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " required />
                                    <label for="email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                    <p id="employee_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="text" name="phone" id="phone"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " required />
                                    <label for="phone"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                        Number</label>
                                    <p id="employee_phone_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="date" name="join_date" id="join_date"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " />
                                    <label for="join_date"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Join Date</label>
                                    <p id="employee_join_date_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="relative z-0 w-full mb-1 group">

                                    <label for="underline_select" class="sr-only">Underline select</label>
                                    <select id="underline_select" name="department_id"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                        <option value="" selected>Select A Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                    <p id="employee_department_id_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-6 ">
                                <div class="relative z-0 w-full mb-1 group">
                                    <input type="text" name="address" id="address"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-sky-500 focus:outline-none focus:ring-0 focus:border-sky-600 peer"
                                        placeholder=" " />
                                    <label for="address"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-sky-600 peer-focus:dark:text-sky-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                                    <p id="employee_address_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>
                            {{--     image --}}
                            <div class="col-span-6 sm:col-span-3">

                                <div class="flex flex-col items-start justify-start w-full">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="multiple_files">Upload Profile Picture </label>
                                    <input name="image_path" class="w-full" aria-describedby="image_path"
                                        id="create_image_path" accept="image/*" type="file">
                                    <div id="previewCreateImgEmployeeDiv"
                                        class=" p-2 mt-3  hidden bg-gray-200 rounded-sm">

                                        <div class="flex justify-center items-center w-full">
                                            <img class="h-20 w-20 p-1 rounded-full object-cover"
                                                id="previewCreateImgEmployee" alt="">
                                        </div>


                                    </div>
                                </div>

                                <p id="employee_image_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            {{--  Document --}}
                            <div class="col-span-6 sm:col-span-3">

                                <div class="flex flex-col items-start justify-start w-full">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="multiple_files">Upload Documents </label>
                                    <input name="documents_path[]" class="w-full" aria-describedby="documents_path"
                                        id="create_documents_path"
                                        accept=".pdf, .doc, .docx, .txt, .rtf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        type="file" multiple>
                                    <div id="previewCreateDocumentEmployeeDiv"
                                        class=" p-2 mt-3  hidden bg-gray-200 rounded-sm">

                                        <div class="flex justify-center items-center w-full">

                                            <svg class="h-20 w-20 p-1  text-sky-600 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 16 20">
                                                <path
                                                    d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                                <path
                                                    d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-2.359 10.707-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L7 12.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>

                                        </div>


                                    </div>
                                </div>

                                <p id="employee_create_documents_path_error"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>


                        </div>
                        <div class="border-t-2 border-solid mt-6 border-gray-200">
                            <div class="flex justify-end items-end p-4">
                                <button type="submit"
                                    class="text-white font-semibold bg-gradient-to-r from-cyan-500 to-sky-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800  rounded-lg text-sm px-7 py-2.5 text-center mr-2 mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->


            </div>
        </div>
    </div>





    <script>
        const employeeCreateForm = document.getElementById('employeeCreateForm');
        /* Reset Modal */
        const closeCreateEmpModal = () => {
            employeeCreateForm.reset();
        }
        /* Reset Modal */

        employeeCreateForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(employeeCreateForm);
            Notiflix.Loading.dots({
                svgColor: "#fff"
            });
            axios.post('/employee/store', formData)

                .then(function(response) {
                    if (response.status === 201) {
                        employeeCreateForm.reset();
                        window.location.reload();
                        Notiflix.Loading.remove()
                    }
                })
                .catch(function(error) {
                    Notiflix.Loading.remove()
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`employee_${field}_error`);
                            if (errorDiv) {
                                // Clear any previous error message
                                errorDiv.innerHTML = '';
                                // Set the error message(s)
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
                });
        });


        //preview script
        const imageInput = document.getElementById('create_image_path');
        const imagePreview = document.getElementById('previewCreateImgEmployee');
        const imagePreviewDiv = document.getElementById('previewCreateImgEmployeeDiv');
        imageInput.addEventListener('change', function() {
            const selectedFile = imageInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    imagePreview.src = event.target.result;
                    imagePreviewDiv.classList.remove('hidden')

                };

                reader.readAsDataURL(selectedFile);
            } else {
                imagePreview.src = '';
                imagePreviewDiv.classList.add('hidden')
            }
        });

        /* document view */

        const docInput = document.getElementById('create_documents_path');
        const docPreview = document.getElementById('previewCreateDocumentEmployee');
        const docPreviewDiv = document.getElementById('previewCreateDocumentEmployeeDiv');
        docInput.addEventListener('change', function() {
            const selectedFile = docInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {

                    docPreviewDiv.classList.remove('hidden')

                };

                reader.readAsDataURL(selectedFile);
            } else {

                docPreviewDiv.classList.add('hidden')
            }
        });


        /*  delete Employee */


        const deleteEmployeeFunc = (id) => {

            Notiflix.Confirm.show(
                'Employee Delete  Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/employee/details/delete/${id}`)
                        .then(response => {
                            // Handle success
                            if (response.status === 201) {


                                window.location.assign("/employee/list");
                            }
                            //console.log(response.data);
                            // You can update your page or UI as needed
                        })
                        .catch(error => {
                            // Handle error
                            console.error(error);
                        });
                },
                function cancelCb() {

                }, {
                    width: '320px',
                    borderRadius: '8px',
                    messageColor: '#1e1e1e',
                    titleColor: '#DA1010',
                    okButtonColor: '#f8f8f8',
                    okButtonBackground: '#DA1010',
                },
            );

        }
    </script>
@endsection
