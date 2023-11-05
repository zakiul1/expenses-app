@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen">
        <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="{{ route('employee.list') }}"
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

                                        @error('first_name')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
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
                                        @error('last_name')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="relative z-0 w-full mb-1 group">
                                        <input type="email" value="{{ $employee->email }}" name="email" id="email"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required />
                                        <label for="email"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                        @error('email')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
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
                                        @error('phone')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
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
                                        @error('date_of_birth')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
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

                                        @error('department_id')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
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
                                        @error('address')
                                            <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">

                                    <div class="flex flex-col w-full">
                                        <div>
                                            <h2 class="my-3 text-xl text-gray-500">Update Image</h2>
                                        </div>
                                        <label for="image_path" class="w-full overflow-hidden">

                                            <input name="image" aria-describedby="image_path" id="employee_image_path"
                                                accept="image/*" type="file">

                                        </label>
                                        <div
                                            class="p-2 mt-3 flex {{ $employee->image_path ? 'justify-start items-start' : 'justify-center items-center' }} bg-gray-200 rounded-sm">
                                            @if ($employee->image_path)
                                                <div class="flex justify-center items-center overflow-hidden">
                                                    <img src="{{ asset('employee/images/' . $employee->image_path) }}"
                                                        class="h-20 w-20 p-1 object-cover bg-white rounded-full"
                                                        id="imagePreview" alt="">
                                                    <span
                                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{ $employee->image_path }}</span>
                                                </div>
                                            @else
                                                <svg class="h-20 w-20 p-1  rounded-full bg-white text-gray-800 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 16 20">
                                                    <path fill="currentColor"
                                                        d="M11.045 7.514a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm-4.572 3.072L3.857 15.92h7.949l-1.811-3.37-1.61 2.716-1.912-4.679Z" />
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 1v4a1 1 0 0 1-1 1H1m14 12a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v16ZM11.045 7.514a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM3.857 15.92l2.616-5.333 1.912 4.68 1.61-2.717 1.81 3.37H3.858Z" />
                                                </svg>
                                            @endif

                                        </div>
                                    </div>

                                    @error('image')
                                        <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">



                                    <div class="flex flex-col w-full">
                                        <div>
                                            <h2 class="my-3 text-xl text-gray-500">Update Document</h2>
                                        </div>
                                        <label for="documents_path" class="w-full overflow-hidden">

                                            <input name="documents_path[]" aria-describedby="documents_path" id=""
                                                accept=".pdf, .xls, .xlsx, .doc, .docx, .txt" type="file" multiple>
                                        </label>
                                        <div
                                            class="p-2 mt-3 flex flex-col {{ $doc ? 'justify-start items-start' : 'justify-center items-center' }} bg-gray-200 rounded-sm">


                                            @if ($doc)
                                            @foreach ($doc as $item)
                                            <div class=" flex   w-full justify-center items-center">
                                                <svg class="h-10 w-10 p-1 bg-white rounded-full text-lime-600 dark:text-white"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 16 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 1v4a1 1 0 0 1-1 1H1m4 6 2 2 4-4m4-8v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z" />
                                                </svg>
                                                <span
                                                    class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{ $item }}</span>
                                            </div>
                                        @endforeach
                                            @endif


                                        </div>
                                    </div>
                                    @error('document')
                                        <p id="employee_document_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </p>
                                    @enderror

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



    <script>
        const imageInput = document.getElementById('employee_image_path');
        const imagePreview = document.getElementById('imagePreview');


        imageInput.addEventListener('change', function() {
            const selectedFile = imageInput.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    imagePreview.src = event.target.result;

                };

                reader.readAsDataURL(selectedFile);
            } else {
                imagePreview.src = '';

            }
        });
    </script>
@endsection
