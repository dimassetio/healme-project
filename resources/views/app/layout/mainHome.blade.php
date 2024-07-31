<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    {{-- Google Font: Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- Google Font: Manrope --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

    {{-- Google Font: Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Roboto&display=swap" rel="stylesheet">



    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    {{-- Header App Layout (Home) --}}
    @include('app.layout.header')

    {{-- Main App Layout (Home) --}}
    <main class="pt-14 lg:pt-20">
        {{-- Content App (Home) --}}
        @yield('content')
    </main>

    {{-- Footer App Layout (Home) --}}
    @include('app.layout.footerHome')

    @include('sweetalert::alert')

    <script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
