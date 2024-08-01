@extends('app.layout.main')
@section('title', 'Tes Gratis | HealMe')
@section('content')
    <div class="w-full px-56 py-4">
        <div class="container  bg-[#FFEAE3] mx-auto my-10  rounded-[20px] pt-10 pb-10 px-14">
            @yield('content-runTest')
        </div>
    </div>
@endsection
