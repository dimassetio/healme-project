@extends('app.feature.tesGratis.components.testList.base-view')
@section('content-listTes')

        {{-- Button Content --}}
        <div class="mt-8">
            <div class="w-full lg:w-[300px] flex justify-center mx-auto">
                <a href="{{ route('app.run-test', ['tesType' => 'free']) }}"
                    class="text-white text-sm lg:text-lg bg-[#121481] hover:bg-[#3771c2] font-bold rounded-full px-6 py-1 lg:py-2 text-center me-2 mb-2 ">Mulai
                    Test</a>
                <a href=""
                    class="text-black text-sm lg:text-lg bg-[#D9D9D9] hover:bg-[#d9d9d980] font-bold rounded-full px-6 py-1 lg:py-2 text-center me-2 mb-2 ">Kembali</a>
            </div>
            <div class="w-[300px] mx-auto mt-2">
                <p class="text-center text-black opacity-50 font-poppins-regular text-xs lg:text-base">Ketuk disini untuk mengikuti test.
                </p>
            </div>
        </div>
    </div>
@endsection
