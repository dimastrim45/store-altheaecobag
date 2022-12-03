@extends('management.main')

@section('body')
    <div class=" h-fit bg-gray-50 relative ml-64 pl-5 pb-20">
        {{-- breadcrumbs --}}
        <div class=" pt-4 pb-5">
            Pages <b>/ Dashboard</b>
        </div>

        {{-- for top section --}}
        <div class=" grid grid-cols-4 gap-5 pb-10">
            {{-- the cards --}}
            <div class=" w-60 h-16 bg-white rounded-2xl p-2 text-sm font-medium text-gr flex hover:bg-slate-100 drop-shadow-lg">
                <div class="w-3/4 pl-2">
                    <div>Today's Money</div>
                    <div class=" font-bold pt-1">RP 53,000 <span class=" text-lime-400"> +55%</span></div>
                </div>
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-1/4 flex items-center justify-center rounded-lg text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M21.6 29a1 1 0 0 0-1-1h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M22.54 24h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M22 32h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="M32.7 32h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="currentColor" d="M33.7 28h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-5"/><path fill="currentColor" d="M33.74 26a28 28 0 0 0-2.82-10.12a20.24 20.24 0 0 0-6.32-7.17L27 3.42a1 1 0 0 0-.07-1a1 1 0 0 0-.8-.42H9.8a1 1 0 0 0-.91 1.42l2.45 5.31a20.33 20.33 0 0 0-6.28 7.15c-2.15 4-2.82 8.89-3 12.28a3.6 3.6 0 0 0 1 2.71a3.79 3.79 0 0 0 2.74 1.07H12V30H5.72a1.68 1.68 0 0 1-1.21-.52a1.62 1.62 0 0 1-.45-1.23c.14-2.61.69-7.58 2.76-11.45a18 18 0 0 1 6.26-6.8h1a30.81 30.81 0 0 0-1.87 2.92a22.78 22.78 0 0 0-1.47 3.34l1.37.92a24 24 0 0 1 1.49-3.47A29.1 29.1 0 0 1 16.05 10h1a21.45 21.45 0 0 1 1.41 5a22.54 22.54 0 0 1 .32 3.86l1.58-1.11a24.15 24.15 0 0 0-.32-3A24.82 24.82 0 0 0 18.76 10h.78l.91-2h-7.24l-1.85-4h13.21l-2.5 5.47a9.93 9.93 0 0 1 1.23.78a18.63 18.63 0 0 1 5.86 6.57A26.59 26.59 0 0 1 31.73 26Z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                </div>
            </div>
            <div class=" w-60 h-16 bg-white rounded-2xl p-2 text-sm font-medium text-gr flex hover:bg-slate-100 drop-shadow-lg">
                <div class="w-3/4 pl-2">
                    <div>Today's Money</div>
                    <div class=" font-bold pt-1">RP 53,000 <span class=" text-lime-400"> +55%</span></div>
                </div>
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-1/4 flex items-center justify-center rounded-lg text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M21.6 29a1 1 0 0 0-1-1h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M22.54 24h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M22 32h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="M32.7 32h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="currentColor" d="M33.7 28h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-5"/><path fill="currentColor" d="M33.74 26a28 28 0 0 0-2.82-10.12a20.24 20.24 0 0 0-6.32-7.17L27 3.42a1 1 0 0 0-.07-1a1 1 0 0 0-.8-.42H9.8a1 1 0 0 0-.91 1.42l2.45 5.31a20.33 20.33 0 0 0-6.28 7.15c-2.15 4-2.82 8.89-3 12.28a3.6 3.6 0 0 0 1 2.71a3.79 3.79 0 0 0 2.74 1.07H12V30H5.72a1.68 1.68 0 0 1-1.21-.52a1.62 1.62 0 0 1-.45-1.23c.14-2.61.69-7.58 2.76-11.45a18 18 0 0 1 6.26-6.8h1a30.81 30.81 0 0 0-1.87 2.92a22.78 22.78 0 0 0-1.47 3.34l1.37.92a24 24 0 0 1 1.49-3.47A29.1 29.1 0 0 1 16.05 10h1a21.45 21.45 0 0 1 1.41 5a22.54 22.54 0 0 1 .32 3.86l1.58-1.11a24.15 24.15 0 0 0-.32-3A24.82 24.82 0 0 0 18.76 10h.78l.91-2h-7.24l-1.85-4h13.21l-2.5 5.47a9.93 9.93 0 0 1 1.23.78a18.63 18.63 0 0 1 5.86 6.57A26.59 26.59 0 0 1 31.73 26Z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                </div>
            </div>
            <div class=" w-60 h-16 bg-white rounded-2xl p-2 text-sm font-medium text-gr flex hover:bg-slate-100 drop-shadow-lg">
                <div class="w-3/4 pl-2">
                    <div>Today's Money</div>
                    <div class=" font-bold pt-1">RP 53,000 <span class=" text-lime-400"> +55%</span></div>
                </div>
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-1/4 flex items-center justify-center rounded-lg text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M21.6 29a1 1 0 0 0-1-1h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M22.54 24h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M22 32h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="M32.7 32h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="currentColor" d="M33.7 28h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-5"/><path fill="currentColor" d="M33.74 26a28 28 0 0 0-2.82-10.12a20.24 20.24 0 0 0-6.32-7.17L27 3.42a1 1 0 0 0-.07-1a1 1 0 0 0-.8-.42H9.8a1 1 0 0 0-.91 1.42l2.45 5.31a20.33 20.33 0 0 0-6.28 7.15c-2.15 4-2.82 8.89-3 12.28a3.6 3.6 0 0 0 1 2.71a3.79 3.79 0 0 0 2.74 1.07H12V30H5.72a1.68 1.68 0 0 1-1.21-.52a1.62 1.62 0 0 1-.45-1.23c.14-2.61.69-7.58 2.76-11.45a18 18 0 0 1 6.26-6.8h1a30.81 30.81 0 0 0-1.87 2.92a22.78 22.78 0 0 0-1.47 3.34l1.37.92a24 24 0 0 1 1.49-3.47A29.1 29.1 0 0 1 16.05 10h1a21.45 21.45 0 0 1 1.41 5a22.54 22.54 0 0 1 .32 3.86l1.58-1.11a24.15 24.15 0 0 0-.32-3A24.82 24.82 0 0 0 18.76 10h.78l.91-2h-7.24l-1.85-4h13.21l-2.5 5.47a9.93 9.93 0 0 1 1.23.78a18.63 18.63 0 0 1 5.86 6.57A26.59 26.59 0 0 1 31.73 26Z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                </div>
            </div>
            <div class=" w-60 h-16 bg-white rounded-2xl p-2 text-sm font-medium text-gr flex hover:bg-slate-100 drop-shadow-lg">
                <div class="w-3/4 pl-2">
                    <div>Today's Money</div>
                    <div class=" font-bold pt-1">RP 53,000 <span class=" text-lime-400"> +55%</span></div>
                </div>
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-1/4 flex items-center justify-center rounded-lg text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M21.6 29a1 1 0 0 0-1-1h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 1-1Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M22.54 24h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M22 32h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="M32.7 32h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="currentColor" d="M33.7 28h-7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2Z" class="clr-i-outline clr-i-outline-path-5"/><path fill="currentColor" d="M33.74 26a28 28 0 0 0-2.82-10.12a20.24 20.24 0 0 0-6.32-7.17L27 3.42a1 1 0 0 0-.07-1a1 1 0 0 0-.8-.42H9.8a1 1 0 0 0-.91 1.42l2.45 5.31a20.33 20.33 0 0 0-6.28 7.15c-2.15 4-2.82 8.89-3 12.28a3.6 3.6 0 0 0 1 2.71a3.79 3.79 0 0 0 2.74 1.07H12V30H5.72a1.68 1.68 0 0 1-1.21-.52a1.62 1.62 0 0 1-.45-1.23c.14-2.61.69-7.58 2.76-11.45a18 18 0 0 1 6.26-6.8h1a30.81 30.81 0 0 0-1.87 2.92a22.78 22.78 0 0 0-1.47 3.34l1.37.92a24 24 0 0 1 1.49-3.47A29.1 29.1 0 0 1 16.05 10h1a21.45 21.45 0 0 1 1.41 5a22.54 22.54 0 0 1 .32 3.86l1.58-1.11a24.15 24.15 0 0 0-.32-3A24.82 24.82 0 0 0 18.76 10h.78l.91-2h-7.24l-1.85-4h13.21l-2.5 5.47a9.93 9.93 0 0 1 1.23.78a18.63 18.63 0 0 1 5.86 6.57A26.59 26.59 0 0 1 31.73 26Z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                </div>
            </div>
        </div>

        {{-- chart section --}}
        <div class=" flex lg:flex-row md:flex-col gap-x-2 md:gap-y-2 mr-4 mb-20">
            {{-- user visitor chart --}}
            @include('management.components.chart')

            {{-- sales chart --}}
            @include('management.components.chart')
        </div>

        <hr class="my-4 mx-auto w-48 h-1 bg-black rounded border-0 md:my-10 dark:bg-gray-700">
    </div>
@endsection
