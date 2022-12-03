{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

{{-- navbar section --}}
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2 rounded dark:bg-gray-900 fixed w-screen top-0 z-40">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com/" class="flex items-center ml-5">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center md:order-2 mr-3">
            <button type="button"
                class="flex mr-3 text-sm bg-white rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-dasharray="28" stroke-dashoffset="28"
                        stroke-linecap="round" stroke-width="2">
                        <path d="M4 21V20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20V21">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="28;0" />
                        </path>
                        <path
                            d="M12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7C16 9.20914 14.2091 11 12 11Z">
                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s"
                                values="28;0" />
                        </path>
                    </g>
                </svg>

            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                    <span
                        class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="#1f2937" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class=" w-1/3">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" fill="#1f2937" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="#1f2937" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="#1f2937" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 dark:text-white bg-gr"
                        aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none">
                                <path fill="#1f2937" d="M18 15H7L5.5 6H21l-3 9z" />
                                <path stroke="#1f2937" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M3 3h2l.5 3m0 0L7 15h11l3-9H5.5z" />
                                <circle cx="8" cy="20" r="1" stroke="#1f2937"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <circle cx="17" cy="20" r="1" stroke="#1f2937"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-width="2">
                                <path stroke-dasharray="4" stroke-dashoffset="4" d="M12 3V5">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s"
                                        values="4;0" />
                                </path>
                                <path fill="#1f2937" fill-opacity="0" stroke-dasharray="28" stroke-dashoffset="28"
                                    d="M12 5C8.68629 5 6 7.68629 6 11L6 17C5 17 4 18 4 19H12M12 5C15.3137 5 18 7.68629 18 11L18 17C19 17 20 18 20 19H12">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s"
                                        dur="0.4s" values="28;0" />
                                    <animate fill="freeze" attributeName="fill-opacity" begin="0.8s"
                                        dur="0.15s" values="0;0.3" />
                                </path>
                                <path stroke-dasharray="8" stroke-dashoffset="8"
                                    d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s"
                                        dur="0.2s" values="8;0" />
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none" stroke="#1f2937" stroke-linecap="round" stroke-width="2">
                                <rect width="18" height="14" x="3" y="5"
                                    stroke-dasharray="64" stroke-dashoffset="64" rx="1">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s"
                                        values="64;0" />
                                </rect>
                                <path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5L12 12L21 6.5">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s"
                                        dur="0.4s" values="24;0" />
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script> --}}
