@extends('store.main')

@section('body')
    <div class=" w-full grid place-items-center pt-5">
        {{-- carousel section --}}
        @include('store.components.carousel')
    </div>

    <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

    {{-- Kejar Diskon Section --}}
    @include('store.components.kejarDiskon')

    <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

    <div class=" h-fit bg-yellow-400 lg:mx-32 md:mx-0 pb-10">
        {{-- section title --}}
        <div class="">
            <span class=" text-bold text-4xl">Semua Produk</span>
        </div>

        {{-- grid for items --}}
        <div class=" mt-4 ml-2 grid grid-cols-4 gap-y-10">
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-56">
                <img class=" h-40 rounded-lg" src="{{ url('/images/carousel3.jpg') }}" alt="" />
                <div class=" pl-2">
                    <h5 class="mb-1 text-lg tracking-tight text-gray-900 dark:text-white">Tas Lebaran 20x20x15</h5>
                    <p class=" text-gray-700 dark:text-gray-400 text-xl font-bold">RP. 20.000</p>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Rating star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                        <span class=" w-0.5 h-4 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Terjual 3000+</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 w-full flex items-center justify-center">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#"
                            class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <hr class="my-4 mx-auto w-48 h-1 bg-gray-100 rounded border-0 md:my-10 dark:bg-gray-700">

    {{-- section for footer --}}
    <section class=" relative mt-10 ">
        @include('store.components.footer')
    </section>
@endsection
