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
    {{-- Header Auth Layout --}}
    @include('auth.layout.header')

    {{-- Main Auth Layout --}}
    <main>
        {{-- Content Auth --}}
        <div class="gap-0 columns-2">
            {{-- Container Left --}}
            <div class="container w-full">
                <img src="{{ asset('assets/img/auth/side-content.png') }}" alt="">
            </div>
            {{-- Container Right --}}
            <div class="container w-full">
                @yield('content')
            </div>
        </div>
    </main>

    {{-- Footer Auth Layout --}}
    @include('auth.layout.footer')

    @include('sweetalert::alert')
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
