     <nav class="fixed top-0 left-0 z-50 w-screen bg-blue-health border-gray-200 dark:bg-gray-900">
         <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-3 py-2 lg:p-5">
             <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                 <img src="{{ asset('assets/img/auth/logo-header.png') }}" class="h-7 lg:h-16" />
             </a>


             <div class="hidden lg:block">
                 <ul
                     class="flex flex-wrap items-center justify-center text-white font-semibold font-poppins-regular text-xs lg:text-sm dark:text-white">
                     <li>
                         <a href="{{ route('app.home') }}" class="me-4 hover:text-slate-300 md:me-6 ">Home</a>
                     </li>
                     <li class="ms-4">
                         <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                             class=" flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 hover:text-slate-300 md:hover:bg-transparent md:border-0 "><a href="{{ route('app.tes-free') }}">Tes
                             Gratis <a>
                         </button>
                         <!-- Dropdown menu -->
                         {{-- <div id="dropdownNavbar"
                             class="z-40 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="{{ route('app.tes-stress') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Stress</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-depression') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Depresi</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-trauma') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Trauma</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-mood') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Mood</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-anxiety') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Anxiety</a>
                                 </li>
                             </ul>
                             {{-- <div class="py-1">
                                 <a href="#"
                                     class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                     out</a>
                             </div>
                         </div> --}}
                     </li>
                     <li class="ms-7">
                         <a href="{{ route('app.komunitas') }}" class="me-4 hover:text-slate-300 md:me-6 ">Komunitas</a>
                     </li>
                     <li class="ms-4">
                         <a href="{{ route('app.psikolog') }}" class="me-4 hover:text-slate-300 md:me-6">Psikolog</a>
                     </li>
                 </ul>
             </div>
             <button data-collapse-toggle="navbar-hamburger" type="button"
                 class="inline-flex lg:hidden items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                 aria-controls="navbar-hamburger" aria-expanded="false">
                 <span class="sr-only">Open main menu</span>
                 <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M1 1h15M1 7h15M1 13h15" />
                 </svg>
             </button>
             <div class="hidden w-full" id="navbar-hamburger">
                 <ul
                     class="flex flex-col font-medium mt-4 rounded-lg bg-blue-health dark:bg-gray-800 dark:border-gray-700 text-sm">
                     <li>
                         <a href="{{ route('app.home') }}" class="block py-2 px-3 text-white"
                             aria-current="page">Home</a>
                     </li>
                     <li>
                         <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2"
                             class=" flex items-center justify-between w-full py-2 px-3 text-white rounded">Tes
                             Gratis
                             <svg class="w-2.5 h-2.5 ms-2.5" viewBox="0 0 15 11" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7.5 11L0.138784 0.5L14.8612 0.5L7.5 11Z" fill="#D9D9D9" />
                             </svg>
                         </button>
                         <!-- Dropdown menu -->
                         <div id="dropdownNavbar2"
                             class="z-[100] hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                             <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                 aria-labelledby="dropdownLargeButton">
                                 <li>
                                     <a href="{{ route('app.tes-stress') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Stress</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-depression') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Depresi</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-trauma') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Trauma</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-mood') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Mood</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('app.tes-anxiety') }}"
                                         class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tes
                                         Anxiety</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li>
                         <a href="{{ route('app.komunitas') }}" class="block py-2 px-3 text-white"
                             aria-current="page">Komunitas</a>
                     </li>
                     <li>
                         <a href="{{ route('app.psikolog') }}" class="block py-2 px-3 text-white"
                             aria-current="page">Psikolog</a>
                     </li>
                     <li class="flex gap-2 items-center ps-2 py-3">
                         <a href="{{ route('auth.register') }}" class="text-white bg-[#864AF9] px-3 py-1 rounded-md">Daftar</a>
                         <a href="{{ route('auth.login') }}" class="text-[#121481] bg-[#FFEAE3] px-3 py-1 rounded-md">Masuk</a>
                     </li>
                 </ul>
             </div>

             @auth
                 <div>
                     <a href="{{ route('auth.register') }}"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                         class="text-white font-poppins-regular inline-block bg-[#de8740] hover:bg-[#ad6b34] focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-md px-5 py-2.5 me-2 mb-2 focus:outline-none">Logout</a>
                 </div>
                 <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                     @csrf
                     @method('DELETE')
                 </form>
             @else
                 <div class="pt-2 hidden lg:block self-stretch">
                     <a href="{{ route('auth.register') }}"
                         class="text-white font-poppins-regular inline-block bg-[#864AF9] hover:bg-[#7442d2] focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-xs lg:text-base px-2.5 lg:px-5 py-1 lg:py-2.5 me-2 mb-2 focus:outline-none">Daftar</a>
                     <a href="{{ route('auth.login') }}"
                         class="text-xs lg:text-base px-2.5 lg:px-5 py-1 lg:py-2.5 font-poppins-regular font-bold ms-[-7px] lg:me-2 mb-2  text-[#121481] focus:outline-none bg-[#FFEAE3] rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 ">Masuk</a>
                 </div>
             @endauth


         </div>
     </nav>
