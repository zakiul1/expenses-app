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
                                <a href="{{ route('expenses.category') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    express</a>
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
                                <a href="{{ route('expenses.category') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    category</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class=" text-2xl font-semibold text-gray-600 dark:text-white">Bank List</h1>


                    <button type="button" data-modal-target="add-bank-modal" data-modal-toggle="add-bank-modal"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add Bank</span>
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
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>

                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Email
                                    </th>

                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Address
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Account No
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Swift Code
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Bank Type
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Phone
                                    </th>
                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @if ($banks)
                                    @foreach ($banks as $bank)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-4 text-base  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->email }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-left font-medium text-gray-900 whitespace-normal dark:text-white">
                                                {{ $bank->address }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->account_no }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->swift_code }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->bank_type == 1 ? 'Bayer Bank' : 'Factory Bank' }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $bank->phone_no }}
                                            </td>

                                            <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                                <button onclick="updateBank({{ $bank->id }})"
                                                    data-modal-target="update-bank-modal"
                                                    data-modal-toggle="update-bank-modal" type="button"
                                                    data-id="{{-- {{ $category->id }} --}}"
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
                                                <button type="button" onclick="deleteBankFunc({{ $bank->id }})"
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
                                        </tr>
                                    @endforeach
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
                {{ $banks->links() }}
            </nav>
        </div>
        {{-- /pagination --}}







        <!-- Bank Create modal Start-->
        <div class="fixed  left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full flex hidden"
            id="add-bank-modal" aria-modal="true" role="dialog">
            <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Add New Bank
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="add-bank-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <form id="createBankForm">
                            <div class="grid grid-cols-6 gap-6">
                                {{-- name --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank
                                        Name</label>
                                    <input type="text" name="name" id="create-bank-name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="create_bank_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Bank Account No --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-account-number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Bank Account No
                                    </label>
                                    <input type="text" name="account_no" id="create-bank-account-number"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="create_bank_account_no_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Email Account --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="create-bank-email"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_bank_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Phone No --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-phone-number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                        Number</label>
                                    <input type="text" name="phone_no" id="create-bank-phone-number"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_bank_phone_no_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Swift Code --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-swift-code"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Swift Code</label>
                                    <input type="text" name="swift_code" id="create-bank-swift-code"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_bank_swift_code_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Bank Type --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <label for="create-bank-type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank
                                        Type</label>
                                    <select id="create-bank-type" name="bank_type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a Type</option>
                                        <option value="1">Buyer</option>
                                        <option value="2">Factory</option>

                                    </select>
                                    <p id="create_bank_bank_type_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>

                                <div class="col-span-6">
                                    <label for="create-bank-address"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                    <textarea id="create-bank-address" rows="2" name="address"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                    <p id="create_bank_address_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="items-center flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button id="submitCreatebank"
                            class="text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Add Bank</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bank Create modal End-->


        <!-- Bank Update modal  Start-->
        <div class="fixed  left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full flex hidden"
            id="update-bank-modal" aria-modal="true" role="dialog">
            <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Update Bank
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="update-bank-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <form id="updateBankForm">
                            <div class="grid grid-cols-6 gap-6">
                                {{-- name --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="create-bank-name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank
                                        Name</label>
                                    <input type="text" name="name" id="update-bank-name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="update_bank_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Bank Account No --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="update-bank-account-number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Bank Account No
                                    </label>
                                    <input type="text" name="account_no" id="update-bank-account-number"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="update_bank_account_no_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Email Account --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="update-bank-email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="update-bank-email"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="update_bank_email_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Phone No --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="update-bank-phone-number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                        Number</label>
                                    <input type="text" name="phone_no" id="update-bank-phone-number"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="update_bank_phone_no_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Swift Code --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="update-bank-swift-code"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Swift Code</label>
                                    <input type="text" name="swift_code" id="update-bank-swift-code"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="update_bank_swift_code_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Bank Type --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <label for="update-bank-type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank
                                        Type</label>
                                    <select id="update-bank-type" name="bank_type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a Type</option>
                                        <option value="1">Buyer</option>
                                        <option value="2">Factory</option>

                                    </select>
                                    <p id="update_bank_bank_type_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>

                                <div class="col-span-6">
                                    <label for="update-bank-address"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                    <textarea id="update-bank-address" rows="2" name="address"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                    <p id="update_bank_address_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="items-center flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button id="submitUpdateBank"
                            class="text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Update Bank</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bank Update modal  End-->



    </div>
    <script>
        //store Bank
        const createBankForm = document.getElementById('createBankForm');
        const addBankModal = document.getElementById('add-bank-modal');

        createBankForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(createBankForm);
            // Send data using Axios
            Notiflix.Loading.dots();
            axios.post('/tt-manage/bank/store', formData)
                .then(function(response) {
                    if (response.status === 201) {
                        Notiflix.Loading.remove();

                        addBankModal.classList.add('hidden')
                        createBankForm.reset();

                        /*   Notiflix.Notify.success(response.data.message, {
                              timeout: 30000,
                          }, ); */
                        window.location.reload();
                        //window.location.assign("/tt-manage/banks");
                    }
                })
                .catch(function(error) {
                    Notiflix.Loading.remove();
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`create_bank_${field}_error`);
                            console.log("hi");
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
                    console.log(error)
                });
        });


        //Edit Bank Get Data
        const updateBankName = document.getElementById('update-bank-name');
        const updateBankType = document.getElementById('update-bank-type');
        const updateBankAddress = document.getElementById('update-bank-address');
        const updateBankSwiftCode = document.getElementById('update-bank-swift-code');
        const updateBankPhoneNumber = document.getElementById('update-bank-phone-number');
        const updateBankEmail = document.getElementById('update-bank-email');
        const updateBankAccountNumber = document.getElementById('update-bank-account-number');
        const updateBankModal = document.getElementById('update-bank-modal');
        const updateBankForm = document.getElementById('updateBankForm');
        const submitUpdateBank = document.getElementById('submitUpdateBank');
        const updateBank = (id) => {

            axios.get(`/tt-manage/bank/${id}`)
                .then(function(response) {
                    if (response.data) {
                        updateBankName.value = response.data.name
                        updateBankType.value = response.data.bank_type
                        updateBankAddress.value = response.data.address
                        updateBankSwiftCode.value = response.data.swift_code
                        updateBankPhoneNumber.value = response.data.phone_no
                        updateBankEmail.value = response.data.email
                        updateBankAccountNumber.value = response.data.account_no
                        submitUpdateBank.setAttribute('data-id', response.data.id);

                        //set Id Value Func
                        const bank_type = response.data
                            .bank_type;
                        for (let i = 0; i < updateUserRole.options.length; i++) {
                            if (updateBankType.options[i].value === bank_type.toString()) {
                                updateBankType.options[i].selected = true;
                                break; // Exit the loop once a match is found
                            }
                        }
                        //set Id Value Func
                        updateBankModal.classList.add('hidden')
                        updateBankForm.reset();
                    }

                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        /* Update Bank */

        updateBankForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(updateBankForm);
            let id = submitUpdateBank.getAttribute('data-id');
            // console.log(formData);
            axios.post(`/tt-manage/bank/update/${id}`, formData)

                .then(function(response) {
                    // console.log(formData)
                    if (response.status === 200) {
                        updateBankForm.reset();
                        // window.location.assign("/user/list");
                        window.location.reload();
                    }
                })
                .catch(function(error) {
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`update_bank_${field}_error`);
                            //console.log("hi");
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
        /* Update Bank */



        //Delete  data Bank
        const deleteBankFunc = (id) => {


            Notiflix.Confirm.show(
                'Department Delete  Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/tt-manage/bank/delete/${id}`)
                        .then(response => {
                            // Handle success
                            if (response.status === 201) {


                                window.location.reload();
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
        /* delete Bank */
    </script>
@endsection
