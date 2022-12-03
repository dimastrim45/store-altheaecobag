@extends('management.main')

@section('body')
    <div class=" h-max bg-gray-50 relative ml-64 pl-5 pt-5 pb-10">
        <div class=" relative pt-4 pb-5 overflow-visible mr-5 h-60 bg-cover rounded-2xl px-2 text-white bg-center"
            style="background-image: url('images/curved/curved0.jpg'); background-position-y: 50%">
            Pages <b>/ Dashboard</b>
            <br>
            <b>Profile</b>
            <span class=" h-full bg-yellow-400 fixed"></span>
            <div
                class="absolute bottom-0 w-11/12 flex p-4 h-24 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/30 bg-clip-border backdrop-blur-xl backdrop-saturate-200 text-black -mb-10 shadow-2xl left-0 lg:mx-12">
                {{-- for photo --}}
                <img src="images/bruce-mars.jpg" alt="man" class=" w-16 rounded-xl">
                <div class=" text-gray-600 font-semibold ml-5 text-lg my-auto">
                    Sam Martin
                    <br>
                    <span class=" text-base font-normal">Sales Manager</span>
                </div>
            </div>
        </div>

        <div class=" mt-20 w-2/3">
            <form>
                <div class="mb-6">
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="username" id="username"
                        class="shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light cursor-not-allowed"
                        value="sammartintm45" aria-label="disabled input" disabled>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="name" id="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        value="Dimas Tri Martono" required>
                </div>
                <div class="mb-6">
                    <label for="position"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <input type="text" id="position"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        value="Sales Manager" required>
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change
                        password</label>
                    <input type="password" id="password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                    account info</button>
            </form>
        </div>
    </div>
@endsection
