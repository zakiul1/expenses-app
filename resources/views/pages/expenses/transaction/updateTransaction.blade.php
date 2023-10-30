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
                            <svg class="w-5 h-5 mr-2  text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
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

    <div
    class="  justify-center items-center w-full md:inset-0 ">
    <div class="relative w-full  h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Update Transaction Details
                </h3>

            </div>
            <!-- Modal body -->
            <form id="addTransactionForm" enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" value="{{$detail->name}}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                        <p id="transaction_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>
                    </div>
                    <div>
                        <label for="employee_id" class="sr-only">Underline select</label>
                        <select id="employee_id" name="employee_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                            @foreach ($employees as $em)
                            <option value="" {{$em->id == $employee->id ? 'selected' : ''}} >{{$em->first_name}}</option>
                            @endforeach
                        </select>
                        <p id="transaction_employee_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>
                    </div>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="amount" id="amount" value="{{$detail->amount}}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="" required />
                        <label for="amount"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Amount</label>
                        <p id="transaction_amount_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>
                    </div>

                    <div>
                        <label for="category_id" class="sr-only">Underline select</label>
                        <select id="category_id" name="category_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            @foreach ($categories as $ct)
                            <option value="" {{$ct->id == $category->id ? 'selected' : ''}} >{{$ct->name}}</option>
                            @endforeach

                        </select>
                        <p id="transaction_category_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>
                    </div>

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="expense_date" id="expense_date" value="{{$detail->expense_date}}"
                            value=""
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="expense_date"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expenses
                            Date</label>
                        <p id="transaction_expense_date_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>
                    </div>

                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="multiple_files">Upload Image </label>
                        <input id="images_path"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            name="images_path[]" type="file" multiple accept="image/*">
                        <p id="transaction_images_path_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                        </p>

                       @if ($detail->images_path == "null")

                     @else

                     <div class="flex flex-wrap items-center mb-2" id="tnxDetailImgUpdate">
                        @foreach ($images as $item)
                          <div class="p-2 bg-gray-200 relative flex justify-center items-center">
                            <img class="w-12 h-12 object-cover  rounded-lg" src="{{ asset('images/'. $item) }}" alt="">
                            <button class="right-[-10px] top-[-5px] px-2 py-1 absolute rounded-lg">
                                <svg  class="w-4 h-4 fill-red-700"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        @endforeach

                    </div>
                       @endif
                    </div>
                    <div>


                        <div class="mb-4">
                            <label for="imageInput" class="block text-sm font-medium text-gray-700">Choose
                                Images</label>
                            <input type="file" id="imageInput" name="images" accept="image/*" multiple
                                class="py-2 px-3 rounded-lg border border-gray-300">
                        </div>
                        <div class="mb-4 flex gap-2 flex-wrap" id="imagePreview"></div>
                    </div>

                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-3">

                    <div class="sm:col-span-3">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="3" name="description"
                            class="block  p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Write Expenses description here">{{$detail->description}}</textarea>
                    </div>
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
                        Update Transaction Details
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>
@endsection
