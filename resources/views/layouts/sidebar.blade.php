<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>
                    {{-- Dashboard --}}
                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base  rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g transform="translate(0 -1028.4)">
                                        <path
                                            d="m12 1032.4c-3.0711 0-6.1569 1.1-8.5 3.5-3.3821 3.3-3.5 8.5-3.5 12.5h24c0-4-0.118-9.2-3.5-12.5-2.343-2.4-5.429-3.5-8.5-3.5z"
                                            fill="#84B2E6"></path>
                                        <path
                                            d="m12 1035.4c-0.552 0-1 0.4-1 1 0 0.5 0.448 1 1 1s1-0.5 1-1c0-0.6-0.448-1-1-1zm5 1c-0.552 0-1 0.4-1 1 0 0.5 0.448 1 1 1s1-0.5 1-1c0-0.6-0.448-1-1-1zm-10 0c-0.5523 0-1 0.4-1 1 0 0.5 0.4477 1 1 1s1-0.5 1-1c0-0.6-0.4477-1-1-1zm13 3.8c-0.552 0-1 0.5-1 1 0 0.6 0.448 1 1 1s1-0.4 1-1c0-0.5-0.448-1-1-1zm-16 0.2c-0.5523 0-1 0.4-1 1 0 0.5 0.4477 1 1 1s1-0.5 1-1c0-0.6-0.4477-1-1-1zm-1 5c-0.5523 0-1 0.4-1 1 0 0.5 0.4477 1 1 1s1-0.5 1-1c0-0.6-0.4477-1-1-1zm18 0c-0.552 0-1 0.4-1 1 0 0.5 0.448 1 1 1s1-0.5 1-1c0-0.6-0.448-1-1-1z"
                                            fill="#84B2E6"></path>
                                        <path
                                            d="m13 11.864c0 0.477-0.448 0.864-1 0.864s-1-0.387-1-0.864 0.448-0.864 1-0.864 1 0.387 1 0.864z"
                                            transform="matrix(1.4142 1.4142 -1.6366 1.6366 14.446 1009)" fill="#84B2E6">
                                        </path>
                                        <path transform="matrix(.094524 .094524 -.60031 .60031 22.211 1031.9)"
                                            fill="#c0392b" d="m12 5.9419 7.481 12.957h-14.962z"></path>
                                        <path
                                            style="block-progression:tb;text-indent:0;color:#000000;text-transform:none"
                                            d="m19.759 1037.6a0.19843 1.2602 45 0 0 -0.044 0 0.19843 1.2602 45 0 0 -0.509 0.3l-7.999 6.7h0.067l-2.1217 2.1c-0.3906 0.4-0.3906 1.1 0 1.5 0.3905 0.4 1.0237 0.4 1.4137 0l2.122-2.2 0.088 0.1 6.674-8a0.19843 1.2602 45 0 0 0.331 -0.5 0.19843 1.2602 45 0 0 -0.022 0z"
                                            fill="#84B2E6"></path>
                                        <path
                                            style="block-progression:tb;text-indent:0;color:#000000;text-transform:none"
                                            d="m19.778 1036.6a0.19843 1.2602 45 0 0 -0.044 0 0.19843 1.2602 45 0 0 -0.508 0.3l-7.999 6.7 0.066 0.1-2.1214 2.1c-0.3906 0.4-0.3906 1 0 1.4 0.3905 0.4 1.0234 0.4 1.4144 0l2.121-2.1 0.088 0.1 6.674-8a0.19843 1.2602 45 0 0 0.331 -0.6 0.19843 1.2602 45 0 0 -0.022 0z"
                                            fill="#c0392b"></path>
                                        <path
                                            d="m13 11.864c0 0.477-0.448 0.864-1 0.864s-1-0.387-1-0.864 0.448-0.864 1-0.864 1 0.387 1 0.864z"
                                            transform="matrix(1.4142 1.4142 -1.6366 1.6366 14.446 1008)" fill="#e74c3c">
                                        </path>
                                        <path d="m13 12c0 0.552-0.448 1-1 1s-1-0.448-1-1 0.448-1 1-1 1 0.448 1 1z"
                                            transform="matrix(.70711 .70711 -.70711 .70711 12 1027.4)" fill="#ecf0f1">
                                        </path>
                                        <path
                                            d="m12 6c-0.552 0-1 0.4477-1 1s0.448 1 1 1 1-0.4477 1-1-0.448-1-1-1zm5 1c-0.552 0-1 0.4477-1 1s0.448 1 1 1 1-0.4477 1-1-0.448-1-1-1zm-10 0c-0.5523 0-1 0.4477-1 1s0.4477 1 1 1 1-0.4477 1-1-0.4477-1-1-1zm13 3.844c-0.552 0-1 0.447-1 1 0 0.552 0.448 1 1 1s1-0.448 1-1c0-0.553-0.448-1-1-1zm-16 0.156c-0.5523 0-1 0.448-1 1s0.4477 1 1 1 1-0.448 1-1-0.4477-1-1-1zm-1 5c-0.5523 0-1 0.448-1 1s0.4477 1 1 1 1-0.448 1-1-0.4477-1-1-1zm18 0c-0.552 0-1 0.448-1 1s0.448 1 1 1 1-0.448 1-1-0.448-1-1-1z"
                                            transform="translate(0 1028.4)" fill="#ecf0f1"></path>
                                        <path
                                            d="m12 1032.4c-3.0711 0-6.1569 1.1-8.5 3.5-3.2299 3.2-3.4838 8-3.5 11.9 0.068809-3.7 0.54069-8 3.5-10.9 2.3431-2.4 5.4289-3.5 8.5-3.5 3.071 0 6.157 1.1 8.5 3.5 2.959 2.9 3.431 7.2 3.5 10.9-0.016-3.9-0.27-8.7-3.5-11.9-2.343-2.4-5.429-3.5-8.5-3.5z"
                                            fill="#84B2E6"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    {{-- Dashboard End --}}

                    {{-- Expenses Start --}}
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-expenses" data-collapse-toggle="dropdown-expenses">

                            <svg height="24px" width="24px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <path style="fill:#00D2FF;"
                                    d="M432.274,135.587L256,282.483L90.528,123.63c-39.615,41.234-64.045,97.154-64.045,158.852  C26.483,409.241,129.241,512,256,512s229.517-102.759,229.517-229.517C485.517,226.584,465.489,175.394,432.274,135.587z" />
                                <path style="fill:#9BE6D2;"
                                    d="M90.475,123.58L256,282.483V52.966C190.936,52.966,132.242,80.084,90.475,123.58z" />
                                <path style="fill:#C3E678;"
                                    d="M456.815,82.622l0.012-0.046C414.726,32.12,351.392,0,280.541,0v229.517L456.815,82.622z" />
                                <path style="fill:#18BDF6;"
                                    d="M308.966,476.69c-126.759,0-229.517-102.759-229.517-229.517c0-39.125,9.815-75.948,27.079-108.184  L90.528,123.63c-39.615,41.234-64.045,97.154-64.045,158.852C26.483,409.241,129.241,512,256,512  c58.449,0,111.763-21.884,152.285-57.86C378.229,468.59,344.544,476.69,308.966,476.69z" />
                                <path style="fill:#78D2BE;"
                                    d="M156.452,75.713c-24.787,11.972-47.119,28.228-65.976,47.866l16.051,15.41  C119.356,115.032,136.318,93.635,156.452,75.713z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Expenses</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-expenses"
                            class="{{ request()->routeIs(['expenses.category', 'expenses.transaction', 'tnxDetails']) ? '' : 'hidden' }}

                            py-2 space-y-2">
                            <li class="">

                                <a href="{{ route('expenses.transaction') }}"
                                    class="{{ request()->routeIs('expenses.transaction') || request()->routeIs('tnxDetails') ? 'text-green-500' : 'text-gray-900' }}
                                    flex items-center p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">

                                    Transaction</a>
                            </li>
                            <li>
                                <a href="{{ route('expenses.category') }}"
                                    class="{{ request()->routeIs('expenses.category') ? 'text-green-500' : 'text-gray-900' }}  flex items-center p-2 text-base  transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Category</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Expenses End --}}

                    {{-- Income Start --}}
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-income" data-collapse-toggle="dropdown-income">

                            <svg height="24px" width="24px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 508 508" xml:space="preserve">
                                <circle style="fill:#A4C6EC;" cx="254" cy="254" r="254" />
                                <path style="fill:#A4C6EC;"
                                    d="M45.6,399.2C91.6,464.8,167.6,508,254,508s162.4-43.2,208.4-108.8H45.6z" />
                                <g>
                                    <rect x="340.4" y="134.4" style="fill:#FFFFFF;" width="48" height="227.6" />
                                    <rect x="266.8" y="186.8" style="fill:#FFFFFF;" width="48" height="175.2" />
                                    <rect x="193.2" y="228.8" style="fill:#FFFFFF;" width="48" height="133.2" />
                                    <rect x="119.6" y="262.8" style="fill:#FFFFFF;" width="48" height="99.2" />
                                </g>
                                <path style="fill:#CE5C82;"
                                    d="M107.2,362h293.6c4.4,0,7.6,3.6,7.6,7.6v22c0,4.4-3.6,7.6-7.6,7.6H107.2c-4.4,0-7.6-3.6-7.6-7.6v-22  C99.6,365.2,102.8,362,107.2,362z" />
                                <polygon style="fill:#CE5C82;"
                                    points="273.2,82.8 264.4,66.8 358.8,66.8 307.6,142.8 298.8,127.2 99.6,214.4 " />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Income</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-income" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Category</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Exemple</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Income End --}}
                    {{-- Employee Start --}}
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-income" data-collapse-toggle="dropdown-employee">

                            <svg height="24px" width="24px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <path style="fill:#DC85A6;"
                                    d="M256,0c-57.989,0-105.165,47.178-105.165,105.165c0,57.989,47.176,105.165,105.165,105.165  s105.165-47.176,105.165-105.165C361.165,47.178,313.989,0,256,0z" />
                                <path style="fill:#D6E5F6;"
                                    d="M256,260.609c-106.273,0-192.733,86.462-192.733,192.733c0,13.885,11.256,25.139,25.139,25.139  h335.188c13.883,0,25.139-11.254,25.139-25.139C448.733,347.071,362.273,260.609,256,260.609z" />
                                <path style="fill:#A4C6EC;"
                                    d="M256,260.609v217.872h167.594c13.883,0,25.139-11.254,25.139-25.139  C448.733,347.071,362.273,260.609,256,260.609z" />
                                <path style="fill:#1D3366;"
                                    d="M256,260.609c-13.883,0-25.139,11.257-25.139,25.139v201.113C230.861,500.746,242.117,512,256,512  s25.139-11.254,25.139-25.139V285.748C281.139,271.866,269.883,260.609,256,260.609z" />
                                <path style="fill:#CE5C82;"
                                    d="M256,0v210.331c57.989,0,105.165-47.176,105.165-105.165C361.165,47.178,313.989,0,256,0z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Employee</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-employee"
                            class="{{ request()->routeIs(['employee.list', 'employee.department', 'employee.attendance']) ? '' : 'hidden' }}

                         py-2 space-y-2">
                            <li>
                                <a href="{{ route('employee.attendance') }}"
                                    class="{{ request()->routeIs('employee.attendance') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Attendance</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.list') }}"
                                    class="{{ request()->routeIs('employee.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Employee
                                    List</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.department') }}"
                                    class="{{ request()->routeIs('employee.department') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Department</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Employee End --}}


                    {{-- TT Manage Start --}}
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                            aria-controls="dropdown-income" data-collapse-toggle="dropdown-tt-manae">

                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001"
                                xml:space="preserve" width="22px" height="22px" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path style="fill:#A4C6EC;"
                                        d="M457.671,500.362H54.33C24.372,500.362,0,475.99,0,446.032V121.622 c0-29.958,24.372-54.33,54.33-54.33h403.341c29.958,0,54.33,24.372,54.33,54.33v115.332c0,7.912-6.415,14.326-14.326,14.326 c-7.911,0-14.326-6.414-14.326-14.326V121.622c0-14.16-11.519-25.679-25.679-25.679H54.33c-14.16,0-25.679,11.519-25.679,25.679 v324.409c0,14.16,11.519,25.679,25.679,25.679h403.341c14.16,0,25.679-11.519,25.679-25.679V314.389 c0-7.912,6.415-14.326,14.326-14.326c7.911,0,14.326,6.414,14.326,14.326v131.643C512,475.99,487.629,500.362,457.671,500.362z">
                                    </path>
                                    <rect x="76.456" y="138.415" style="fill:#CE5C82;" width="143.257"
                                        height="57.303"></rect>
                                    <g>
                                        <path style="fill:#A4C6EC;"
                                            d="M219.714,210.05H76.452c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326v57.303 C234.04,203.635,227.627,210.05,219.714,210.05z M90.778,181.399h114.611v-28.651H90.778V181.399z">
                                        </path>
                                        <path style="fill:#A4C6EC;"
                                            d="M219.714,326.805H76.452c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326v57.303 C234.04,320.39,227.627,326.805,219.714,326.805z M90.778,298.153h114.611v-28.651H90.778V298.153z">
                                        </path>
                                    </g>
                                    <rect x="76.456" y="371.923" style="fill:#CE5C82;" width="143.257"
                                        height="57.303"></rect>
                                    <g>
                                        <path style="fill:#A4C6EC;"
                                            d="M219.714,443.559H76.452c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326v57.303 C234.04,437.144,227.627,443.559,219.714,443.559z M90.778,414.908h114.611v-28.651H90.778V414.908z">
                                        </path>
                                        <path style="fill:#A4C6EC;"
                                            d="M435.548,210.05H292.286c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326s-6.415,14.326-14.326,14.326H306.611v28.651 h128.937c7.911,0,14.326,6.414,14.326,14.326S443.46,210.05,435.548,210.05z">
                                        </path>
                                    </g>
                                    <rect x="292.287" y="255.169" style="fill:#CE5C82;" width="143.257"
                                        height="57.303"></rect>
                                    <g>
                                        <path style="fill:#A4C6EC;"
                                            d="M435.548,326.805H292.286c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326v57.303 C449.874,320.39,443.46,326.805,435.548,326.805z M306.611,298.153h114.611v-28.651H306.611V298.153L306.611,298.153z">
                                        </path>
                                        <path style="fill:#A4C6EC;"
                                            d="M435.548,443.559H292.286c-7.911,0-14.326-6.414-14.326-14.326v-57.303 c0-7.912,6.415-14.326,14.326-14.326h143.263c7.911,0,14.326,6.414,14.326,14.326s-6.415,14.326-14.326,14.326H306.611v28.651 h128.937c7.911,0,14.326,6.414,14.326,14.326C449.874,437.145,443.46,443.559,435.548,443.559z">
                                        </path>
                                        <path style="fill:#A4C6EC;"
                                            d="M111.189,91.385c-7.911,0-14.326-6.414-14.326-14.326V25.965c0-7.912,6.415-14.326,14.326-14.326 s14.326,6.414,14.326,14.326v51.095C125.514,84.971,119.101,91.385,111.189,91.385z">
                                        </path>
                                        <path style="fill:#A4C6EC;"
                                            d="M400.811,91.385c-7.911,0-14.326-6.414-14.326-14.326V25.965c0-7.912,6.415-14.326,14.326-14.326 s14.326,6.414,14.326,14.326v51.095C415.137,84.971,408.723,91.385,400.811,91.385z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>TT Manage</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-tt-manae"
                            class="{{ request()->routeIs(['invoices.list', 'factories.list','invoice.details', 'banks.list', 'buyers.list','companies.list']) ? '' : 'hidden' }}

                         py-2 space-y-2">
                            <li>
                                <a href="{{ route('invoices.list') }}"
                                    class="{{ request()->routeIs(['invoices.list','invoice.details']) ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">TT
                                    Order</a>
                            </li>
                            <li>
                                <a href="{{ route('factories.list') }}"
                                    class="{{ request()->routeIs('factories.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Factory</a>
                            </li>
                            <li>
                                <a href="{{ route('banks.list') }}"
                                    class="{{ request()->routeIs('banks.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Bank</a>
                            </li>

                            <li>
                                <a href="{{ route('buyers.list') }}"
                                    class="{{ request()->routeIs('buyers.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Bayer</a>
                            </li>
                            <li>
                                <a href="{{ route('companies.list') }}"
                                    class="{{ request()->routeIs('companies.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Company</a>
                            </li>
                        </ul>
                    </li>
                    {{-- TT Manage End --}}

                    {{-- Users Start --}}
                    @if (auth()->check())
                        @if (auth()->user()->role->name === 'admin')
                            <li>
                                <button type="button"
                                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                    aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">

                                    {{--  --}}
                                    <svg height="24px" width="24px" viewBox="0 0 1024 1024" class="icon"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M691.573 338.89c-1.282 109.275-89.055 197.047-198.33 198.331-109.292 1.282-197.065-90.984-198.325-198.331-0.809-68.918-107.758-68.998-106.948 0 1.968 167.591 137.681 303.31 305.272 305.278C660.85 646.136 796.587 503.52 798.521 338.89c0.811-68.998-106.136-68.918-106.948 0z"
                                                fill="#dc85a6"></path>
                                            <path
                                                d="M294.918 325.158c1.283-109.272 89.051-197.047 198.325-198.33 109.292-1.283 197.068 90.983 198.33 198.33 0.812 68.919 107.759 68.998 106.948 0C796.555 157.567 660.839 21.842 493.243 19.88c-167.604-1.963-303.341 140.65-305.272 305.278-0.811 68.998 106.139 68.919 106.947 0z"
                                                fill="#ce5c82"></path>
                                            <path
                                                d="M222.324 959.994c0.65-74.688 29.145-144.534 80.868-197.979 53.219-54.995 126.117-84.134 201.904-84.794 74.199-0.646 145.202 29.791 197.979 80.867 54.995 53.219 84.13 126.119 84.79 201.905 0.603 68.932 107.549 68.99 106.947 0-1.857-213.527-176.184-387.865-389.716-389.721-213.551-1.854-387.885 178.986-389.721 389.721-0.601 68.991 106.349 68.933 106.949 0.001z"
                                                fill="#a4c6ec"></path>
                                        </g>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Users</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-users"
                                    class="{{ request()->routeIs(['user.list']) ? '' : 'hidden' }}

                         py-2 space-y-2">
                                    <li>
                                        <a href="{{ route('user.list') }}"
                                            class="{{ request()->routeIs('user.list') ? 'text-green-500' : 'text-gray-900' }} flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Users
                                            List</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    @endif

                    {{-- Users End  --}}
                </ul>


            </div>
        </div>
        {{-- <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800"
            sidebar-bottom-menu>
            <a href="#"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                    </path>
                </svg>
            </a>
            <a href="#" data-tooltip-target="tooltip-settings"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <div id="tooltip-settings" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Settings page
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button type="button" data-dropdown-toggle="language-dropdown"
                class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                    <path fill="#b22234" d="M0 0h7410v3900H0z" />
                    <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                        stroke-width="300" />
                    <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                    <g fill="#fff">
                        <g id="d">
                            <g id="c">
                                <g id="e">
                                    <g id="b">
                                        <path id="a"
                                            d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                        <use xlink:href="#a" y="420" />
                                        <use xlink:href="#a" y="840" />
                                        <use xlink:href="#a" y="1260" />
                                    </g>
                                    <use xlink:href="#a" y="1680" />
                                </g>
                                <use xlink:href="#b" x="247" y="210" />
                            </g>
                            <use xlink:href="#c" x="494" />
                        </g>
                        <use xlink:href="#d" x="988" />
                        <use xlink:href="#c" x="1976" />
                        <use xlink:href="#e" x="2470" />
                    </g>
                </svg>
            </button>

            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700"
                id="language-dropdown">
                <ul class="py-1" role="none">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-us" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-de" viewBox="0 0 512 512">
                                    <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                    <path d="M0 0h512v170.7H0z" />
                                    <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                </svg>
                                Deutsch
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    id="flag-icon-css-it" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#fff" d="M0 0h512v512H0z" />
                                        <path fill="#009246" d="M0 0h170.7v512H0z" />
                                        <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                    </g>
                                </svg>
                                Italiano
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                    viewBox="0 0 512 512">
                                    <defs>
                                        <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                    </defs>
                                    <path fill="#de2910" d="M0 0h512v512H0z" />
                                    <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                    <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                        xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                    <use width="30" height="20"
                                        transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                </svg>
                                中文 (繁體)
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</aside>
