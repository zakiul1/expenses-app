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
                                <a href="{{ route('employee.department') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    department</a>
                            </div>
                        </li>

                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl font-semibold text-gray-600 sm:text-2xl dark:text-white">Department List</h1>

                    <button type="button" data-modal-target="createDepartmentModal"
                        data-modal-toggle="createDepartmentModal" data-modal-toggle="attendance-entry-modal"
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
                                        class="p-4 w-2/12 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        id
                                    </th>
                                    <th scope="col"
                                        class="p-4 w-6/12 text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Name
                                    </th>

                                    <th scope="col"
                                        class="p-4 w-4/12  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-sky-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @foreach ($departments as $department)
                                    <tr class="hover:bg-sky-100 dark:hover:bg-gray-700">

                                        <td
                                            class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $department->id }}</td>
                                        <td
                                            class="p-4 text-center text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $department->name }}</td>

                                        <td class="p-4 text-center space-x-2 whitespace-nowrap">
                                            <button onclick="updateDepartment(this)"
                                                data-modal-target="department-update-modal"
                                                data-modal-toggle="department-update-modal" type="button"
                                                data-id="{{ $department->id }}"
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
                                            <button type="button" data-id="{{ $department->id }}"
                                                onclick="departmentDeleteFunc(this)" id="departmentDeleteBtn"
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /pagination --}}
        <div class="flex justify-end items-end   mt-3">
            <nav aria-label="Page navigation example">
                {{ $departments->links() }}
            </nav>
        </div>
        {{-- /pagination --}}
    </div>






    <!-- Department Create modal -->
    <div id="createDepartmentModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="createDepartmentModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Department Name</h3>
                    <form class="space-y-6" id="departmentForm">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <input type="text" name="name" id="name"
                                class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Department Name" required>
                            <p id="department_name_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Add
                            Department</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Department Update modal -->
    <div id="department-update-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="department-update-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Department Name</h3>
                    <form class="space-y-6" id="departmentUpdateForm">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <input type="text" name="name" id="departmentNameUpdate"
                                class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Department Name" required>
                            <p id="department_name_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                        </div>

                        <button type="submit" id="departmentUpdateSubmit"
                            class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Update
                            Department</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Department  modal -->






    <script>
        //Store Data Script Department 
        const departmentForm = document.getElementById('departmentForm');
        const departmentError = document.getElementById('department_name_error_');

        const handleFormSubmit = async (e) => {
            e.preventDefault();

            try {
                const formData = new FormData(departmentForm);
                Notiflix.Loading.dots({
                    svgColor: "#fff"
                });
                const response = await axios.post('/employee/department/store', formData);

                if (response.status === 201) {
                    Notiflix.Loading.remove();
                    departmentForm.reset();
                    window.location.reload();
                }
            } catch (error) {
                console.log(error);
                departmentError.innerText = error.response.data.message;
                Notiflix.Loading.remove();
            }
        };

        departmentForm.addEventListener('submit', handleFormSubmit);




        //Department Data Get Script for Set Value

        const departmentNameUpdate = document.getElementById('departmentNameUpdate');
        const departmentUpdateSubmit = document.getElementById('departmentUpdateSubmit');

        const updateDepartment = el => {
            const id = el.getAttribute("data-id");
            Notiflix.Loading.dots({
                svgColor: "#fff"
            });
            axios.get(`/employee/department/${id}`)
                .then(({
                    data
                }) => {
                    Notiflix.Loading.remove();
                    if (data) {
                        const {
                            name,
                            id
                        } = data;
                        departmentNameUpdate.value = name;
                        departmentUpdateSubmit.setAttribute("data-id", id);
                    }
                })
                .catch((error) => {
                    console.log(error);
                    Notiflix.Loading.remove();
                });
        };




        //update data Script Department
        document.getElementById('departmentUpdateForm').addEventListener('submit', function(e) {
            const departmentId = departmentUpdateSubmit.getAttribute("data-id");
            e.preventDefault();
            const updatedData = {
                name: departmentNameUpdate.value
            };

            axios.post(`/employee/department/update/${departmentId}`, updatedData)
                .then(({
                    data
                }) => {
                    console.log(data);
                    window.location.reload();
                })
                .catch(console.error);
        });





        //Delete  data Department
        const departmentDeleteFunc = el => {
            let id = el.getAttribute("data-id");

            Notiflix.Confirm.show(
                'Department Delete Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                () => {
                    axios.post(`/employee/department/delete/${id}`)
                        .then(response => {
                            if (response.status === 201) {
                                window.location.assign("/employee/department");
                            }
                        })
                        .catch(console.error);
                },
                () => {}, {
                    width: '320px',
                    borderRadius: '8px',
                    messageColor: '#1e1e1e',
                    titleColor: '#DA1010',
                    okButtonColor: '#f8f8f8',
                    okButtonBackground: '#DA1010',
                },
            );
        };
    </script>
@endsection
