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
                                <a href="{{ route('invoices.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    tt-manage</a>
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
                                <a href="{{ route('invoices.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    invoices</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class=" text-2xl font-semibold text-gray-600 dark:text-white">Transaction List</h1>


                    <button type="button" data-modal-target="createTransactionModal" data-modal-toggle="createTransactionModal"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add Transaction</span>
                    </button>

                </div>
            </div>
        </div>

        {{-- Header  Start --}}
                <div class="flex gap-3">
         {{--    Total Invoice Value  --}}
         <div
         class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
            <div class="w-full flex flex-col items-center py-3">
                <h2 class="text-l font-semibold text-sky-700 dark:text-white">Total Invoice Value</h2>
                <div class="px-3 py-1 mt-3 bg-gray-700 rounded-md flex items-center justify-center">
                    <h2 class="text-xl font-bold text-white dark:text-white">{{$totalInvoiceValue }}</h2>
                </div>
            </div>
         </div>
     {{--    Total Invoice  Value--}}

        {{--    Total Factory Value  --}}
         <div
         class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
         <div class="w-full flex flex-col items-center py-3">
             <h2 class="text-l font-semibold text-sky-700 dark:text-white">Total Factory Value</h2>
             <div class="px-3 py-1 mt-3 bg-gray-700 rounded-md flex items-center justify-center">
                 <h2 class="text-xl font-bold text-white dark:text-white">{{$totalInvoiceValue }}</h2>
             </div>
         </div>
     </div>
     {{--    Total Factory  Value--}}

    {{--    Total Receive From Buyer  --}}
         <div
         class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
         <div class="w-full flex flex-col items-center py-3">
             <h2 class="text-l font-semibold text-sky-700 dark:text-white">Total Receive From Buyer</h2>
             <div class="px-3 py-1 mt-3 bg-gray-700 rounded-md flex items-center justify-center">
                 <h2 class="text-xl font-bold text-white dark:text-white">{{ $receiveValueFromBuyer }}</h2>
             </div>
         </div>
     </div>
        {{--  Total Receive From Buyer --}}

        {{--    Total Pay TO Factory  --}}
        <div
            class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
            <div class="w-full flex flex-col items-center py-3">
                <h2 class="text-l font-semibold text-sky-700 dark:text-white">Total Pay To Factory</h2>
                <div class="px-3 py-1 mt-3 bg-gray-700 rounded-md flex items-center justify-center">
                    <h2 class="text-xl font-bold text-white dark:text-white">{{ $payValueToFactory }}</h2>
                </div>
            </div>

        </div>
        {{--    Total Pay TO Factory --}}


        {{--    Current Balance  --}}
         <div
            class="mb-4 w-3/12 items-center  justify-between  bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700  dark:bg-gray-800">
            <div class="w-full flex flex-col items-center py-3">
             <h2 class="text-l font-semibold text-sky-700 dark:text-white">Total Current Balance</h2>
             <div class="px-3 py-1 mt-3 bg-gray-700 rounded-md flex items-center justify-center">
                 <h2 class="text-xl font-bold text-white dark:text-white">{{  $currentTotalBalance }}</h2>
             </div>
             </div>
         </div>
        {{--    Current Balance --}}

        </div>
        {{-- Header  End --}}

        {{-- Table  Start --}}
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        {{-- tabs --}}
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#transactionTab" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="receiveFromBuyerTab-tab" data-tabs-target="#receiveFromBuyerTab" type="button" role="tab" aria-controls="receiveFromBuyerTab" aria-selected="false">Recive From Buyer</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#payToFactoryTab" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Pay Factory</button>
                                </li>
                              
                            </ul>
                        </div>
                        {{-- tabs header--}}
                        <div id="transactionTab">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="receiveFromBuyerTab" role="tabpanel" aria-labelledby="receiveFromBuyerTab-tab">
                                {{-- receiveFromBuyerTab content Start--}}
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
        
                                            <th scope="col"
                                                class="p-4 w-2/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                id
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Amount
                                            </th>
        
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Transaction Type
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                               Date
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Added By
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @if ($transactions)
                                            @foreach ($transactions as $transaction)
                                           @if ($transaction->type_of_transaction === 1)
                                           <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
        
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->id }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->value }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->type_of_transaction === 1?'Receive From Buyer':'Pay Factory'  }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->transaction_date  }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->user->name  }}</td>
    
                                                <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                                    <button onclick="updateTransaction({{ $transaction->id }})"
                                                        data-modal-target="updateTransactionModal"
                                                        data-modal-toggle="updateTransactionModal" type="button"
                                                        data-id="{{ $transaction->id }}"
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Edit
                                                    </button>
                                                    <button type="button" data-id="{{ $transaction->id }}"
                                                        onclick="deleteTransaction({{ $transaction->id }})" id="departmentDeleteBtn"
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
                                        </tr>
                                           @endif
                                        @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table>

                                {{-- receiveFromBuyerTab content End--}}
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="payToFactoryTab" role="tabpanel" aria-labelledby="dashboard-tab">
                                  {{-- payToFactoryTab content Start--}}
                                  <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
        
                                            <th scope="col"
                                                class="p-4 w-2/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                id
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Amount
                                            </th>
        
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Transaction Type
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                               Date
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Added By
                                            </th>
                                            <th scope="col"
                                                class="p-4 w-2/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @if ($transactions)
                                            @foreach ($transactions as $transaction)
                                           @if ($transaction->type_of_transaction === 2)
                                           <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
        
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->id }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->value }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->type_of_transaction === 1?'Receive From Buyer':'Pay Factory'  }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->transaction_date  }}</td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $transaction->user->name  }}</td>
    
                                            <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                                <button onclick="updateTransaction({{ $transaction->id }})"
                                                    data-modal-target="updateTransactionModal"
                                                    data-modal-toggle="updateTransactionModal" type="button"
                                                    data-id="{{ $transaction->id }}"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button type="button" data-id="{{ $transaction->id }}"
                                                    onclick="deleteTransaction({{ $transaction->id }})" id="departmentDeleteBtn"
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
                                        </tr>
                                           @endif
                                        @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table>

                                {{-- payToFactoryTab content End--}}
                            </div>
                            
                        </div>

                        {{-- tabs --}}
                     
                    </div>
                </div>
            </div>
        </div>

        {{-- Table  End --}}


        {{-- /pagination --}}
       {{--  <div class="flex justify-end items-end   mt-3">
            <nav aria-label="Page navigation example">
                {{ $invoices->links() }}
            </nav>
        </div> --}}
        {{-- /pagination --}}







      <!-- Transaction Create modal -->
      <div id="createTransactionModal" tabindex="-1" aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="createTransactionModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Transaction </h3>
                    <form class="space-y-6" id="createTransactionForm">
                        {{--  Value --}}
                        <div>
                            <label for="createTransactionValue"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                            <input type="number" name="value" id="createTransactionValue"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p id="create_transaction_value_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                        </div>
                        {{--  select Type Of Transacion --}}
                        <div>

                                <label for="createTransactionType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Transaction Type</label>
                                <select id="createTransactionType" name="type_of_transaction" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose Type</option>
                                <option value="1">Receive</option>
                                <option value="2">Pay</option>

                                </select>

                            <p id="create_transaction_type_of_transaction_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                        </div>
                        {{--  Date --}}
                        <div>
                            <label for="createTransactionDate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" name="transaction_date" id="createTransactionDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p id="create_transaction_date_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                        </div>
                        <input type="hidden" value="{{ $totalInvoiceId }}" name="invoice_id">
                        <input type="hidden" value="{{ auth()->id() }}" name="user_id">

                        <button type="submit"
                            class="w-full text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            Transaction</button>

                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- Transaction Create modal End-->


        <!-- Factory Update modal  Start-->

        <div id="updateTransactionModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button"
                      class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-hide="updateTransactionModal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                          viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
                  <div class="px-6 py-6 lg:px-8">
                      <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Transaction </h3>
                      <form class="space-y-6" id="updateTransactionForm">
                          {{--  Value --}}
                          <div>
                              <label for="updateTransactionValue"
                                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                              <input type="number" name="value" id="updateTransactionValue"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                  required>
                              <p id="update_transaction_value_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                          </div>
                          {{--  select Type Of Transacion --}}
                          <div>
        
                                  <label for="updateTransactionType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Transaction Type</label>
                                  <select id="updateTransactionType" name="type_of_transaction" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option selected>Choose Type</option>
                                  <option value="1">Receive</option>
                                  <option value="2">Pay</option>
        
                                  </select>
        
                              <p id="update_transaction_type_of_transaction_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                          </div>
                          {{--  Date --}}
                          <div>
                              <label for="updateTransactionDate"
                                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                              <input type="date" name="transaction_date" id="updateTransactionDate"
                                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                  required>
                              <p id="update_transaction_date_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                          </div>
                          <input type="hidden" value="{{ $totalInvoiceId }}" name="invoice_id">
                          <input type="hidden" value="{{ auth()->id() }}" name="user_id">
        
                          <button type="submit" id="submitUpdateTransaction"
                              class="w-full text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                              Transaction</button>
        
                      </form>
                  </div>
              </div>
          </div>
        </div>

        <!-- Factory Update modal  End-->



    </div>

<script>
     // Department Data send

     const createTransactionForm = document.getElementById('createTransactionForm');


        createTransactionForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(createTransactionForm);
                const response = await axios.post('/tt-manage/invoice/transaction/store', formData);

                if (response.status === 201) {
                    createTransactionForm.reset();
                    window.location.reload();
                }
            } catch (error) {
                if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`create_transaction_${field}_error`);

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
            }
        });



            // Get Data Transaction To  Set Value Function

        const updateTransactionValue = document.getElementById('updateTransactionValue');
        const updateTransactionDate = document.getElementById('updateTransactionDate');
        const updateTransactionType = document.getElementById('updateTransactionType');
      
        const updateTransactionModal = document.getElementById('updateTransactionModal');
        const updateTransactionForm = document.getElementById('updateTransactionForm');
        const submitUpdateTransaction = document.getElementById('submitUpdateTransaction');
        const updateTransaction = (id) => {

            axios.get(`/tt-manage/invoice/transaction/${id}`)
                .then(function(response) {
                    if (response.data) {
                        updateTransactionValue.value = response.data.value
                        updateTransactionDate.value = response.data.transaction_date
                    
                         submitUpdateTransaction.setAttribute('data-id', response.data.id); 

                      //set Id Value Func
                      const typeOftransaction = response.data.type_of_transaction;
                      console.log(updateTransactionDate);
                        for (let i = 0; i < updateTransactionType.options.length; i++) {
                            if (updateTransactionType.options[i].value === typeOftransaction.toString()) {
                                updateTransactionType.options[i].selected = true;
                                break; // Exit the loop once a match is found
                            }
                        }
                        //set Id Value Func
                     
                    }

                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        // Get Data Transaction To  Set Value Function End


          /* Update Function Transaction */

          updateTransactionForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(updateTransactionForm);
            let id = submitUpdateTransaction.getAttribute('data-id');
            // console.log(formData);
            axios.post(`/tt-manage/invoice/transaction/update/${id}`, formData)

                .then(function(response) {
                    // console.log(formData)
                    if (response.status === 200) {
                        updateTransactionForm.reset();
                        window.location.reload();
                    }
                })
                .catch(function(error) {
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`update_transaction_${field}_error`);
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
        /* Update Transaction End */
</script>
@endsection
