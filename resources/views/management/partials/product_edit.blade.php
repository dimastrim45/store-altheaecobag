@extends('management.main')

@section('body')
    <div class=" min-h-screen bg-gray-50 relative ml-64 px-5 pt-5 pb-10">
        <div class=" pt-4 pb-5 h-20 bg-cover px-2 text-cyan-900 bg-center mb-5">
            Pages <b>/ Dashboard</b>
            <br>
            <b>Product Edit</b>
        </div>

        {{-- better image input form --}}
        {{-- <div class=" w-full bg-white rounded-lg h-52 p-2 shadow-xl grid grid-cols-4">
            <div class="  col-span-1">
                <span class=" text-2xl font-bold">
                    Product Photo
                </span>
                <br>
                <div class=" mt-5">
                    Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px.)
                </div>
            </div>
            <div class=" col-span-3 grid grid-cols-5 gap-2 pl-10">
                <div class=" h-3/4 w-3/4 my-auto border-dashed border-2 border-sky-500 rounded-xl grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#40444d" d="M13 19c0 .7.13 1.37.35 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8.35c-.63-.22-1.3-.35-2-.35V5H5v14h8m.96-6.71l-2.75 3.54l-1.96-2.36L6.5 17h6.85c.4-1.12 1.12-2.09 2.05-2.79l-1.44-1.92M20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3Z"/></svg>
                    <span class=" text-base">Main Photo</span>
                </div>
                <div class=" h-3/4 w-3/4 my-auto border-dashed border-2 border-sky-500 rounded-xl grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#40444d" d="M13 19c0 .7.13 1.37.35 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8.35c-.63-.22-1.3-.35-2-.35V5H5v14h8m.96-6.71l-2.75 3.54l-1.96-2.36L6.5 17h6.85c.4-1.12 1.12-2.09 2.05-2.79l-1.44-1.92M20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3Z"/></svg>
                    <span class=" text-base">Photo 2</span>
                </div>
                <div class=" h-3/4 w-3/4 my-auto border-dashed border-2 border-sky-500 rounded-xl grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#40444d" d="M13 19c0 .7.13 1.37.35 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8.35c-.63-.22-1.3-.35-2-.35V5H5v14h8m.96-6.71l-2.75 3.54l-1.96-2.36L6.5 17h6.85c.4-1.12 1.12-2.09 2.05-2.79l-1.44-1.92M20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3Z"/></svg>
                    <span class=" text-base">Photo 3</span>
                </div>
                <div class=" h-3/4 w-3/4 my-auto border-dashed border-2 border-sky-500 rounded-xl grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#40444d" d="M13 19c0 .7.13 1.37.35 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8.35c-.63-.22-1.3-.35-2-.35V5H5v14h8m.96-6.71l-2.75 3.54l-1.96-2.36L6.5 17h6.85c.4-1.12 1.12-2.09 2.05-2.79l-1.44-1.92M20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3Z"/></svg>
                    <span class=" text-base">Photo 4</span>
                </div>
                <div class=" h-3/4 w-3/4 my-auto border-dashed border-2 border-sky-500 rounded-xl grid place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#40444d" d="M13 19c0 .7.13 1.37.35 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8.35c-.63-.22-1.3-.35-2-.35V5H5v14h8m.96-6.71l-2.75 3.54l-1.96-2.36L6.5 17h6.85c.4-1.12 1.12-2.09 2.05-2.79l-1.44-1.92M20 18v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3Z"/></svg>
                    <span class=" text-base">Photo 5</span>
                </div>
            </div>
            
        </div> --}}

        {{-- standard image input form --}}
        <div class=" w-full bg-white rounded-lg h-full p-2 shadow-xl grid grid-cols-4 mb-5">
            <div class="  col-span-1">
                <span class=" text-2xl font-bold">
                    Product Photo
                </span>
                <br>
                <div class=" mt-5">
                    Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran
                    minimum 700 x 700 px.)
                </div>
            </div>
            <div class=" col-span-3 px-10 pt-5">
                <div class=" mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Main
                        Photo</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="main_photo" id="main_photo" type="file">
                </div>
                <div class=" mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Photo
                        1</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="photo_1" id="photo_1" type="file">
                </div>
                <div class=" mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Photo
                        2</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="photo_2" id="photo_2" type="file">
                </div>
                <div class=" mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Photo
                        3</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="photo_3" id="photo_3" type="file">
                </div>
                <div class=" mb-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Photo
                        4</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="photo_4" id="photo_4" type="file">
                </div>
            </div>
        </div>

        {{-- standard product information input form --}}
        <div class=" w-full bg-white rounded-lg h-full p-2 shadow-xl grid grid-cols-4 mb-5">
            <div class=" text-2xl font-bold col-span-4 mb-2">
                Product Information
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">Product Name</span>
                <div class=" mt-5">
                    Cantumkan nama produk disini dengan jelas agar semakin menarik dan mudah ditemukan oleh pembeli.
                </div>
            </div>
            <div class=" col-span-3 px-10 ">
                <div class=" mb-2">
                    <input type="text" id="product_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="HSH 25X20X08">
                </div>
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">Category</span>
                <div class=" mt-5">
                    Pilih kategori yang sesuai karena akan menentukan pengelompokan produk.
                </div>
            </div>
            <div class=" col-span-3 px-10 ">
                <div class=" mb-2">
                    <select id="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>HSH</option>
                        <option>HLB</option>
                        <option>HSC</option>
                    </select>
                </div>
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">Description</span>
                <div class=" mt-5">
                    Pastikan deskripsi produk memuat penjelasan detail terkait produkmu agar pembeli mudah mengerti dan
                    menemukan produkmu.
                </div>
            </div>
            <div class=" col-span-3 px-10 ">
                <div class=" mb-2">
                    <textarea id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-52"
                        placeholder="Tas spunbond Ini cocok digunakan untuk tas berkatan/tas hajatan makanan untuk berbagai acara cocok untuk kotak nasi ukuran besar 24x24

                    Detail bahan dan ukuran
                    Type : HLB / Goodie Bag / box bag
                    Bahan : Spunbond Texture 80gsm
                    Ukuran : 24 cm (T) x 24 cm (P) x 24 cm (L)"></textarea>
                </div>
            </div>
        </div>

        {{-- standard product price form --}}
        <div class=" w-full bg-white rounded-lg h-full p-2 shadow-xl grid grid-cols-4 mb-5">
            <div class=" text-2xl font-bold col-span-4 mb-2">
                Product Price
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">Harga Satuan</span>
                <div class=" mt-5">

                </div>
            </div>
            <div class=" col-span-3 px-10 ">
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        Rp
                    </span>
                    <input type="text" id="website-admin"
                        class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
        </div>

        {{-- standard Product Management price form --}}
        <div class=" w-full bg-white rounded-lg h-full p-2 shadow-xl grid grid-cols-4">
            <div class=" text-2xl font-bold col-span-4 mb-2">
                Product Management
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">Stok Produk</span>

            </div>
            <div class=" col-span-3 px-10 mb-5">
                <input type="text" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan Jumlah Stok">
            </div>
            <div class="col-span-1 mb-5">
                <span class="text-xl font-semibold">SKU (Stock Keeping Unit)</span>

            </div>
            <div class=" col-span-3 px-10 ">
                <input type="text" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan SKU">
            </div>
        </div>

        {{-- ze button --}}
        <div class="mt-10 w-1/4  grid grid-cols-2 gap-5">
            <button type="button"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save</button>
            <button type="button"
                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Cancel</button>
        </div>
    </div>
@endsection
