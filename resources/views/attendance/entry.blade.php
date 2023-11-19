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
                                <a href="{{ route('user.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    user</a>
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
                                <a href="{{ route('user.list') }}"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">
                                    users</a>
                            </div>
                        </li>

                        {{--  Bradcums --}}
                    </ol>
                </nav>

                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl font-semibold text-gray-600 md:text-2xl dark:text-white">Attendance View</h1>


                    <button type="button" data-modal-target="attendance-entry-modal"
                        data-modal-toggle="attendance-entry-modal" data-modal-toggle="category-create-modal"
                        class="inline-flex items-center justify-center px-3 py-2 text-xs md:text-smfont-medium text-center text-white rounded-lg bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 sm:w-auto dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
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
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Entry Time
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Entry By
                                    </th>
                                    <th scope="col"
                                        class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                        Comment
                                    </th>
                                    @if (auth()->user()->role->name === 'admin')
                                        <th scope="col"
                                            class="p-4  text-xs font-medium text-center text-gray-500 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody class="bg-sky-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @foreach ($attendance as $item)
                                    <tr class="hover:bg-sky-100 dark:hover:bg-gray-700">
                                        <td
                                            class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->employee->first_name . ' ' . $item->employee->last_name }}

                                        </td>
                                        <td
                                            class="p-4 text-center text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            @php
                                                $checkInDateTime = \Carbon\Carbon::parse($item->check_in);
                                                $expectedStartTime = \Carbon\Carbon::parse('09:20')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
                                                $officeSetTime = \Carbon\Carbon::parse('09:00')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
                                                $timeDifference = $checkInDateTime->diff($officeSetTime);
                                            @endphp

                                            {{-- Display the date, month, and time --}}
                                            @if ($checkInDateTime->format('H:i') <= $expectedStartTime->format('H:i'))
                                                Timely
                                            @else
                                                Late by {{ $timeDifference->h }} hours {{ $timeDifference->i }} minutes
                                            @endif
                                        </td>




                                        <td
                                            class="p-4 text-center  text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $checkInDateTime->format('M d, Y h:i A') }}


                                        </td>

                                        <td
                                            class="p-4 text-center  uppercase text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->user->name }}
                                        </td>
                                        <td
                                            class="p-4 text-center text-base font-medium text-gray-900 {{ $item->comment ? 'min-w-[300px] ' : '' }} whitespace-nowrap dark:text-white">
                                            <span>{{ $item->comment }}</span>
                                        </td>

                                        @if (auth()->user()->role->name === 'admin')
                                            <td class="p-4 text-right space-x-2 whitespace-nowrap">
                                                <button onclick="showUpdatePrevAttendanceData( {{ $item->id }})"
                                                    type="button" data-modal-target="attendance-update-modal"
                                                    data-modal-toggle="attendance-update-modal"
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
                                                <button type="button" id=""
                                                    onclick="deleteAttendance({{ $item->id }})"
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /pagination --}}
          <div class="flex justify-end items-end   mt-3">
        <nav aria-label="Page navigation example">
            {{ $attendance->links() }}
        </nav>
    </div>
        {{-- /pagination --}}


        <!-- Attendance Entry modal -->
        <div id="attendance-entry-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                    <button type="button" onclick="resetAttandanceForm()"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="attendance-entry-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Attendance Entry</h3>
                        <form class="space-y-6" id="attendanceForm">
                            <div>
                                <label for="user_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                                <input value="{{ auth()->user()->id }}" type="hidden" name="user_id" id="user_id"
                                    class="bg-sky-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Department Name" required>
                            </div>
                            <div>

                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    option</label>
                                <select id="countries" name="employee_id"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                    <option selected>Choose Employee Name</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">
                                            {{ $employee->first_name . ' ' . $employee->last_name }}</option>
                                    @endforeach

                                </select>
                                <p id="attendance_employee_id_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                            <div>
                                <label for="check_in"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Check-in
                                    Time</label>
                                <input type="datetime-local"
                                    {{ auth()->check() && auth()->user()->role->name === 'admin' ? '' : 'readonly' }}
                                    name="check_in" id="datetimeInput"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Department Name">

                                <p id="attendance_check_in_error_" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                            <div>
                                <label for="comment"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                                <input type="text" name="comment" id="comment"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="comments">
                                <p id="attendance_comment_error_" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <p id="attendance_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            <button type="submit"
                                class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Entry
                                Attendance</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Attendance Update modal -->
        <div id="attendance-update-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-sky-50 rounded-lg shadow dark:bg-gray-700">
                    <button type="button" onclick="resetAttandanceForm()"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="attendance-update-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Attendance Update</h3>
                        <form class="space-y-6" id="attendanceUpdateForm">
                            <div>
                                <label for="user_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                                <input value="{{ auth()->user()->id }}" type="hidden" name="user_id" id="user_id"
                                    class="bg-sky-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Department Name" required>
                            </div>
                            <div>

                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    option</label>
                                <select id="attendance_em_id" name="employee_id"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                                    <option value="">Choose Employee Name</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">
                                            {{ $employee->first_name . ' ' . $employee->last_name }}</option>
                                    @endforeach

                                </select>
                                <p id="attendance_update_employee_id_error_"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                            <div>
                                <label for="check_in"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Check-in
                                    Time</label>
                                <input type="datetime-local" name="check_in" id="attandence_datetimeInput_update"
                                    {{ auth()->check() && auth()->user()->role->name === 'admin' ? '' : 'readonly' }}
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Department Name">

                                <p id="attendance_update_check_in_error_"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400">
                                </p>
                            </div>
                            <div>
                                <label for="comment"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comment</label>
                                <input type="text" name="comment" id="attendance_comment_update"
                                    class="bg-sky-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="comments">
                                <p id="attendance_update_comment_error_"
                                    class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            </div>
                            <p id="attendance_update_error" class="mt-2 text-xs text-red-600 dark:text-red-400"></p>
                            <button type="submit" id="updateAttendanceSubmit"
                                class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">Update
                                Attendance</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>







    </div>

    <script>
        const attendanceForm = document.getElementById('attendanceForm');
        const resetAttandanceForm = () => {
            attendanceForm.reset();
            getCurrentBangladeshTime();
        }

        /* create attandance */

        attendanceForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(attendanceForm);
            // let id = userUpdateSubmit.getAttribute('data-id');
            // console.log(formData);
            axios.post('/employee/attendance/store', formData)

                .then(function(response) {
                    // console.log(formData)
                    if (response.status === 201) {
                        attendanceForm.reset();
                        window.location.assign("/employee/attendance/entry");
                    }


                })
                .catch(function(error) {
                    if (error.response.status === 421) {
                        const errorDiv = document.getElementById(`attendance_error`);
                        errorDiv.innerHTML = error.response.data.message
                        // console.log(error.response.data);
                    }
                    if (error.response && error.response.status === 422) {
                        let allError = error.response.data.errors
                        // console.log(allError);
                        for (const field in allError) {
                            const errorDiv = document.getElementById(`attendance_${field}_error`);
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

                        // console.error('An error occurred:', error);

                    }
                });
        })

        /* create attandance */

        /* time set fucn */
        function getCurrentBangladeshTime() {
            const currentUTC = new Date();
            const currentBDT = new Date(currentUTC.getTime() + (6 * 60 * 60 *
                1000)); // Adjust for Bangladesh timezone (UTC+6)

            const year = currentBDT.getUTCFullYear();
            const month = (currentBDT.getUTCMonth() + 1).toString().padStart(2, '0');
            const day = currentBDT.getUTCDate().toString().padStart(2, '0');
            const hours = currentBDT.getUTCHours().toString().padStart(2, '0');
            const minutes = currentBDT.getUTCMinutes().toString().padStart(2, '0');

            const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

            document.getElementById('datetimeInput').value = formattedDateTime;
        }
        getCurrentBangladeshTime();
        /* time set fucn */



        /*   updatePreview function */

        const showUpdatePrevAttendanceData = (id) => {
            const updateAttendanceSubmit = document.getElementById('updateAttendanceSubmit');
            const attendance_em_id = document.getElementById('attendance_em_id');
            const attandence_datetimeInput_update = document.getElementById('attandence_datetimeInput_update');
            const attendance_comment_update = document.getElementById('attendance_comment_update');
            updateAttendanceSubmit.setAttribute("data-id", id);
            axios.get(`/employee/attendance/update/${id}`)
                .then(function(response) {
                    if (response.data) {


                        attandence_datetimeInput_update.value = response.data.check_in
                        attendance_comment_update.value = response.data.comment
                        //console.log(attendance_em_id);

                        // Select Change Func
                        const valueToSelect = response.data
                            .employee_id;
                        //console.log(valueToSelect);
                        for (let option of attendance_em_id.options) {

                            let num = parseInt(option.value)
                            //console.log(typeof(parseInt(option.value)));
                            if (num === valueToSelect) {

                                option.selected = true;
                                break;
                            }
                        }

                    }
                    //console.log(response.data);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        /*   updatePreview function */


        /*   update Attendance  function */


        document.getElementById('attendanceUpdateForm').addEventListener('submit', function(e) {

            const attedanceId = updateAttendanceSubmit.getAttribute("data-id");
            e.preventDefault();
            const updatedData = new FormData(this);
            //console.log(updatedData);

            axios.post(`/employee/attendance/update/${attedanceId}`, updatedData)
                .then(response => {
                    console.log(response.data);
                    window.location.assign("/employee/attendance/entry");
                })
                .catch(error => {
                    console.error(error);
                });
        });

        /*   update Attendance  function  End */


        //Delete  data Department
        const deleteAttendance = (id) => {

            // console.log(id);

            Notiflix.Confirm.show(
                'Department Delete  Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/employee/attendance/delete/${id}`)
                        .then(response => {
                            // Handle success
                            if (response.status === 201) {


                                window.location.assign("/employee/attendance/entry");
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
                    backgroundColor:'#e0f4ff'
                },
            );


        }
    </script>
@endsection
