@extends('app.feature.tesGratis.components.testRun.base-view')
@section('title', 'Tes Gratis | Healme')
@section('content-runTest')
<div>
    <div>
        <h4 class="font-poppins-regular text-[24px] font-bold">Apakah Anda Mengalami Gangguan Mental Akhir-Akhir Ini?</h4>
    </div>
    <div class="mt-6 font-poppins-regular text-[16px] font-thin">
        Jawab pertanyaan di bawah ini untuk mengetahui masalah kesehatan mental yang Anda alami
        Hasil tes akan dikirim melalui email. Pastikan memasukan email dengan benar, dan jangan lupa memeriksa folder
        spam Anda.
    </div>
    <div class="mt-6 font-poppins-regular">
        <form action="{{ route('app.count-test-stress', ['tesType' => 'free']) }}" method="POST">
            @csrf
            @method('POST')

            @foreach ($questions as $question)
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">{{ $question['pertanyaan'] }}</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        @foreach ($question['opsi'] as $index => $option)
                            <div class="flex items-center mb-1">
                                <input id="{{ $question['id'] }}" type="radio" name="{{ $question['soal'] }}" value="{{ $index + 1 }}"
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                                <label for="{{ $question['id'] }}"
                                    class="block ms-2 text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                    {{ $option }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- Button Submit --}}
            <div class="mx-auto text-center">
                <button type="submit"
                    class="text-white bg-[#121481] hover:bg-blue-800 focus:outline-none focus:ring-4
                    focus:ring-blue-300 font-bold rounded-full text-[16px] px-5 py-2.5 text-center me-2 mb-2
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lihat
                    Hasilnya</button>
                <p class="mt-1 text-sm text-black opacity-50 font-light">
                    Ketuk disini untuk mengikuti melihat hasil.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
