@extends('layouts.app')

@section('content')
    <div class="px-4 pt-6 h-screen">
        {{-- Bradcums  End --}}
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>




                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('expenses.transaction') }}"
                                    class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">transactions</a>
                            </div>
                        </li>



                    </ol>
                </nav>
                {{-- uPPER Table --}}
                <form class="pb-2 border-b border-solid border-gray-300" action="{{ route('expenses.transaction') }}"
                    method="GET">
                    <div class="items-center justify-between lg:flex">
                        <div class="mb-4 lg:mb-0">
                            <h3 class="mb-2 text-2xl font-semibold text-gray-600 dark:text-white">Transactions</h3>

                        </div>
                        <div class="items-center mb-2 md:mb-0 flex sm:flex">

                            <div class="flex items-center space-x-2 md:space-x-4">
                                {{--    <div class="relative">

                                    <input name="fromDate" type="date" 
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-xs  rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full  md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="From">
                                </div>
                                <div class="relative">
                                    <input name="toDate" type="date"
                                        class="flex items-center justify-center bg-gray-50 border border-gray-300 text-gray-900 text-xs  rounded-lg focus:ring-primary-500 focus:border-primary-500  w-full md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="To">
                                </div> --}}

                                {{-- start --}}

                                <div date-rangepicker class="flex items-center">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input name="fromDate" datepicker type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs md:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input name="toDate" type="text" datepicker
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-xs md:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Select date end">
                                    </div>
                                </div>

                                {{-- start --}}

                            </div>
                            {{-- Submit Button --}}
                            <div class="">
                                <button type="submit"
                                    class="  sm:mb-0 md:mr-4 ml-2 md:ml-4 inline-flex text-xs   items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg  px-4 py-2 md:py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">

                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Search
                                </button>
                            </div>

                        </div>
                </form>
                <div class="flex justify-end">
                    <button type="button" data-modal-toggle="transactionAddModal"
                        class="inline-flex items-center justify-center px-3 py-2 text-xs md:text-sm lg:text-sm  font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

        {{-- uPPER Table --}}



        {{-- Table  Start --}}

        {{-- Table  Start --}}
        @if ($totalAmount)
            <div class="py-2">
                <h2 class="text-xl md:text-3xl pb-2 text-lime-600 ">Total Amount : {{ $totalAmount }}</h2>
            </div>
        @endif


        <div class="flex flex-col mt-3">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100  dark:bg-gray-700">
                                <tr>

                                    <th scope="col"
                                        class="font-bold p-4 w-1/12 text-xs  text-left text-gray-500 uppercase dark:text-gray-400">
                                        id
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-1/12 text-sm font-bold text-left text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-3/12 text-sm font-bold text-center text-gray-500 uppercase dark:text-gray-400">
                                        Amount
                                    </th>

                                    <th scope="col"
                                        class="p-4 w-2/12  text-sm font-bold text-left text-gray-500 uppercase dark:text-gray-400">
                                        Expenses By
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-2/12  text-sm font-bold text-left text-gray-500 uppercase dark:text-gray-400">
                                        Description
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-3/12  text-sm font-bold text-center text-gray-500 uppercase dark:text-gray-400">
                                        Purpose
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-3/12  text-sm font-bold text-center text-gray-500 uppercase dark:text-gray-400">
                                        Date
                                    </th>
                                    @if (auth()->user()->role->name === 'admin')
                                        <th scope="col"
                                            class="p-4 w-3/12  text-sm font-bold text-center text-gray-500 uppercase dark:text-gray-400">
                                            Documents
                                        </th>
                                        <th scope="col"
                                            class="p-4 w-3/12  text-sm font-bold text-center text-gray-500 uppercase dark:text-gray-400">
                                            Action
                                        </th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @if ($message)
                                    @foreach ($transactions as $transaction)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-2 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->id }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-left text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->name }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->amount }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-left text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ isset($transaction->employee->first_name, $transaction->employee->first_name) ? $transaction->employee->first_name . ' ' . $transaction->employee->last_name : '' }}
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-left text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->description }}
                                            </td>
                                            <td
                                                class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ isset($transaction->category->name) ? $transaction->category->name : '' }}
                                            </td>
                                            <td
                                                class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->expense_date }}</td>

                                            @if (auth()->user()->role->name === 'admin')
                                                <td
                                                    class="p-2 text-base font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex gap-1">
                                                        @php
                                                            $imagePath = json_decode($transaction->images_path, true);

                                                        @endphp
                                                        @if (!empty($imagePath))
                                                            <a
                                                                href="{{ route('transaction.images.download', ['id' => $transaction->id]) }}">
                                                                <button type="button"
                                                                    class="p-2 flex text-blue-600 items-center rounded hover:bg-gray-100">
                                                                    Images
                                                                    <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400"
                                                                        fill="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        aria-hidden="true">
                                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                                            d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="sr-only">Download</span>
                                                                </button>
                                                            </a>
                                                        @endif
                                                        @php
                                                            $documentPath = json_decode($transaction->documents_path, true);

                                                        @endphp

                                                        @if (!empty($documentPath))
                                                            <a
                                                                href="{{ route('transaction.document.download', ['id' => $transaction->id]) }}">
                                                                <button type="button"
                                                                    class="p-2 flex text-blue-600 items-center rounded hover:bg-gray-100">
                                                                    Documents
                                                                    <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400"
                                                                        fill="currentColor" viewBox="0 0 24 24"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        aria-hidden="true">
                                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                                            d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="sr-only">Download</span>
                                                                </button>
                                                            </a>
                                                        @endif

                                                    </div>
                                                </td>

                                                <td class="p-2 text-right space-x-2 whitespace-nowrap">
                                                    <a
                                                        href="{{ route('expenses.transaction.update', ['id' => $transaction->id]) }}">
                                                        <button {{-- onclick="updateBank({{ $transaction->id }})" --}} {{--   data-modal-target="update-bank-modal"
                                                    data-modal-toggle="update-bank-modal" --}} type="button"
                                                            data-id="{{-- {{ $category->id }} --}}"
                                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                            <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                                </path>
                                                                <path fill-rule="evenodd"
                                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Edit
                                                        </button>
                                                    </a>

                                                    <button type="button"
                                                        onclick="deleteExpensesTnxFunc({{ $transaction->id }})"
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
                                                        Delete
                                                    </button>

                                                </td>
                                            @endif

                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="">
                                        <td class="text-red-600">Data Not Found</td>
                                    </tr>
                                @endif


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /pagination --}}
        <div class="flex justify-end items-end   mt-3">
            <nav aria-label="Page navigation example">
                {{ $transactions->links() }}
            </nav>
        </div>
        {{-- /pagination End --}}



        {{-- Table  End --}}


        <!-- Modal toggle -->


        <!-- Main modal -->
        <div id="transactionAddModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Add Transaction
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="transactionAddModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form id="addTransactionForm" enctype="multipart/form-data">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name"
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
                                    <option value="" selected>Expenses By</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">
                                            {{ $employee->first_name . ' ' . $employee->last_name }}</option>
                                    @endforeach
                                </select>
                                <p id="transaction_employee_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                        </div>
                        <div class="grid gap-4 mb-4 sm:grid-cols-3">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" name="amount" id="amount"
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
                                    <option value="" selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <p id="transaction_category_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="expense_date" id="expense_date"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="expense_date"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expenses
                                    Date</label>
                                <p id="transaction_expense_date_error"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
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
                            </div>
                            <div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="document_path">Upload Document</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    name="documents_path[]" id="documents_path" type="file" multiple
                                    accept=".pdf, .xls, .xlsx, .doc, .docx, .txt">
                                <p id="transaction_documents_path_error"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-4 mb-4 sm:grid-cols-3">

                            <div class="sm:col-span-3">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea id="description" rows="3" name="description"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write Expenses description here"></textarea>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white inline-flex items-center bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add Transaction
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Main modal -->


    </div>






    <script>
        const getId = (id) => document.getElementById(id);
        const addTransactionForm = getId('addTransactionForm')
        addTransactionForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(addTransactionForm);

                //console.log(formData);
                const response = await axios.post('/expenses/transaction/store', formData);

                if (response.status === 201) {
                    addTransactionForm.reset();
                    window.location.reload();
                }
            } catch (error) {

                if (error.response && error.response.status === 422) {
                    const allError = error.response.data.errors
                    // console.log(allError);
                    for (const field in allError) {
                        const errorDiv = document.getElementById(`transaction_${field}_error`);
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
                //departmentError.innerText = error.response.data.message;

            }
        });




        const deleteExpensesTnxFunc = (id) => {

            Notiflix.Confirm.show(
                'Transaction Delete  Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/expenses/transaction/delete/${id}`)
                        .then(response => {
                            // Handle success
                            if (response.status === 201) {
                                window.location.reload();
                            }

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
