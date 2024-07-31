@extends('app.layout.main')
@section('title', 'Request Konsultasi | HealMe')
@section('content')
    <div class="w-full px-14 pt-10 pb-16">
        <form id="form-consultation" action="{{ route('psikolog.store-request-consultation', $psikolog) }}" method="post">
            @csrf
            @method('POST')

            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="psikolog_id" value="{{ $psikolog->id }}">
            <input type="hidden" name="therapy_type" value="{{ $psikolog->specialization_therapy }}">

            {{-- <div class="w-[960px]  bg-[#FFEAE3] mx-auto my-10  rounded-md shadow-lg pt-10 pb-10 px-14">
                <div class="text-center">
                    <h1 class="text-3xl font-poppins-regular">{{ $psikolog->name }}</h1>
                    <p class="text-lg font-poppins-regular">Check out our availability and book the date and time that works
                        for
                        you</p>
                </div>
                <div class="w-[300px] mx-auto mt-10">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="consultation_date"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Pilih hari dan tanggal" required>
                    </div>
                </div>
                <div class="w-[500px] mx-auto">
                    <hr class="h-px my-2 bg-black border-0">
                </div>
                <div>
                    <div>
                        <p class="text-center text-[#121481] font-poppins-regular text-sm font-extralight">Waktu Indonesia
                            Barat
                            (GMT+7)</p>
                    </div>
                    <div class="w-[280px] mt-2 mx-auto flex flex-wrap justify-center gap-3 button-group">
                        <input type="hidden" name="consultation_time" id="consultation_time" value="" required>
                        <button type="button"
                            class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                            value="07.00">
                            07.00
                        </button>
                        <button type="button"
                            class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                            value="11.00">
                            11.00
                        </button>
                        <button type="button"
                            class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                            value="15.00">
                            15.00
                        </button>
                    </div>
                </div>
                <div class="w-[500px] mx-auto">
                    <hr class="h-px my-2 bg-black border-0">
                </div>
                <div class="w-[500px] mx-auto">
                    <p class="text-center text-slate-700 font-poppins-regular font-md mt-3 mb-2 ">Detail Layanan Konsultasi
                    </p>
                    <div class="relative rounded-xl shadow-xl overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Nama Psikolog
                                    </th>
                                    <td class="px-6 py-4">
                                        Monika Satyajati, M.Psi., Psikolog
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Metode Terapi
                                    </th>
                                    <td class="px-6 py-4">
                                        Terapi Kognitif Perilaku
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Waktu Konsultasi
                                    </th>
                                    <td id="consultation_time_element" class="px-6 py-4">

                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Biaya Konsultasi
                                    </th>
                                    <td class="px-6 py-4">
                                        Rp. 100.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-[500px] mx-auto">
                    <hr class="h-px my-6 bg-black border-0">
                </div>
                <div class="container text-center">
                    <button id="submit-button" type="submit"
                        class="py-1 px-11 hover:shadow-lg bg-[#121481] rounded-2xl  font-poppins-regular text-white font-bold">
                        Lanjut
                    </button>
                </div>
            </div> --}}


            <div class="container px-5 mb-4">
                <div class="py-2 px-10 shadow-lg rounded-lg border">
                    <h1 class="text-center text-gray-600 font-poppins-regular font-bold text-3xl">
                        Request Konsultasi
                    </h1>
                </div>
            </div>
            <div class="container flex flex-row justify-center gap-12">
                <div class="basis-1/2 py-5 px-10 shadow-lg bg-[#FFFAF0] rounded-lg border">
                    <h5 class="font-poppins-regular mb-4 text-center font-bold text-gray-600">Pilih Tanggal dan Waktu (Waktu
                        Indonesia Barat)</h5>
                    <hr class="h-px mb-4 bg-slate-500 border-0 ">
                    <div class="w-full columns-2 gap-11">
                        <div>
                            <div id="inline-datepicker" inline-datepicker data-date="01/01/2024"></div>
                        </div>
                        <div class="pt-28">
                            <input type="hidden" id="selected-date" inline-datepicker class="form-control"
                                name="consultation_date">
                            <p class="text-white bg-blue-health text-center font-poppins-regular font-bold underline-offset-auto"
                                id="selected-date-display">-- -- ----</p>
                            <div id="button-group" class="w-[300px] mt-3 mx-auto flex flex-wrap justify-center gap-2">
                                <input type="hidden" name="consultation_time" id="consultation_time" value=""
                                    required>
                                <button type="button"
                                    class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                                    value="07.00">
                                    07.00
                                </button>
                                <button type="button"
                                    class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                                    value="11.00">
                                    11.00
                                </button>
                                <button type="button"
                                    class="py-1 px-6 bg-[#D9D9D9] rounded-2xl  font-poppins-regular text-white font-semibold"
                                    value="15.00">
                                    15.00
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="basis-1/3 py-5 px-10 shadow-lg bg-[#FFFAF0] rounded-lg border ">
                    <h5 class="font-poppins-regular mb-4 text-center font-bold text-gray-600">Detail Request Konsultasi</h5>
                    <hr class="h-px mb-4 bg-slate-500 border-0 ">
                    {{-- Foto Profile Wrapper --}}
                    <div>
                        <div class="w-[120px] h-[120px] mb-2 mx-auto rounded-full overflow-hidden flex justify-center">
                            <img class="w-full object-cover" src="{{ Storage::url($psikolog->profile_photo) }}"
                                alt="">
                        </div>
                        <p class="font-poppins-regular text-md text-center font-regular">{{ $psikolog->name }}</p>
                    </div>
                    <hr class="h-px my-2 bg-slate-500 border-0 ">
                    {{-- Table Wrapper --}}
                    <div class="relative overflow-x-auto font-poppins-regular">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr>
                                    <th scope="row"
                                        class=" font-medium pb-1 text-left text-sm text-gray-900 whitespace-nowrap dark:text-white">
                                        Nama Psikolog
                                    </th>
                                    <td class=" text-right text-sm pb-1">
                                        {{ $psikolog->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class=" font-medium text-left text-sm text-gray-900 whitespace-nowrap dark:text-white pb-1">
                                        Tanggal Konsultasi
                                    </th>
                                    <td id="display-date-table" class=" text-right text-sm pb-1">
                                        -- -- --
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class=" font-medium text-left text-sm text-gray-900 whitespace-nowrap dark:text-white pb-1">
                                        Jam Konsultasi
                                    </th>
                                    <td id="selected-time-display" class=" text-right text-sm pb-1">
                                        --.--
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class=" font-medium text-left text-sm text-gray-900 whitespace-nowrap dark:text-white pb-1">
                                        Jenis Terapi
                                    </th>
                                    <td id="selected-time-display" class=" text-right text-sm pb-1">
                                        {{ $psikolog->specialization_therapy }}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"
                                        class=" font-medium text-left text-sm text-gray-900 whitespace-nowrap dark:text-white pb-1">
                                        Biaya Pelayanan
                                    </th>
                                    <td id="selected-time-display" class=" text-right text-sm font-bold pb-1">
                                        Rp.{{ $psikolog->service_cost_perhour }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container mx-auto mt-3 text-center">
                        <button id="submit-button" type="submit"
                            class="bg-blue-health hover:bg-blue-700 hover:shadow-xl px-8 py-1 rounded-lg border-2 border-white text-white font-poppins-regular">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
