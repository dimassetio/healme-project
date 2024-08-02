@extends('app.layout.mainHome')
@section('title', 'Home | HealMe')
@section('content')
    {{-- Wrapper --}}
    <div class="w-full bg-white">

        {{-- carousel --}}
        <section class="mb-5 lg:mb-8">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative min-h-40 lg:h-[600px] overflow-hidden">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="{{ route('app.psikolog-join') }}">
                            <img src="{{ asset('assets/img/homePage/carousel-1.png') }}"
                                class="absolute block top-0 left-0 object-cover" alt="...">
                        </a>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href=""{{ route('app.psikolog-join') }}>
                            <img src="{{ asset('assets/img/homePage/carousel-2.png') }}"
                                class="absolute block top-0 left-0 object-cover" alt="...">
                        </a>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 hidden lg:flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 hidden lg:flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 hidden lg:flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </section>

        {{-- Section 1 --}}
        <section class="lg:h-svh gap-0 lg:columns-2 lg:mt-28 px-4 lg:px-20 ">
            {{-- Column Left --}}
            <div class="w-full">
                <h2
                    class="font-bold text-lg text-center lg:text-[34px] lg:leading-[42px] font-poppins-regular lg:text-left">
                    Langkah awal mengenali
                    gejala
                    gangguan kesehatan mental anda</h2>
                <div class="mt-1 lg:mt-14">
                    <p class="text-sm text-center lg:text-[20px] text-stone-500">Bingung dengan apa yang anda alami saat
                        ini? klik
                        dibawah ini</p>
                </div>
                <div class="mt-5 lg:mt-10 flex justify-center lg:block">
                    <button type="submit"
                        class="text-[#121481] bg-[#FFEAE3] focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full text-xs lg:text-sm font-poppins-regular font-extrabold px-6 py-2 lg:py-[10px] text-center shadow-md shadow-gray-400"><a href="{{ route('app.tes-free') }}">Tes
                        Sekarang</a>
                    </button>
                </div>
            </div>
            {{-- Column Right --}}
            <div class="w-full border border-white hidden lg:block">
                <img class="ms-40 mt-[-72px]" width="378" src="{{ asset('assets/img/homePage/pic1.png') }}"
                    alt="">
            </div>
        </section>

        {{-- Section 2 --}}
        <section class="mt-14 lg:mt-[-224px]">
            <div class="w-full text-center">
                <p class="font-poppins-regular text-lg">Fitur</p>
            </div>
            <div class="mx-auto mt-3 max-w-[80%] lg:max-w-[65%]">
                <h2 class="font-semibold font-poppins-regular text-lg lg:text-3xl text-center">Apa saja yang diberikan Healme untuk solusi dibalik kesehatan mental anda</h2>
                {{-- <h2 class="font-semibold font-poppins-regular text-lg lg:text-[34px] text-center lg:-mt-2"></h2> --}}
            </div>
        </section>

        {{-- Section 3 --}}
        <section class="w-full lg:columns-2 px-4 lg:px-24 mt-5 lg:mt-20 gap-0">
            {{-- Column Left --}}
            <div class="w-full">
                <img width="500" src="{{ asset('assets/img/homePage/pic2.png') }}" alt="">
            </div>
            {{-- Column Right --}}
            <div class="mt-4 lg:pt-10 lg:ms-4">
                <ul
                    class="max-w-md space-y-1 text-sm lg:text-base font-poppins-regular text-[18px] list-disc list-outside ps-4">
                    <li>
                        Mengenal gejala dari apa yang anda rasakan
                    </li>
                    <li>
                        Berkonsultasi dengan para ahli psikolog
                    </li>
                    <li>
                        Berbagi pengalaman dan menambah relasi dengan komunitas-komunitas yang ada
                    </li>
                </ul>
            </div>
        </section>

        {{-- Section 4 --}}
        <section class="mt-7 lg:mt-32 mb-10">

            <div class="w-full text-center">
                <p class="font-poppins-regular text-lg">Services</p>
            </div>

            <div class="mx-auto mt-3">
                <h2 class="font-semibold font-poppins-regular text-lg lg:text-3xl text-center">Cari Tahu dan Temukan
                    Solusi Anda melalui para ahli</h2>
            </div>

            <div class="mt-5 lg:mt-14 columns-1 lg:columns-3 px-4 lg:px-8">
                @foreach ($doctors as $doctor)
                    <div class="container rounded-md lg:rounded-2xl pt-4 lg:pt-6 pb-3 lg:pb-4 px-3 lg:px-5 shadow-xl {{ $loop->iteration > 1 ? 'my-4 lg:my-0' : '' }}">
                        <img class="block mx-auto w-32 lg:w-48" width="178" src="{{ Storage::url($doctor->profile_photo) }}""{{ asset('assets/img/homePage/pic3.png') }}" alt="">
                        <div class="w-auto hidden columns-2 lg:flex items-start">
                            <img class="block my-auto" width="22" src="{{ asset('assets/img/homePage/star.png') }}" alt="">
                            <p class="ms-2">5.0</p>
                        </div>
                        <div class="w-auto mt-2 columns-2 flex justify-between lg:pe-5">
                            <div>
                                <p class="font-roboto-regular font-semibold lg:text-lg text-[#42445D]"> Dr. {{ $doctor->name }}</p>
                            </div>
                            <div class="flex items-center">
                                <img class="inline-block w-3" width="16" src="{{ asset('assets/img/homePage/eclipse-green.png') }}" alt="">
                                <p class="inline-block ms-2 font-poppins-regular text-sm lg:text-base font-extralight">
                                    {{ $doctor->status_psikolog }}</p>
                            </div>
                        </div>
                        <div class="w-auto lg:hidden columns-2 flex items-start">
                            <img class="block my-auto w-4 lg:w-auto" width="22" src="{{ asset('assets/img/homePage/star.png') }}" alt="">
                            <p class="ms-2 text-sm lg:text-base">5.0</p>
                        </div>
                        <div class="mt-4 lg:mt-2 columns-2 flex justify-start">
                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-[#DDD3EF] to-[#C1E7FF] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                <span class="relative px-10 py-1 lg:py-2.5 transition-all ease-in duration-75 bg-white rounded-md text-sm lg:text-[16px]">
                                    See detail
                                </span>
                            </button>
                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-black px-4 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                <svg width="26" height="26" viewBox="0 0 30 29" fill="none" class="w-5 lg:w-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 27.5C22.1797 27.5 28 21.6797 28 14.5C28 7.3203 22.1797 1.5 15 1.5C7.8203 1.5 2 7.3203 2 14.5C2 21.6797 7.8203 27.5 15 27.5Z" fill="black" />
                                    <path d="M15 19.7L20.2 14.5L15 9.3" fill="black" />
                                    <path d="M14.1161 18.8161C13.628 19.3043 13.628 20.0957 14.1161 20.5839C14.6043 21.072 15.3957 21.072 15.8839 20.5839L14.1161 18.8161ZM20.2 14.5L21.0839 15.3839C21.572 14.8957 21.572 14.1043 21.0839 13.6161L20.2 14.5ZM15.8839 8.41612C15.3957 7.92796 14.6043 7.92796 14.1161 8.41612C13.628 8.90427 13.628 9.69573 14.1161 10.1839L15.8839 8.41612ZM9.8 13.25C9.10964 13.25 8.55 13.8096 8.55 14.5C8.55 15.1904 9.10964 15.75 9.8 15.75V13.25ZM26.75 14.5C26.75 20.9893 21.4893 26.25 15 26.25V28.75C22.8701 28.75 29.25 22.3701 29.25 14.5H26.75ZM15 26.25C8.51065 26.25 3.25 20.9893 3.25 14.5H0.75C0.75 22.3701 7.12994 28.75 15 28.75V26.25ZM3.25 14.5C3.25 8.01065 8.51065 2.75 15 2.75V0.25C7.12994 0.25 0.75 6.62994 0.75 14.5H3.25ZM15 2.75C21.4893 2.75 26.75 8.01065 26.75 14.5H29.25C29.25 6.62994 22.8701 0.25 15 0.25V2.75ZM15.8839 20.5839L21.0839 15.3839L19.3161 13.6161L14.1161 18.8161L15.8839 20.5839ZM21.0839 13.6161L15.8839 8.41612L14.1161 10.1839L19.3161 15.3839L21.0839 13.6161ZM9.8 15.75H20.2V13.25H9.8V15.75Z" fill="#EDEDED" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        {{-- Section 5 --}}
        <section class="mt-7 lg:mt-32 mb-10 px-4 lg:px-0">

            <div class="w-full text-center">
                <p class="font-poppins-regular text-lg">FAQ</p>
            </div>

            <div class="mx-auto mt-3">
                <h2 class="font-semibold font-poppins-regular text-lg lg:text-[34px] text-center">Tentang Kami</h2>
            </div>



            <div class="lg:w-[1180px] border-2 border-black mx-auto p-3 lg:p-8 rounded-2xl mt-4 lg:mt-12">
                {{-- Accordion 1 --}}
                <div class="rounded-2xl border-[1px] border-black">
                    <div
                        class="accordion-header flex items-center justify-between px-3 lg:px-8 py-2 bg-[#121481]/[0.15] rounded-[14.2px]">
                        <span>
                            <p class="font-poppins-regular text-sm lg:text-lg text-bold max-w-[95%] lg:max-w-none">Seberapa penting sih kesehatan mental itu?
                            </p>
                        </span>
                        <svg data-accordion-icon class="size-5 lg:size-8 rotate-180 shrink-0" aria-hidden="true"
                            viewBox="0 0 48 48" fill="none" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.93934 32.0607C9.47187 32.5932 10.3052 32.6416 10.8924 32.2059L11.0607 32.0607L24 19.122L36.9393 32.0607C37.4719 32.5932 38.3052 32.6416 38.8924 32.2059L39.0607 32.0607C39.5932 31.5281 39.6416 30.6948 39.2059 30.1076L39.0607 29.9393L25.0607 15.9393C24.5281 15.4068 23.6948 15.3584 23.1076 15.7941L22.9393 15.9393L8.93934 29.9393C8.35355 30.5251 8.35355 31.4749 8.93934 32.0607Z"
                                fill="black" />
                        </svg>
                    </div>

                    <div class="accordion-body">
                        <div class="p-3 lg:p-4 border-t text-sm lg:text-base">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet illum id a modi
                                quibusdam
                                neque aliquid eaque libero incidunt consectetur.</p>
                        </div>
                    </div>
                </div>

                {{-- Accordion 2 --}}
                <div class="rounded-2xl border-[1px] border-black mt-5">
                    <div
                        class="accordion-header flex items-center justify-between px-3 lg:px-8 py-2 bg-[#121481]/[0.15] rounded-[14.2px]">
                        <span>
                            <p class="font-poppins-regular text-sm lg:text-lg text-bold max-w-[95%] lg:max-w-none">Apa saja layanan yang diberikan oleh website
                                ini?
                            </p>
                        </span>
                        <svg data-accordion-icon class="size-5 lg:size-8 rotate-180 shrink-0" aria-hidden="true"
                            viewBox="0 0 48 48" fill="none" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.93934 32.0607C9.47187 32.5932 10.3052 32.6416 10.8924 32.2059L11.0607 32.0607L24 19.122L36.9393 32.0607C37.4719 32.5932 38.3052 32.6416 38.8924 32.2059L39.0607 32.0607C39.5932 31.5281 39.6416 30.6948 39.2059 30.1076L39.0607 29.9393L25.0607 15.9393C24.5281 15.4068 23.6948 15.3584 23.1076 15.7941L22.9393 15.9393L8.93934 29.9393C8.35355 30.5251 8.35355 31.4749 8.93934 32.0607Z"
                                fill="black" />
                        </svg>
                    </div>

                    <div class="accordion-body">
                        <div class="p-3 lg:p-4 border-t text-sm lg:text-base">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet illum id a modi
                                quibusdam
                                neque aliquid eaque libero incidunt consectetur.</p>
                        </div>
                    </div>
                </div>
                {{-- Accordion 3 --}}
                <div class="rounded-2xl border-[1px] border-black mt-5">
                    <div
                        class="accordion-header flex items-center justify-between px-3 lg:px-8 py-2 bg-[#121481]/[0.15] rounded-[14.2px]">
                        <span>
                            <p class="font-poppins-regular text-sm lg:text-lg text-bold max-w-[95%] lg:max-w-none">Apa saja diagnosa mengenai kesehatan mental dalam healme ini?
                            </p>
                        </span>
                        <svg data-accordion-icon class="size-5 lg:size-8 rotate-180 shrink-0" aria-hidden="true"
                            viewBox="0 0 48 48" fill="none" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.93934 32.0607C9.47187 32.5932 10.3052 32.6416 10.8924 32.2059L11.0607 32.0607L24 19.122L36.9393 32.0607C37.4719 32.5932 38.3052 32.6416 38.8924 32.2059L39.0607 32.0607C39.5932 31.5281 39.6416 30.6948 39.2059 30.1076L39.0607 29.9393L25.0607 15.9393C24.5281 15.4068 23.6948 15.3584 23.1076 15.7941L22.9393 15.9393L8.93934 29.9393C8.35355 30.5251 8.35355 31.4749 8.93934 32.0607Z"
                                fill="black" />
                        </svg>
                    </div>

                    <div class="accordion-body">
                        <div class="p-3 lg:p-4 border-t text-sm lg:text-base">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet illum id a modi
                                quibusdam
                                neque aliquid eaque libero incidunt consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- Section 6 --}}
        <section class="mt-7 lg:mt-32 mb-7 lg:mb-56">
            <div class="container columns-1 lg:columns-2 mx-auto">
                {{-- Column Left --}}
                <div class="lg:pt-9">
                    {{-- Part 1: Text 1 --}}
                    <div class="w-80 mx-auto">
                        <h2 class="font-bold text-xl lg:text-[30px] lg:leading-[42px] font-poppins-regular text-center">
                            Start growing with our community</h2>
                    </div>
                    <div class="block lg:hidden px-4 mt-3">
                        <img width="500" src="{{ asset('assets/img/homePage/pic4.png') }}" alt="">
                    </div>

                    {{-- Part 2: Text 2 --}}
                    <div class="mt-2 mx-auto">
                        <p class="text-center text-sm max-w-[80%] lg:max-w-none mx-auto lg:mx-0 lg:text-base text-[#000000]/[0.46]">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.</p>
                    </div>

                    {{-- Part 3: Button --}}
                    <div class="w-56 mx-auto mt-5 lg:mt-14 flex justify-center">
                        <button type="button"
                            class="text-white bg-[#121481] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 lg:py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                            detail</button>
                    </div>
                </div>
                {{-- Column Right --}}
                <div class="hidden lg:block">
                    <img width="500" src="{{ asset('assets/img/homePage/pic4.png') }}" alt="">
                </div>
            </div>
        </section>

    </div>
@endsection
