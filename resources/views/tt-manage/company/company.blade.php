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
                                <a href="{{ route('companies.list') }}"
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
                                <a href="{{ route('companies.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    company</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl md:text-2xl font-semibold text-gray-600 dark:text-white">Company List</h1>


                    <button type="button" data-modal-target="addCompanyModal" data-modal-toggle="addCompanyModal"
                        class="inline-flex items-center justify-center px-3 py-2 text-xs md:text-sm font-medium text-center text-white rounded-lg bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 sm:w-auto dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-semibold"> Add Company</span>
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
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Id
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Email
                                    </th>

                                    <th scope="col"
                                        class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Phone Number
                                    </th>

                                    @if (auth()->user()->role->name === 'admin')
                                        <th scope="col"
                                            class="p-4   text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                            Action
                                        </th>
                                    @endif


                                </tr>
                            </thead>
                            <tbody class="bg-sky-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @if ($companies)
                                    @foreach ($companies as $company)
                                        <tr class="hover:bg-sky-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-4 text-base  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $company->id }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $company->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-left font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $company->email }}
                                            </td>
                                            <td
                                                class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $company->phone_number }}
                                            </td>

                                            @if (auth()->user()->role->name === 'admin')
                                                <td class="p-4 text-center space-x-2 whitespace-nowrap">
                                                    <button onclick="updateCompany({{ $company->id }})"
                                                        data-modal-target="updateCompanyModal"
                                                        data-modal-toggle="updateCompanyModal" type="button"
                                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-sky-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
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
                                                    <button type="button" onclick="deleteCompanyFunc({{ $company->id }})"
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
                {{ $companies->links() }}
            </nav>
        </div>
        {{-- /pagination --}}







        <!-- Company Create modal Start-->

        <div class="fixed  left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full flex hidden"
            id="addCompanyModal" aria-modal="true" role="dialog">
            <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Add New Company
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="addCompanyModal">
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
                        <form id="createCompanyForm">
                            <div class="grid grid-cols-3 ">
                                {{-- name --}}
                                <div class="col-span-3 ">
                                    <label for="createCompanyName"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                        Name</label>
                                    <input type="text" name="name" id="createCompanyName"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="create_Company_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Emali name --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="createCompanyEmail"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email</label>
                                    <input type="email" name="email" id="createCompanyEmail"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_Company_email_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Phone Number --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="createCompanyPhoneNumber"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Phone Number</label>
                                    <input type="text" name="phone_number" id="createCompanyPhoneNumber"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="create_Company_phone_number_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Phone Number --}}

                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="items-center flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button id="submitCreateCompany"
                            class="text-white w-full bg-sky-700 font-semibold hover:bg-sky-800 focus:ring-4 focus:ring-sky-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Add Company</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Company  Create modal End-->


        <!-- Company Update modal  Start-->

        <div class="fixed  left-0 right-0 z-50 items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full flex hidden"
            id="updateCompanyModal" aria-modal="true" role="dialog">
            <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Update Company
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="updateCompanyModal">
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
                        <form id="updateCompanyForm">
                            <div class="grid grid-cols-3 ">
                                {{-- name --}}
                                <div class="col-span-3 ">
                                    <label for="updateCompanyName"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                        Name</label>
                                    <input type="text" name="name" id="updateCompanyName"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        required>
                                    <p id="update_Company_name_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Emali name --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="updateCompanyEmail"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email</label>
                                    <input type="email" name="email" id="updateCompanyEmail"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="update_Company_email_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Phone Number --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="updateCompanyPhone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company
                                        Number</label>
                                    <input type="text" name="phone_number" id="updateCompanyPhone"
                                        class="shadow-sm bg-sky-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <p id="update_Company_phone_number_error"
                                        class="mt-2 text-xs text-red-600 dark:text-red-400">
                                    </p>
                                </div>
                                {{-- Company Phone Number --}}

                            </div>

                    </div>
                    <!-- Modal footer -->
                    <div
                        class=" items-center flex justify-end p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <button id="submitUpdateCompany"
                            class="text-white w-full bg-sky-700 font-semibold hover:bg-sky-800 focus:ring-4 focus:ring-sky-300  rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">Update Company</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Company Update modal  End-->



    </div>
    <script>
        //store Company
        const createCompanyForm = document.getElementById('createCompanyForm');
        const addCompanyModal = document.getElementById('addCompanyModal');

        createCompanyForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(createCompanyForm);

            try {
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });

                const response = await axios.post('/tt-manage/company/store', formData);

                if (response.status === 201) {
                    Notiflix.Loading.remove();
                    addCompanyModal.classList.add('hidden');
                    createCompanyForm.reset();
                    window.location.reload();
                }
            } catch (error) {
                Notiflix.Loading.remove();

                if (error.response && error.response.status === 422) {
                    const allError = error.response.data.errors;

                    for (const field in allError) {
                        const errorDiv = document.getElementById(`create_Company_${field}_error`);

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
                console.log(error);
            }
        });



        //Edit Bank Get Data

        const updateCompanyName = document.getElementById('updateCompanyName');
        const updateCompanyEmail = document.getElementById('updateCompanyEmail');
        const updateCompanyPhone = document.getElementById('updateCompanyPhone');
        const updateCompanyModal = document.getElementById('updateCompanyModal');
        const updateCompanyForm = document.getElementById('updateCompanyForm');
        const submitUpdateCompany = document.getElementById('submitUpdateCompany');

        const updateCompany = async (id) => {
            try {
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });

                const response = await axios.get(`/tt-manage/company/${id}`);

                if (response.data) {
                    Notiflix.Loading.remove();
                    const {
                        name,
                        email,
                        phone_number
                    } = response.data;

                    updateCompanyName.value = name;
                    updateCompanyEmail.value = email;
                    updateCompanyPhone.value = phone_number;

                    submitUpdateCompany.setAttribute('data-id', response.data.id);
                }
            } catch (error) {
                Notiflix.Loading.remove();
                console.log(error);
            }
        };


        /* Update Bank */

        updateCompanyForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(updateCompanyForm);
            let id = submitUpdateCompany.getAttribute('data-id');
            Notiflix.Loading.dots({
                svgColor: "#fff"
            });
            axios.post(`/tt-manage/company/update/${id}`, formData)

                .then(function(response) {
                    Notiflix.Loading.remove();
                    // console.log(formData)
                    if (response.status === 201) {
                        updateCompanyForm.reset();
                        updateCompanyModal.classList.add('hidden')
                        // updateCompanyForm.reset();
                        window.location.reload();
                    }
                })
                .catch(function(error) {
                    Notiflix.Loading.remove();
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`update_Company_${field}_error`);
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
        // Update Company



        //Delete  data Bank
        const deleteCompanyFunc = (id) => {
            Notiflix.Confirm.show(
                'Company Delete Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                async function okCb() {
                        try {
                            const response = await axios.post(`/tt-manage/company/delete/${id}`);
                            if (response.status === 201) {
                                window.location.reload();
                            }
                        } catch (error) {
                            console.error(error);
                        }
                    },
                    function cancelCb() {}, {
                        width: '320px',
                        borderRadius: '8px',
                        messageColor: '#1e1e1e',
                        titleColor: '#DA1010',
                        okButtonColor: '#f8f8f8',
                        okButtonBackground: '#DA1010',
                    }
            );
        };

        /* delete Bank */
    </script>
@endsection
