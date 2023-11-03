@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen ">
        {{-- Bradcums  End --}}
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ URL::previous() }}"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2  text-blue-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                                </svg>
                                <span class="text-base text-blue-500"> Back</span>
                            </a>
                        </li>



                    </ol>
                </nav>

            </div>

        </div>
        {{-- Table  Start --}}

        {{-- Table  Start --}}

        <div class="  justify-center items-center w-full md:inset-0 ">
            <div class="relative w-full  h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class=" flex justify-between items-center pb-4 mb-6 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-3xl font-semibold text-gray-500 dark:text-white">
                            Update Transaction Details
                        </h3>

                    </div>
                    <!-- Modal body -->
                    <form id="updateTransactionForm" action="{{ url('expenses/transaction/update/') . '/' . $detail->id }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name" value="{{ $detail->name }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="name"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>

                                @error('name')
                                    <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="employee_id" class="sr-only">Underline select</label>
                                <select id="employee_id" name="employee_id" required
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                                    @foreach ($employees as $em)
                                        <option value="{{ $em->id }}"
                                            {{ $em->id == $employee->id ? 'selected' : '' }}>
                                            {{ $em->first_name }}</option>
                                    @endforeach
                                </select>
                                <p id="transaction_employee_id_update_error"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                        </div>
                        <div class="grid gap-4 mb-4 sm:grid-cols-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" name="amount" id="amount" value="{{ $detail->amount }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="" required />
                                <label for="amount"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Amount</label>

                                @error('amount')
                                    <p id="transaction_amount_id_update_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400"> {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="category_id" class="sr-only">Underline select</label>
                                <select id="category_id" name="category_id"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    @foreach ($categories as $ct)
                                        <option value="{{ $ct->id }}"
                                            {{ $ct->id == $category->id ? 'selected' : '' }}>
                                            {{ $ct->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <p id="transaction_category_id_update_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400"> {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="expense_date" id="expense_date"
                                    value="{{ $detail->expense_date }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="expense_date"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expenses
                                    Date</label>
                                @error('expense_date')
                                    <p id="transaction_expense_date_update_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400"> {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="multiple_files">Upload Images </label>
                                <input id="images_update_path"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    name="images_path[]" type="file" multiple accept="image/*">

                                @error('images_path')
                                    <p id="transaction_images_path_update_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400"> {{ $message }}
                                    </p>
                                @enderror

                                @if ($detail->images_path == 'null')
                                @else
                                    <div class="flex gap-3 flex-wrap items-center mt-2 mb-2" id="tnxDetailImgUpdate">

                                        @foreach ($images as $item)
                                            <div data-id="" class="  relative flex justify-center items-center">
                                                <img class="w-20 h-20 object-cover  rounded-sm"
                                                    src="{{ asset('images/' . $item) }}" alt="">
                                                {{--     <button class="right-[-10px] top-[-5px] px-2 py-1 absolute rounded-lg">
                                                    <svg class="w-4 h-4 fill-red-700" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button> --}}
                                            </div>
                                        @endforeach

                                    </div>
                                @endif
                            </div>
                            <div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="multiple_files">Upload Document </label>
                                <input id="documents_update_path"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    name="documents_path[]" type="file" multiple
                                    accept=".pdf, .xls, .xlsx, .doc, .docx, .txt">

                                @error('documents_path')
                                    <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror

                                @if ($detail->documents_path == 'null')
                                @else
                                    <div class="flex gap-3 flex-wrap  mt-2 items-center mb-2" id="tnxUpdateDocDiv">

                                        @foreach ($documents as $item)
                                            <div class="flex items-center ">
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 mr-3 rounded-lg bg-blue-100 dark:bg-primary-900">
                                                    <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                                        fill="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z">
                                                        </path>
                                                        <path
                                                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z">
                                                        </path>
                                                    </svg>

                                                </div>
                                                <span>{{ $item }}</span>
                                            </div>
                                        @endforeach

                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="grid gap-4 mb-4 w-full">

                            <div class="">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="description" rows="3" name="description"
                                    class="block  p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Write Expenses description here">{{ $detail->description }}</textarea>
                                @error('description')
                                    <p id="" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-lime-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Update Transaction
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>


    <script>
        const imgInput = document.getElementById('images_update_path');
        const docInput = document.getElementById('documents_update_path');
        const docDiv = document.getElementById('tnxUpdateDocDiv');
        const imageDiv = document.getElementById('tnxDetailImgUpdate');
        imgInput.addEventListener('change', function() {

            if (imgInput.files.length > 0) {
                imageDiv.classList.add("hidden");
            }
        });
        docInput.addEventListener('change', function() {

            if (docInput.files.length > 0) {
                docDiv.classList.add("hidden");
            }
        });
        /* console.log(fileInput.files.length != 0);
        if (fileInput.files.length !== 0) {
            console.log(fileInput.files.length === 0);
            imageDiv.classList.add("hidden");

        } else {

        } */
    </script>
@endsection
