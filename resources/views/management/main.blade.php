<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- sidebar section --}}
@include('management.components.sidebar')

<body class=" bg-slate-500">
    
    {{-- section for body --}}
    @yield('body')

    {{-- sidebar section --}}

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>
