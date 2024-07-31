@extends('app.feature.tesGratis.components.testRun.base-view')
@section('title', 'Tes Stress | Healme')
@section('content-runTest')
    <div>
        <div>
            <h4 class="font-poppins-regular text-[24px] font-bold">Apakah Anda Mengalami Trauma?</h4>
        </div>
        <div class="mt-6 font-poppins-regular text-[16px] font-thin">
            Jawab pertanyaan di bawah ini untuk mengetahui tingkat stres Anda
            Hasil tes akan dikirim melalui email. Pastikan memasukan email dengan benar, dan jangan lupa memeriksa folder
            spam Anda.
        </div>
        <div class="mt-6 font-poppins-regular">
            <form action="{{ route('app.count-test-stress', ['tesType' => 'trauma']) }}" method="POST">
                @csrf
                @method('POST')

                {{-- Soal 1 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Apakah Anda pernah mengalami kejadian traumatis yang
                        menyebabkan Anda merasa sangat terganggu atau ketakutan??</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal1-1" type="radio" name="soal_1" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal1-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal1-2" type="radio" name="soal_1" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal1-2" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal1-3" type="radio" name="soal_1" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal1-3" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal1-4" type="radio" name="soal_1" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal1-4" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal1-5" type="radio" name="soal_1" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal1-5" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 2 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Seberapa sering kejadian traumatis tersebut masih
                        mempengaruhi pikiran atau perasaan Anda saat ini?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal2-1" type="radio" name="soal_2" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal2-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal2-2" type="radio" name="soal_2" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal2-2" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal2-3" type="radio" name="soal_2" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal2-3" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal2-4" type="radio" name="soal_2" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal2-4" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal2-5" type="radio" name="soal_2" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal2-5" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 3 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Apakah Anda merasa kesulitan untuk tidur atau sering
                        mengalami mimpi buruk terkait dengan kejadian traumatis tersebut?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal3-1" type="radio" name="soal_3" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal3-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal3-2" type="radio" name="soal_3" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal3-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal3-3" type="radio" name="soal_3" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal3-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal3-4" type="radio" name="soal_3" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal3-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal3-5" type="radio" name="soal_3" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal3-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 4 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Seberapa sering Anda merasa cemas atau paranoid karena
                        kejadian traumatis tersebut dapat terulang?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal4-1" type="radio" name="soal_4" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal4-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal4-2" type="radio" name="soal_4" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal4-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal4-3" type="radio" name="soal_4" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal4-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal4-4" type="radio" name="soal_4" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal4-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal4-5" type="radio" name="soal_4" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal4-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 5 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Apakah Anda menghindari situasi atau orang-orang yang
                        mengingatkan Anda pada kejadian traumatis tersebut?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal5-1" type="radio" name="soal_5" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal5-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal5-2" type="radio" name="soal_5" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal5-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal5-3" type="radio" name="soal_5" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal5-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal5-4" type="radio" name="soal_5" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal5-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal5-5" type="radio" name="soal_5" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal5-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 6 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Seberapa sering Anda merasa depresi atau sedih karena
                        kejadian traumatis tersebut?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal6-1" type="radio" name="soal_6" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal6-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal6-2" type="radio" name="soal_6" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal6-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal6-3" type="radio" name="soal_6" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal6-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal6-4" type="radio" name="soal_6" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal6-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal6-5" type="radio" name="soal_6" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal6-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 7 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Apakah Anda mengalami perubahan drastis dalam suasana
                        hati atau tingkat energi sebagai akibat dari kejadian traumatis tersebut?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal7-1" type="radio" name="soal_7" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal7-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal7-2" type="radio" name="soal_7" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal7-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal7-3" type="radio" name="soal_7" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal7-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal7-4" type="radio" name="soal_7" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal7-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal7-5" type="radio" name="soal_7" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal7-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 8 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Seberapa sering Anda merasa kesulitan untuk
                        berkonsentrasi atau mengingat hal-hal karena kejadian traumatis tersebut terus mengganggu pikiran
                        Anda?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal8-1" type="radio" name="soal_8" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal8-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal8-2" type="radio" name="soal_8" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal8-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal8-3" type="radio" name="soal_8" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal8-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal8-4" type="radio" name="soal_8" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal8-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal8-5" type="radio" name="soal_8" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal8-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 9 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Apakah Anda memiliki reaksi fisik yang kuat, seperti
                        detak jantung yang cepat atau keringat dingin, ketika Anda mengingat kembali kejadian traumatis
                        tersebut?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal9-1" type="radio" name="soal_9" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal9-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal9-2" type="radio" name="soal_9" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal9-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal9-3" type="radio" name="soal_9" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal9-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal9-4" type="radio" name="soal_9" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal9-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal9-5" type="radio" name="soal_9" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal9-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Soal 10 --}}
                <div class="mb-8">
                    {{-- question --}}
                    <p class="font-poppins-regular font-semibold">Seberapa sering kejadian traumatis tersebut membuat Anda
                        merasa putus asa atau kehilangan harapan akan masa depan?</p>
                    {{-- inputs --}}
                    <div class="mt-3 ps-8">
                        <div class="flex items-center mb-1">
                            <input id="soal10-1" type="radio" name="soal_10" value="1"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-slate-900 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal10-1"
                                class="block ms-2  text-sm font-medium font-poppins-regular text-gray-900 dark:text-gray-300">
                                Tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal10-2" type="radio" name="soal_10" value="2"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal10-2"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Hampir tidak pernah
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal10-3" type="radio" name="soal_10" value="3"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal10-3"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Kadang-kadang
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal10-4" type="radio" name="soal_10" value="4"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal10-4"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Cukup sering
                            </label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="soal10-5" type="radio" name="soal_10" value="5"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                                required>
                            <label for="soal10-5"
                                class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                                Sangat sering
                            </label>
                        </div>
                    </div>
                </div>

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
