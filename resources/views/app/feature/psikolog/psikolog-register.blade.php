<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    {{-- Google Font: Poppins --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    {{-- Google Font: Manrope --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

    {{-- Google Font: Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Roboto&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    {{-- Header Auth Layout --}}
    @include('auth.layout.header')

    {{-- Main Auth Layout --}}
    <main>
        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-10 py-12 mx-auto">

                <div class="w-full bg-white rounded-lg shadow ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Register Sebagai Psikolog
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('app.store-psikolog') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                {{-- input 1 --}}
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Nama dan gelar</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="contoh: Sugeng Rahayu S.Psi" required="">
                                </div>
                                {{-- input 2 --}}
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control bg-gray-50 border
                                        @error('email')
                                        border-red-500
                                        @enderror  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" required="">
                                    @error('email')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone_number"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Nomor Telepon (WA)</label>
                                    <input type="text" name="phone_number" id="phone_number"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="081*******" required="">
                                </div>
                                {{-- input 3 --}}
                                <div>
                                    <label for="ttl"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Tempat dan Tanggal Lahir</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="birthdate"
                                            id="ttl"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="">
                                    </div>
                                </div>
                                {{-- input 4 --}}
                                <div>
                                    <label for="last_education"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Pendidikan Terakhir</label>
                                    <select id="last_education"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="last_education" required>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="specialization_therapy"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Spesialis Terapi</label>
                                    <select id="specialization_therapy"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="specialization_therapy">
                                        <option value="terapi kognitif perilaku">Terapi Kognitif Perilaku</option>
                                        <option value="terapi psikoanalisis">Terapi Psikoanalisis</option>
                                        <option value="terapi psikodinamik">Terapi Psikodinamik</option>
                                        <option value="terapi gestalt">Terapi Gestalt</option>
                                        <option value="terapi intrapersonal">Terapi Interpersonal</option>
                                    </select>
                                </div>

                                {{-- input 5 --}}
                                <div>
                                    <label for="file_cv"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        File Curriculum Vitae</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_cv" name="file_cv" type="file">
                                </div>
                                {{-- input 6 --}}
                                <div>
                                    <label for="file_sertif_prof"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        File Sertifikat Profesi</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_sertif_prof" name="file_sertif_prof" type="file">
                                </div>
                                {{-- input 7 --}}
                                <div>
                                    <label for="file_ijazah"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        File Ijazah</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_ijazah" name="file_ijazah" type="file">
                                </div>
                                {{-- input 8 --}}
                                <div>
                                    <label for="file_foto"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        File Foto 3x4</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border
                                        @error('file_foto')
                                            border-red-500
                                        @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_foto" name="file_foto" type="file">
                                    @error('file_foto')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- input 10 --}}
                                <div>
                                    <label for="service_cost_perhour"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Permintaan Biaya Layanan (perjam)</label>
                                    <input type="number" name="service_cost_perhour" id="service_cost_perhour"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="contoh: 650.000" required="">
                                </div>
                            </div>


                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept
                                        the <a
                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-[#121481] opacity-90 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Daftar</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Anda sudah terdaftar? <a href="{{ route('app.psikolog-login') }}"
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">masuk
                                    disini</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer Auth Layout --}}
    @include('auth.layout.footer')

    @include('sweetalert::alert')
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
