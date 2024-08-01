@extends('auth.layout.main')
@section('title', 'Login | HealMe')
@section('content')
    <div class="container pt-3">
        <h2 class="text-[40px] text-center mt-24">Login </h2>
        <div class="container mt-10">
            <form class="max-w-sm mx-auto" action="{{ route('auth.login-action') }}" method="POST">
                @csrf
                @method('POST')
                {{-- with validation email --}}
                <input type="text" name="identifier" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 mt-3 shadow-lg  shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Email atau ponsel" required>
                <input type="password" aria-describedby="helper-text-explanation" name="password"
                    class="bg-gray-50 mt-3 shadow-lg shadow-gray-300 border-[1px] border-gray-950 text-gray-900 text-sm rounded-2xl block w-full py-[10px] placeholder:text-[17px]"
                    placeholder="Password" required>

                @if (@session('kredensial'))
                    <p class="text-red-500 text-sm">
                        {{ session('kredensial') }}
                    </p>
                @endif
                <div class="w-auto mt-8 flex justify-center">
                    <button type="submit"
                        class="text-white text-[18px] bg-button-blue focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full text-sm font-normal px-8 py-2.5 text-center">Login</button>
                </div>
            </form>
        </div>
        <div class="container mx-auto mt-10 text-center">
            <p class="font-poppins-regular">Belum punya akun? Buat <a href="{{ route('auth.register') }}"
                    class="text-blue-600">di sini</a></p>
        </div>
    </div>
@endsection
