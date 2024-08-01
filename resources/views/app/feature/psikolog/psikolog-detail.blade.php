@extends('app.layout.main')
@section('title', 'Profile Psikolog | HealMe')
@section('content')
    <div class="w-full flex items-center">
        <div class="w-[500px] mx-auto my-20 bg-[#FFFAF0] p-8 rounded-xl shadow-2xl border-2 border-gray-300">
            <div class="w-[188px] h-[188px] overflow-hidden border-4 border-gray-400 rounded-full mx-auto my-3">
                <img src="{{ Storage::url($psikolog->profile_photo) }}" alt="">
            </div>
            <h3 class="text-2xl text-center font-poppins-regular mt-5">
                {{ $psikolog->name }}
            </h3>
            <h4 class="text-lg text-center capitalize font-poppins-regular mt-1 mb-2">
                {{ $psikolog->specialization_therapy }}
            </h4>
            <div class="container mx-auto font-poppins-regular text-center">
                <p class="text-sm px-12 mb-10 opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur
                    reprehenderit error nam, architecto doloribus officiis aut corrupti vitae porro, impedit ipsam
                    dignissimos cumque incidunt qui expedita aspernatur at iure assumenda aliquam. Hic iure asperiores
                    aspernatur atque commodi recusandae possimus, veniam, maiores ut magnam tenetur deserunt debitis ab
                    corporis cum expedita.</p>
                <a href="{{ route('app.psikolog') }}"
                    class="px-8 py-2 my-6 text-center bg-blue-health text-white rounded-xl hover:bg-blue-700">
                    kembali
                </a>
                <a href="{{ route('psikolog.make-request', $psikolog) }}"
                    class="px-8 py-2 ms-2 my-6 text-center bg-yellow-500 text-white rounded-xl hover:bg-yellow-400">
                    <span class="mr-2">konsultasi</span>
                </a>
            </div>
        </div>
    </div>
@endsection
