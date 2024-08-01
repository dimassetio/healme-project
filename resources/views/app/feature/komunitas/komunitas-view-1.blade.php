@extends('app.layout.main')
@section('title', 'Komunitas | HealMe')
@section('content')
    <div class="w-full h-screen bg-cover bg-center flex flex-col items-center justify-center"
        style="background-image: url('./assets/img/komunitas/bg-community.png')">
        <div class="w-[940px] mx-auto ">
            <p class="text-center text-[30px] font-poppins-semibold text-white font-semibold">Temukan Dukungan, Solusi, dan
                Pertemanan untuk
                Kesehatan Mental Anda hanya di HealMe Community</p>

        </div>
        <div class="w-[940px] mx-auto  mt-3">
            <p class="text-center text-sm font-poppins-regular text-white font-extralight px-24">
                Bergabunglah dengan sesama untuk berbagi pengalaman, mencari dukungan, dan membangun hubungan yang mendukung
                dalam perjalanan kesehatan mental Anda
            </p>
        </div>
        <div class="w-[940px] mx-auto  mt-10 text-center">
            <a href="{{ route('app.komunitas-options') }}"
                class="py-2.5 px-6 me-2 mb-2 text-sm text-white font-medium focus:outline-none bg-[#121481] bg-opacity-50 rounded-2xl border border-gray-200focus:z-10 focus:ring-4 focus:ring-gray-100  font-poppins-regular">
                Gabung disini >>
            </a>
        </div>
    </div>
@endsection
