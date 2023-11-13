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
                                    tt-orders</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class=" text-2xl font-semibold text-gray-600 dark:text-white">TT
                        Orders List</h1>


                    <button type="button" data-modal-target="addInvoiceModal" data-modal-toggle="addInvoiceModal"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add Invoice</span>
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
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Invoice Number
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Invoice Value
                                    </th>

                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Buyer
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Factory
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Bank
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Created By
                                    </th>

                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Factory Value
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Status
                                    </th>


                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @if ($invoices)
                                    @foreach ($invoices as $invoice)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-4 text-base  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->invoice_no }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->invoice_value }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-left font-medium text-gray-900 whitespace-normal dark:text-white">
                                                {{ $invoice->buyer->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->factory->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->bank->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->user->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $invoice->factory_value }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{--  {{ $invoice->factory_value }} --}}<span
                                                    class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">Runing</span>
                                            </td>

                                            <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                                <a href="{{ route('invoice.details', ['id' => $invoice->id]) }}">
                                                    <button
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                                        <svg class="mr-2" width="16px" height="16px"
                                                            viewBox="0 0 512 512" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <title>details</title>
                                                                <g id="Page-1" stroke="none" stroke-width="1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <g id="Combined-Shape" fill="#ffffff"
                                                                        transform="translate(64.000000, 64.000000)">
                                                                        <path
                                                                            d="M384,64 L384,384 L64,384 L64,64 L384,64 Z M341.333333,106.666667 L106.666667,106.666667 L106.666667,341.333333 L341.333333,341.333333 L341.333333,106.666667 Z M320,1.42108547e-14 L320,42.6666667 L42.666,42.666 L42.6666667,320 L1.42108547e-14,320 L1.42108547e-14,1.42108547e-14 L320,1.42108547e-14 Z M298.666667,234.666667 L298.666667,277.333333 L149.333333,277.333333 L149.333333,234.666667 L298.666667,234.666667 Z M298.666667,149.333333 L298.666667,192 L149.333333,192 L149.333333,149.333333 L298.666667,149.333333 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        Details
                                                    </button></a>
                                                <button {{-- onclick="updateFactory({{ $invoice->id }})" --}} data-modal-target="updateFactoryModal"
                                                    data-modal-toggle="updateFactoryModal" type="button"
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
                                                <button type="button" {{-- onclick="deleteFactoryFunc({{ $invoice->id }})" --}} id="categoryDeleteBtn"
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
                {{ $invoices->links() }}
            </nav>
        </div>
        {{-- /pagination --}}







        <!-- Invoice Create modal Start-->

        <div class="fixed  left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full flex hidden"
            id="addInvoiceModal" aria-modal="true" role="dialog">
            <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Add New Invoice
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="addInvoiceModal">
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
                        <form id="createInvoiceForm">
                            <div class="grid grid-cols-6 gap-6">
                                {{-- Invoice  Number --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="createInvoiceNumber"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Invoice
                                        Number</label>
                                    <input type="text" name="invoice_no" id="createInvoiceNumber"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="create_invoice_no_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- invoice_value  --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="createInvoiceValue"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Invoice
                                        Value</label>
                                    <input type="number" name="invoice_value" id="createInvoiceValue"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_invoice_value_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Select Buyer  --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <label for="createInvoiceBuyerId"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chose a
                                        Buyer</label>
                                    <select id="createInvoiceBuyerId" name="buyer_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Select Buyer</option>
                                        @foreach ($buyers as $buyer)
                                            <option value="{{ $buyer->id }}"> {{ $buyer->name }} </option>
                                        @endforeach

                                    </select>

                                    <p id="create_invoice_buyer_id_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Invoice factory_id --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <label for="createInvoiceBuyerId"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chose a
                                        Factory</label>
                                    <select id="createInvoiceBuyerId" name="factory_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Select Factory</option>
                                        @foreach ($factories as $factory)
                                            <option value="{{ $factory->id }}"> {{ $factory->name }} </option>
                                        @endforeach
                                    </select>

                                    <p id="create_invoice_factory_id_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Factory Value  --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="createInvoiceFactoryValue"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Factory
                                        Value</label>
                                    <input type="number" name="factory_value" id="createInvoiceFactoryValue"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_factory_value_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Invoice Buyer Bank bank_id --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <label for="createInvoiceBankId"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chose a
                                        Bank</label>
                                    <select id="createInvoiceBankId" name="bank_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Select Bank</option>
                                        @foreach ($banks as $bank)
                                            <option value="{{ $bank->id }}"> {{ $bank->name }} </option>
                                        @endforeach
                                    </select>

                                    <p id="create_invoice_bank_id_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                <input type="hidden" id="createInvoiceUserId" value="{{ auth()->user()->id }}"
                                    name="user_id">

                                <!-- <div class="col-span-6">
                                                    <label for="createInvoiceAddInfo"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Additional Info</label>
                                                    <textarea id="createInvoiceAddInfo" rows="2" name="additional_info"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                    <p id="create_Invoice_additional_info_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                                    </p>
                                                </div> -->
                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="items-center flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button id="submitCreateInvoice"
                            class="text-white bg-blue-700 font-semibold hover:bg-blue-800 focus:ring-4 focus:ring-blue-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Add Invoice</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Invoice  Create modal End-->


        <!-- Factory Update modal  Start-->



        <!-- Factory Update modal  End-->



    </div>
    <script>
        //store buyer
        const createInvoiceForm = document.getElementById('createInvoiceForm');
        const addInvoiceModal = document.getElementById('addInvoiceModal');

        createInvoiceForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(createInvoiceForm);
            // Send data using Axios
            Notiflix.Loading.dots();
            axios.post('/tt-manage/invoice/store', formData)
                .then(function(response) {
                    if (response.status === 201) {
                        Notiflix.Loading.remove();

                        addInvoiceModal.classList.add('hidden')
                        createInvoiceForm.reset();

                        window.location.reload();

                    }
                })
                .catch(function(error) {
                    Notiflix.Loading.remove();
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`create_invoice_${field}_error`);

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


        //Get Data for Set Value Invoice

        /*         const updateFactoryName = document.getElementById('updateFactoryName');
                const updateFactoryEmail = document.getElementById('updateFactoryEmail');
                const updateFactoryPhone = document.getElementById('updateFactoryPhone');
                const updateFactoryAddress = document.getElementById('updateFactoryAddress');
                const updateFactoryAddInfo = document.getElementById('updateFactoryAddInfo');
                const updateFactoryModal = document.getElementById('updateFactoryModal');
                const updateFactoryForm = document.getElementById('updateFactoryForm');
                const submitUpdateFactory = document.getElementById('submitUpdateFactory'); */
        /*   const updateFactory = (id) => {

                    axios.get(`/tt-manage/factory/${id}`)
                        .then(function(response) {
                            if (response.data) {
                                updateFactoryName.value = response.data.name
                                updateFactoryAddress.value = response.data.address
                                updateFactoryPhone.value = response.data.phone_number
                                updateFactoryEmail.value = response.data.email
                                updateFactoryAddInfo.value = response.data.additional_info
                                submitUpdateFactory.setAttribute('data-id', response.data.id);

                            }

                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
         */
        /* Update Bank */

        /*   updateFactoryForm.addEventListener('submit', (event) => {
              event.preventDefault();

              const formData = new FormData(updateFactoryForm);
              let id = submitUpdateFactory.getAttribute('data-id');
              // console.log(formData);
              axios.post(`/tt-manage/factory/update/${id}`, formData)

                  .then(function(response) {
                      // console.log(formData)
                      if (response.status === 201) {
                          updateFactoryForm.reset();
                          updateFactoryModal.classList.add('hidden')
                         // updateBuyerForm.reset();
                          window.location.reload();
                      }
                  })
                  .catch(function(error) {
                      if (error.response && error.response.status === 422) {
                          let allError = error.response.data.errors
                          // console.log(allError);
                          for (const field in allError) {
                              const errorDiv = document.getElementById(`update_factory_${field}_error`);
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
          }); */
        // Update Buyer



        //Delete  data Bank
        /*  const deleteFactoryFunc = (id) => {


             Notiflix.Confirm.show(
                 'Department Delete  Confirm',
                 'Do you want to Delete ?',
                 'Yes',
                 'No',
                 function okCb() {
                     axios.post(`/tt-manage/factory/delete/${id}`)
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


         } */
        /* delete Bank */
    </script>
@endsection
