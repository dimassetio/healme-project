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

    <style>
        /* CSS tambahan untuk hover sidebar */
        .sidebar-link:hover {
            background-color: rgba(79, 70, 229, 0.1);
            border-radius: 0 8px 8px 0;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <header class="bg-blue-health opacity-80 fixed z-50 w-full border-b border-gray-400 shadow-[22px]">
        <div class="container mx-auto py-4 px-8 flex justify-between items-center">
            <div class="w-auto flex justify-start items-center gap-7">
                <img width="60" src="{{ asset('assets/img/auth/logo-header.png') }}" alt="">
                <h5 class="text-lg text-white font-poppins-regular">Dashboard Psikolog</h5>
            </div>
            <div>
                <a href="#" class="text-white font-poppins-regular text-md" href="">
                    Halo, {{ Auth::guard('psikolog')->user()->name }}
                </a>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <div class="w-64 bg-white h-screen fixed left-0 top-16 shadow-lg">
        <div class="py-6">
            <ul>
                <!-- Link-menu sidebar -->
                <li>
                    <a href="#"
                        class="block py-2 px-6 text-gray-600 hover:text-white hover:bg-blue-health hover:opacity-30 ">Request
                        Konsultasi</a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block py-2 px-6 text-gray-600 hover:text-white hover:bg-blue-health hover:opacity-30 ">Logout</a>
                    <form id="logout-form" action="{{ route('app.psikolog-logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="ml-64 pt-24 ps-10 pe-8 main-content"> <!-- Pindahkan konten ke kanan sesuai lebar sidebar -->
        <h1 class="text-2xl font-semibold text-gray-500 mb-8 font-poppins-regular">@yield('content-title')</h1>
        @yield('content-dashboard')
    </div>

    <!-- Footer -->
    <footer class="w-full fixed bottom-0 z-50 bg-white shadow-md mt-16">
        <div class="container mx-auto py-4 px-8 text-center">
            <p class="text-gray-600">© 2022 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
