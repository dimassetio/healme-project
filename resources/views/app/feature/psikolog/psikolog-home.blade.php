@extends('app.layout.main')
@section('title', 'Psikolog | HealMe')
@section('content')
    {{-- Wrapper --}}
    <div class="w-full">
        {{-- Banner Head --}}
        <div class="w-full">
            <img class="bg-cover" src="{{ asset('assets/img/psikolog/banner-head.png') }}" alt="">
        </div>
        {{-- Content --}}
        <div class="my-28">
            {{-- Section 1 --}}
            <section class="mb-5">
                <h2 class="font-poppins-regular font-bold text-[30px] text-center">
                    Mau Mulai Konsultasi?
                </h2>
                <h2 class="font-poppins-regular font-bold text-[30px] text-center">
                    Yuk Kenali Psikolog Kami!
                </h2>
            </section>

            {{-- Section 2 --}}
            <section>
                {{-- Wrapper --}}
                <div class="w-full px-16 mb-10">
                    <div class="grid grid-cols-3 gap-4 grid-flow-row">
                        @foreach ($psikologs as $psikolog)
                            {{-- item 1 --}}
                            <div class="w-[400px] rounded-2xl pt-5 pb-4 px-5 shadow-xl border">
                                <div
                                    class="w-[180px] h-[180px] mx-auto overflow-hidden rounded-full border-2 border-slate-300">
                                    <img class="block object-fill mx-auto border rounded-md"
                                        src="{{ Storage::url($psikolog->profile_photo) }}" alt="">
                                </div>

                                <div class="w-auto columns-2 flex items-start">
                                    <img class="block my-auto" width="22"
                                        src="{{ asset('assets/img/homePage/star.png') }}" alt="" srcset="">
                                    <p class="ms-2">5.0</p>
                                </div>
                                <div class="w-auto mt-2 columns-2 flex justify-between pe-5">
                                    <div>
                                        <p class="font-roboto-regular font-semibold text-lg text-[#42445D]">
                                            {{ $psikolog->name }}
                                        </p>
                                    </div>
                                    <div>
                                        <img class="inline-block -mt-1" width="16"
                                            src="{{ asset('assets/img/homePage/eclipse-green.png') }}" alt="">
                                        <p class="inline-block ms-2 font-poppins-regular font-extralight">Available</p>
                                    </div>
                                </div>
                                <div class="pe-1">
                                    <p class="font-roboto-regular text-[#42445D]">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit. Fuga,
                                        distinctio!</p>
                                </div>
                                <div class="mt-3 columns-2 flex justify-center gap-2">
                                    <a href="{{ route('app.psikolog-profile', $psikolog) }}"
                                        class="bg-[#908A8A] hover:bg-[#635f5f] py-2 px-3 font-poppins-regular font-semibold text-white rounded-2xl">
                                        Lihat profil
                                    </a>
                                    <a href="{{ route('psikolog.make-request', $psikolog) }}"
                                        class="bg-[#908A8A] hover:bg-[#635f5f] py-2 px-3 font-poppins-regular font-semibold text-white rounded-2xl">
                                        Konsultasi
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Section 3 --}}
            <section class="w-[550px] mx-auto my-24">
                <h4 class="text-4xl font-poppins-regular leading-[50px]">
                    Yuk, konsultasi bersama psikolog profesional <span class="text-[#121481]">Healme</span> sekarang juga!
                    <br><br>
                </h4>
            </section>

            <section class="w-[800px] mx-auto mb-20">
                <div
                    class="bg-gradient-to-tr from-cyan-500 to-blue-500 shadow-xl border border-gray-200 rounded-lg p-8 md:p-12 mb-8">
                    <h5 class="text-white dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Berminat menjadi
                        psikolog HealMe?</h5>
                    <p class="text-lg font-normal text-gray-100 dark:text-gray-400 mb-6">Bergabunglah menjadi psikolog kami
                        dan
                        bantu teman-teman dengan permasalahan mental health!</p>
                    <a href="{{ route('app.psikolog-join') }}"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Masuk disini
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </section>
        </div>

        <div class="w-full">
            <img class="bg-cover" src="{{ asset('assets/img/psikolog/banner-foot.png') }}" alt="">
        </div>
    </div>
@endsection
