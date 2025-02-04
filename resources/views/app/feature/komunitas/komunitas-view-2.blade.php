@extends('app.layout.main')
@section('title', 'Komunitas | HealMe')
@section('content')
    <div class="w-full h-screen bg-cover bg-center flex flex-col items-center justify-center"
        style="background-image: url('./assets/img/komunitas/bg-community-2.png')">
        <div class="w-[940px] mx-auto ">
            <p class="text-center text-[30px] font-poppins-semibold text-white font-semibold">Temukan Dukungan, Solusi, dan
                Pilih Komunitas Kesehatan Mental yang Sesuai untuk Anda!</p>

        </div>
        <div class="w-[940px] mx-auto mt-3">
            <p class="text-center text-md font-poppins-regular text-white font-extralight px-24">
                Temukan komunitas yang sesuai dengan kebutuhan dan minat Anda di sini. Dengan beragam pilihan dari grup
                dukungan hingga forum diskusi, Anda dapat bergabung dengan komunitas yang paling relevan dengan perjalanan
                kesehatan mental Anda. Temukan tempat untuk berbagi cerita, mendapatkan saran, dan membangun dukungan
                bersama mereka yang memahami. Jelajahi card komunitas di bawah ini dan mulailah menjalin koneksi yang
                berarti.
            </p>
        </div>

        <div class="columns-3 px-3 mt-14">
            <div class="w-[400px] bg-white p-3 opacity-85 rounded-2xl">
                <div>
                    <img class="float-left m-2" src="{{ asset('assets/img/komunitas/image-3.png') }}" alt=""
                        width="115">
                    <p class="font-bold text-md font-poppins-regular">Into The Light Indonesia</p>
                    <p class="text-sm font-poppins-regular mt-1">Into The Light Indonesia merupakan komunitas berbasis anak
                        muda
                        yang
                        aktif melakukan advokasi, kajian, dan edukasi mengenai pencegahan bunuh diri dan kesehatan jiwa.
                    </p>
                </div>
                <div class="mt-6 text-right">
                    <a href="https://t.me/+6282239891375" target="_blank"
                        class="px-3 py-2 text-sm font-medium font-poppins-regular text-center inline-flex items-center text-white  outline-white bg-[#121481] opacity-50 rounded-2xl shadow-slate-800 shadow-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Join Grup Disini
                        <svg class="w-6 h-6 ms-2 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="M9.6967 0.833374C4.6367 0.833374 0.530029 4.94004 0.530029 10C0.530029 15.06 4.6367 19.1667 9.6967 19.1667C14.7567 19.1667 18.8634 15.06 18.8634 10C18.8634 4.94004 14.7567 0.833374 9.6967 0.833374ZM13.95 7.06671C13.8125 8.51504 13.2167 12.035 12.9142 13.6575C12.7859 14.345 12.5292 14.5742 12.2909 14.6017C11.7592 14.6475 11.3559 14.2534 10.8425 13.9142C10.0359 13.3825 9.57753 13.0525 8.79836 12.5392C7.89086 11.9434 8.47753 11.6134 9.00003 11.0817C9.13753 10.9442 11.4842 8.80837 11.53 8.61587C11.5364 8.58672 11.5355 8.55645 11.5276 8.52769C11.5196 8.49894 11.5047 8.47257 11.4842 8.45087C11.4292 8.40504 11.3559 8.42337 11.2917 8.43254C11.2092 8.45087 9.92586 9.30337 7.42336 10.99C7.0567 11.2375 6.7267 11.3659 6.43336 11.3567C6.10336 11.3475 5.48003 11.1734 5.01253 11.0175C4.43503 10.8342 3.98586 10.7334 4.02253 10.4125C4.04086 10.2475 4.27003 10.0825 4.70086 9.90837C7.37753 8.74421 9.15586 7.97421 10.045 7.60754C12.5934 6.54421 13.1159 6.36087 13.4642 6.36087C13.5375 6.36087 13.7117 6.37921 13.8217 6.47087C13.9134 6.54421 13.9409 6.64504 13.95 6.71837C13.9409 6.77337 13.9592 6.93837 13.95 7.06671Z"
                                fill="white" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="w-[400px] bg-white p-3 opacity-85 rounded-2xl">
                <div>
                    <img class="float-left m-2" src="{{ asset('assets/img/komunitas/image-4.png') }}" alt=""
                        width="115">
                    <p class="font-bold text-md font-poppins-regular">KPSI</p>
                    <p class="text-sm font-poppins-regular mt-1">Komunitas Peduli Skizofrenia Indonesia (KPSI) merupakan
                        komunitas yang berorientasi pada edukasi dan pelayanan kepada orang dengan skizofrenia, yakni jenis
                        gangguan jiwa dengan halusinasi.
                    </p>
                </div>
                <div class="mt-1 text-right">
                    <a href="https://t.me/+6282239891375" target="_blank"
                        class="px-3 py-2 text-sm font-medium font-poppins-regular text-center inline-flex items-center text-white  outline-white bg-[#121481] opacity-50 rounded-2xl shadow-slate-800 shadow-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Join Grup Disini
                        <svg class="w-6 h-6 ms-2 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="M9.6967 0.833374C4.6367 0.833374 0.530029 4.94004 0.530029 10C0.530029 15.06 4.6367 19.1667 9.6967 19.1667C14.7567 19.1667 18.8634 15.06 18.8634 10C18.8634 4.94004 14.7567 0.833374 9.6967 0.833374ZM13.95 7.06671C13.8125 8.51504 13.2167 12.035 12.9142 13.6575C12.7859 14.345 12.5292 14.5742 12.2909 14.6017C11.7592 14.6475 11.3559 14.2534 10.8425 13.9142C10.0359 13.3825 9.57753 13.0525 8.79836 12.5392C7.89086 11.9434 8.47753 11.6134 9.00003 11.0817C9.13753 10.9442 11.4842 8.80837 11.53 8.61587C11.5364 8.58672 11.5355 8.55645 11.5276 8.52769C11.5196 8.49894 11.5047 8.47257 11.4842 8.45087C11.4292 8.40504 11.3559 8.42337 11.2917 8.43254C11.2092 8.45087 9.92586 9.30337 7.42336 10.99C7.0567 11.2375 6.7267 11.3659 6.43336 11.3567C6.10336 11.3475 5.48003 11.1734 5.01253 11.0175C4.43503 10.8342 3.98586 10.7334 4.02253 10.4125C4.04086 10.2475 4.27003 10.0825 4.70086 9.90837C7.37753 8.74421 9.15586 7.97421 10.045 7.60754C12.5934 6.54421 13.1159 6.36087 13.4642 6.36087C13.5375 6.36087 13.7117 6.37921 13.8217 6.47087C13.9134 6.54421 13.9409 6.64504 13.95 6.71837C13.9409 6.77337 13.9592 6.93837 13.95 7.06671Z"
                                fill="white" />
                        </svg>

                    </a>
                </div>
            </div>
            <div class="w-[400px] bg-white p-3 opacity-85 rounded-2xl">
                <div>
                    <img class="float-left m-2" src="{{ asset('assets/img/komunitas/image-5.png') }}" alt=""
                        width="115">
                    <p class="font-bold text-md font-poppins-regular">DWI</p>
                    <p class="text-sm font-poppins-regular mt-1">Depression Warriors Indonesia merupakan support
                        group berbasis komunitas untuk orang-orang yang tengah berjuang menghadapi depresi untuk menciptakan
                        kesadaran (awareness) kesehatan mental.
                    </p>
                </div>
                <div class="mt-1 text-right">
                    <a href="https://t.me/+6282239891375" target="_blank"
                        class="px-3 py-2 text-sm font-medium font-poppins-regular text-center inline-flex items-center text-white  outline-white bg-[#121481] opacity-50 rounded-2xl shadow-slate-800 shadow-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Join Grup Disini
                        <svg class="w-6 h-6 ms-2 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="M9.6967 0.833374C4.6367 0.833374 0.530029 4.94004 0.530029 10C0.530029 15.06 4.6367 19.1667 9.6967 19.1667C14.7567 19.1667 18.8634 15.06 18.8634 10C18.8634 4.94004 14.7567 0.833374 9.6967 0.833374ZM13.95 7.06671C13.8125 8.51504 13.2167 12.035 12.9142 13.6575C12.7859 14.345 12.5292 14.5742 12.2909 14.6017C11.7592 14.6475 11.3559 14.2534 10.8425 13.9142C10.0359 13.3825 9.57753 13.0525 8.79836 12.5392C7.89086 11.9434 8.47753 11.6134 9.00003 11.0817C9.13753 10.9442 11.4842 8.80837 11.53 8.61587C11.5364 8.58672 11.5355 8.55645 11.5276 8.52769C11.5196 8.49894 11.5047 8.47257 11.4842 8.45087C11.4292 8.40504 11.3559 8.42337 11.2917 8.43254C11.2092 8.45087 9.92586 9.30337 7.42336 10.99C7.0567 11.2375 6.7267 11.3659 6.43336 11.3567C6.10336 11.3475 5.48003 11.1734 5.01253 11.0175C4.43503 10.8342 3.98586 10.7334 4.02253 10.4125C4.04086 10.2475 4.27003 10.0825 4.70086 9.90837C7.37753 8.74421 9.15586 7.97421 10.045 7.60754C12.5934 6.54421 13.1159 6.36087 13.4642 6.36087C13.5375 6.36087 13.7117 6.37921 13.8217 6.47087C13.9134 6.54421 13.9409 6.64504 13.95 6.71837C13.9409 6.77337 13.9592 6.93837 13.95 7.06671Z"
                                fill="white" />
                        </svg>

                    </a>
                </div>
            </div>

        </div>
    @endsection
