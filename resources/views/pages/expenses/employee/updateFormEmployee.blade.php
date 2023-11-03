@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="{{ URL::previous() }}"
                            class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                            <svg class="w-5 h-5 mr-2  text-blue-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            <span class="text-base text-blue-500"> Back</span>
                        </a>
                    </li>



                </ol>
            </nav>

        </div>


        {{-- Form Start --}}
        <div class=" w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0max-h-full">
            <div class="relative w-full h-full  px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Update Employee
                        </h3>

                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <form action="{{ url('employee/update/' . $employee->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="text" value="{{ $employee->first_name }}" name="first_name"
                                            id="first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="first_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                            name</label>

                                        <p id="employee_first_name_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="text" value="{{ $employee->last_name }}" name="last_name"
                                            id="last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                            name</label>
                                        <p id="employee_last_name_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="email" value="{{ $employee->email }}" name="email" id="email"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="email"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                        <p id="employee_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="text" value="{{ $employee->phone }}" name="phone" id="phone"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="phone"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                            Number</label>
                                        <p id="employee_phone_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="date" value="{{ $employee->date_of_birth }}" name="date_of_birth"
                                            id="date_of_birth"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />
                                        <label for="date_of_birth"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date
                                            Of Birth</label>
                                        <p id="employee_date_of_birth_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">

                                        <label for="underline_select" class="sr-only">Underline select</label>
                                        <select name="department_id"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                                            @foreach ($departments as $dep)
                                                <option value="{{ $dep->id }}"
                                                    {{ $dep->id == $department ? 'selected' : '' }}>
                                                    {{ $dep->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <p id="employee_department_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>

                                <div class="col-span-6 ">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="text" value="{{ $employee->address }}" name="address"
                                            id="address"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="address"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                                        <p id="employee_address_error"
                                            class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        </p>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">

                                    {{--   <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="image_path">Upload Image</label>
                                    <input name="image"
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="image_path" id="image_path" accept="image/*" type="file"> --}}


                                    <div class="flex items-center justify-center w-full">
                                        <label for="image_path"
                                            class="flex flex-col items-center justify-center w-full h-26 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            @if ($employee->image_path)
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <div
                                                        class=" p-2 flex justify-center items-center w-full  overflow-hidden">
                                                        <img class="h-20 w-20 max-w-full max-h-full rounded-full object-cover"
                                                            src="{{ asset('images/' . $employee->image_path) }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @else
                                                <div id="imagePreview"
                                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 16 20">
                                                        <path
                                                            d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z" />
                                                        <path
                                                            d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                            class="font-semibold">Click to upload</span> or drag and drop
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or
                                                        GIF
                                                        (MAX.
                                                        800x400px)</p>
                                                </div>
                                            @endif

                                            <input name="image" class="hidden" aria-describedby="image_path"
                                                id="image_path" accept="image/*" type="file">
                                        </label>
                                    </div>



                                    <p id="employee_image_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">



                                    <div class="flex items-center justify-center w-full">
                                        <label for="document_path"
                                            class="flex flex-col items-center justify-center w-full h-26 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 16 20">
                                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z" />
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PDF, DOC,TXT,EXCEL
                                                    (MAX.
                                                    4MB)</p>
                                            </div>
                                            <input name="document" class="hidden" aria-describedby="image_path"
                                                id="document_path" accept=".pdf, .xls, .xlsx, .doc, .docx, .txt"
                                                type="file">
                                        </label>
                                    </div>
                                    <p id="employee_document_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>
                            <div class="border-t-2 border-solid mt-6 border-gray-200">
                                <div class="flex justify-end items-end p-4">
                                    <button type="submit"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Modal footer -->


                </div>
            </div>
        </div>



    </div>
@endsection
