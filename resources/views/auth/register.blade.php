@extends('auth.layout.main')
@section('title', 'Register | HealMe')
@section('content')
    <div class="container pt-3">
        <h2 class="text-[40px] text-center mt-6">Daftar</h2>
        <div class="container mt-10">
            <form class="max-w-sm mx-auto font-manrope-regular" action="" method="POST">
                @csrf
                @method('POST')
                <input type="text" name="name" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan Nama">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <input type="email" name="email" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan Email">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <input type="text" name="phone_number" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan Nomor HP">
                @error('phone_number')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="birthdate" id="ttl"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan tanggal lahir">
                @error('birthdate')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <input type="password" name="password" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan Password">
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <input type="password" name="password_confirmation" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Masukkan Ulang Password">
                @error('password_confirmation')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="w-auto mt-8 flex justify-center">
                    <button type="submit"
                        class="text-white text-[18px] bg-button-blue focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full text-sm font-normal px-12 py-2.5 text-center">Daftar</button>
                </div>
            </form>
        </div>
        <div class="container mx-auto mt-4 text-center">
            <p class="font-poppins-regular">sudah punya akun? masuk <a href="{{ route('auth.login') }}"
                    class="text-blue-600">di sini</a></p>
        </div>
    </div>
@endsection
