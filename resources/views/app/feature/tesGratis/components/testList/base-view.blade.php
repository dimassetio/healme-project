@extends('app.layout.main')
@section('title', 'Tes Gratis | HealMe')
@section('content')
    <div class="w-full px-4 lg:px-[90px] py-4">
        <div class="container bg-[#FFEAE3] mx-auto lg:my-10 rounded-[20px] pt-5 lg:pt-14 pb-5">
            {{-- Title Container --}}
            <div class="px-3 lg:px-[230px]">
                <h3 class="font-poppins-regular text-center text-lg lg:text-[26px] font-bold">Apa yang sedang anda rasakan? </h3>
                <p class="font-poppins-regular text-sm text-center lg:text-[16px] mt-2">Yuk kenali Perasaanmu Sekarang Juga!</p>
            </div>
            @yield('content-listTes')
        </div>
    </div>

@endsection
