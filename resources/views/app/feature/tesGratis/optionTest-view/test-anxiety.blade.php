@extends('app.feature.tesGratis.components.testList.base-view')
@section('content-listTes')
    <div>
        {{-- Card Content --}}
        <div class="w-full lg:w-[860px] mt-10 mx-auto flex flex-col lg:flex-row lg:flex-wrap items-center lg:justify-center gap-3 lg:gap-[80px]">
            <a href="{{ route('app.tes-stress') }}">
                <div class="w-[178px] hover:shadow-xl bg-white rounded-lg">
                    <img class="block   mx-auto mb-1" width="150" src="{{ asset('assets/img/tesGratis/stress-pic.png') }} "
                        alt="">
                    <p class="text-center font-poppins-regular text-[18px]">Stres</p>
                </div>
            </a>

            <a href="{{ route('app.tes-depression') }}">
                <div class="w-[178px] pt-[18px] hover:shadow-xl h-[186px] bg-white rounded-lg">
                    <img class="block mx-auto" width="130" src="{{ asset('assets/img/tesGratis/depression-pic.png') }} "
                        alt="">
                    <p class="text-center font-poppins-regular text-[18px]">Depresi</p>
                </div>
            </a>

            <a href="{{ route('app.tes-trauma') }}">
                <div class="w-[178px]  h-[186px] bg-white hover:shadow-xl  rounded-lg">
                    <img class="block   mx-auto mb-1" width="150"
                        src="{{ asset('assets/img/tesGratis/trauma-pic.png') }} " alt="">
                    <p class="text-center font-poppins-regular text-[18px]">Trauma</p>
                </div>
            </a>
            <a href="{{ route('app.tes-mood') }}">
                <div class="w-[178px]  h-[186px] bg-white  hover:shadow-xl rounded-lg">
                    <img class="block   mx-auto mb-1" width="150" src="{{ asset('assets/img/tesGratis/mood-pic.png') }} "
                        alt="">
                    <p class="text-center font-poppins-regular text-[18px]">Gangguan Mood</p>
                </div>
            </a>
            <a href="{{ route('app.tes-depression') }}">
                <div class="w-[178px]  h-[186px] bg-white border-4 border-[#121481] hover:shadow-xl rounded-lg">
                    <img class="block   mx-auto mb-1" width="150"
                        src="{{ asset('assets/img/tesGratis/anxiety-pic.png') }} " alt="">
                    <p class="text-center font-poppins-regular text-[18px]">Kecemasan</p>
                </div>
            </a>
        </div>

        {{-- Subtitle and Text Content --}}
        <div class="w-full lg:w-[860px] mx-auto mt-10">
            <div class="px-4 lg:px-10">
                <h3 class="font-poppins-regular text-lg lg:text-[28px] font-bold text-center">
                    Kecemasan: Lebih dari Sekadar Gugup Biasa
                </h3>
            </div>
            <div class="px-4 lg:px-14 mt-6">
                <p class="text-center text-sm lg:text-[17px] font-poppins-regular">
                    Kecemasan adalah perasaan khawatir atau takut yang intens dan menetap. Meskipun rasa cemas sesekali
                    adalah normal, terutama dalam situasi yang penuh tekanan, kecemasan yang berlebihan dan berkepanjangan
                    dapat mengganggu kehidupan sehari-hari.
                </p>
            </div>
        </div>

        {{-- Button Content --}}
        <div class="mt-8">
            <div class="w-full lg:w-[300px] flex justify-center mx-auto">
                <a href="{{ route('app.run-test', ['tesType' => 'kecemasan']) }}"
                    class="text-white text-sm lg:text-lg bg-[#121481] hover:bg-[#3771c2]  font-bold rounded-full px-6 py-1 lg:py-2 text-center me-2 mb-2 ">Mulai
                    Test</a>
                <a href=""
                    class="text-black text-sm lg:text-lg bg-[#D9D9D9] hover:bg-[#d9d9d980] font-bold rounded-full px-6 py-1 lg:py-2 text-center me-2 mb-2 ">Kembali</a>
            </div>
            <div class="lg:w-[300px] mx-auto mt-2">
                <p class="text-center text-black opacity-50 font-poppins-regular text-xs lg:text-base">Ketuk disini untuk mengikuti test.
                </p>
            </div>
        </div>
    </div>
@endsection
