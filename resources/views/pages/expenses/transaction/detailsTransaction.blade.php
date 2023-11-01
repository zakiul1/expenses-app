@extends('layouts.app')
@section('content')
    <div class="px-4 pt-6 h-screen ">
        {{-- Bradcums  End --}}
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
                        <?php $segments = ''; ?>
                        @foreach (Request::segments() as $segment)
                            <?php $segments .= '/' . $segment; ?>

                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ $segments }}"
                                        class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">{{ $segment }}</a>
                                </div>
                            </li>
                        @endforeach


                    </ol>
                </nav>
                <div class="flex justify-between pb-4  border-b border-gray-300">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Transaction Details</h1>

                    <div class="flex pl-2 space-x-1 gap-2">

                        <button data-id="{{ $detail->id }} " onclick="deleteTnxFunc(this)"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>
                                Delete
                            </span>
                        </button>

                        <a href="{{ url('expenses/transaction/details/update') . '/' . $detail->id }}">
                            <button type="button" data-id="{{ $detail->id }}" id="updateButton" {{--  data-modal-toggle="transactionEditModal" --}}
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-lime-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Update
                            </button>
                        </a>




                    </div>

                </div>
            </div>

        </div>
        {{-- Table  Start --}}

        {{-- Table  Start --}}


        <div class="">


            <div class="flex w-full items-center border-l border-r border-b border-t border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4">Name</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4"> {{ $detail->name }}</div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4">Amount</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4"> {{ $detail->amount }}</div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4"> Expense By</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4">
                    {{ $employee->first_name . ' ' . $employee->last_name }} </div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4"> Expense Date</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4"> {{ $detail->expense_date }}</div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4">Category Name</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4"> {{ $category->name }} </div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4">Description</div>
                <div class="flex-grow w-9/12 border-l border-gray-300  bg-gray-100 p-4">{{ $detail->description }}</div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4"> Images</div>

                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4">
                    @if ($detail->images_path == 'null')
                        {{-- Display the image --}}
                        <p>Image not available</p>
                    @else
                        {{-- Display a message when there is no image available --}}
                        <a href="{{ url('expenses/transaction/details/images/download/' . $detail->id) }}">
                            <button type="button"
                                class="p-2 flex text-blue-600 items-center rounded hover:bg-gray-100">Download Images
                                <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                    </path>
                                </svg>
                                <span class="sr-only">Download</span>
                            </button>
                        </a>
                        {{--  {{ $detail->images_path }} --}}
                    @endif
                </div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4"> Download Documents</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4">
                    @if ($detail->documents_path == 'null')
                        {{-- Display the image --}}
                        <p>Documents not available</p>
                    @else
                        {{-- Display a message when there is no image available --}}

                        <a href="{{ url('expenses/transaction/details/documents/download/' . $detail->id) }}">
                            <button type="button"
                                class="p-2 flex text-blue-600 items-center rounded hover:bg-gray-100">Download Documents
                                <svg class="ml-2 w-5 h-5 fill-red-500 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M12 2.25a.75.75 0 01.75.75v11.69l3.22-3.22a.75.75 0 111.06 1.06l-4.5 4.5a.75.75 0 01-1.06 0l-4.5-4.5a.75.75 0 111.06-1.06l3.22 3.22V3a.75.75 0 01.75-.75zm-9 13.5a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z">
                                    </path>
                                </svg>
                                <span class="sr-only">Download</span>
                            </button>
                        </a>
                        {{--  {{ $detail->documents_path }} --}}
                    @endif
                </div>
            </div>
            <div class="flex w-full items-center border-l border-r border-b border-gray-400 bg-gray-100">
                <div class="flex-grow w-3/12  p-4"> Last Modified</div>
                <div class="flex-grow w-9/12 border-l border-gray-300 bg-gray-100 p-4"> {{ $category->updated_at }}</div>
            </div>



        </div>

    </div>



    <!-- Main modal -->
    <div id="transactionEditModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Update Transaction
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="transactionEditModal">
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
                            <input type="text" name="name" value="{{ $detail->name }}"
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
                            <input type="number" name="amount" id="amount" value="{{ $detail->amount }}"
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
                                value="{{ $detail->expense_date }}"
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
                        </div>
                        <div>

                            {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="document_path">Upload Document</label> --}}
                            {{--  <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="documents_path[]" id="documents_path" type="file" multiple>
                            <p id="transaction_documents_path_error" class="mt-2 text-xs text-red-600 dark:text-red-400">
                            </p> --}}
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
                                placeholder="Write Expenses description here"></textarea>
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
                            Add Transaction
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', handleImageUpload);

        function handleImageUpload(event) {
            imagePreview.innerHTML = '';

            const files = event.target.files;
            for (const file of files) {
                const reader = new FileReader();
                const imageDiv = document.createElement('div');
                imageDiv.className = 'flex flex-wrap items-center mb-2  ';

                reader.onload = function(e) {
                    const uperDiv = document.createElement('div');
                    uperDiv.className = 'p-2 bg-gray-200 relative flex justify-center items-center';
                    const image = document.createElement('img');
                    image.src = e.target.result;
                    image.className = 'w-12 h-12 object-cover  rounded-lg';
                    imageDiv.appendChild(uperDiv);
                    uperDiv.appendChild(image);

                    const cancelButton = document.createElement('button');
                    cancelButton.innerHTML =
                        `<svg  class="w-4 h-4 fill-red-700"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>`;
                    cancelButton.className = 'right-[-10px] top-[-5px] px-2 py-1 absolute rounded-lg';

                    cancelButton.addEventListener('click', function() {
                        imageDiv.remove();

                        // Get the current file list
                        const currentFiles = Array.from(imageInput.files);

                        // Remove the canceled file from the file list
                        const updatedFiles = currentFiles.filter(f => f !== file);

                        // Create a new FileList with the updated files
                        const newFileList = new DataTransfer();
                        updatedFiles.forEach(f => newFileList.items.add(f));

                        // Update the file input with the new FileList
                        imageInput.files = newFileList.files;
                    });
                    uperDiv.appendChild(cancelButton);

                    imagePreview.appendChild(imageDiv);
                };

                reader.readAsDataURL(file);
            }
        }



        //delete Transaction

        const deleteTnxFunc = (el) => {
            const tnxId = el.getAttribute('data-id')

            Notiflix.Confirm.show(
                'Department Delete  Confirm',
                'Do you want to Delete ?',
                'Yes',
                'No',
                function okCb() {
                    axios.post(`/expenses/transaction/delete/${tnxId}`)
                        .then(response => {
                            // Handle success
                            if (response.status === 201) {
                                window.location.assign("/expenses/transaction");
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
    </script>
    </body>

    </html>
@endsection
