<footer class="bg-blue-health dark:bg-gray-900 pt-8">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="columns-1 lg:columns-3 flex flex-col lg:flex-row justify-around px-3 gap-y-4 lg:gap-y-0 lg:px-32">
            {{-- Column 1 --}}
            <div>
                <h5 class="text-md text-white">Follow Us</h5>
                {{-- Logos Link --}}
                <div class="mt-2">
                    <ul class="flex lg:flex-wrap items-center lg:justify-center">
                        <li> <a href="">
                                <img width="26" height="26"
                                    src="{{ asset('assets/img/homePage/twitter-logo.png') }}" alt="">
                            </a>
                        </li>
                        <li class="ms-5">
                            <a href="">
                                <img width="26" height="26"
                                    src="{{ asset('assets/img/homePage/linkedin-logo.png') }}" alt=""
                                    srcset="">
                            </a>
                        </li>
                        <li class="ms-5">
                            <a href="">
                                <img width="29" height="29"
                                    src="{{ asset('assets/img/homePage/facebook-logo.png') }}" alt=""
                                    srcset="">

                            </a>
                        </li>
                        <li class="ms-5">
                            <a href="">
                                <img width="29" height="29"
                                    src="{{ asset('assets/img/homePage/instagram-logo.png') }}" alt=""
                                    srcset="">

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Column 2 --}}
            <div>
                <h5 class="text-md text-white">Useful Links</h5>
                <div class="mt-2">
                    <ul class="list-disc list-inside text-white text-[13px] font-thin font-poppins-regular">
                        <li><a href="">Our Projects</a></li>
                        <li class="mt-1"><a href="">FAQ's</a></li>
                        <li class="mt-1"><a href="">News and Updates</a></li>
                        <!-- ... -->
                    </ul>
                </div>
            </div>
            {{-- Column 3 --}}
            <div>
                <h5 class="text-md text-white">Contacts</h5>
                <div class="mt-2">
                    <ul class="list-none list-inside text-white text-[13px] font-thin font-poppins-regular">
                        <li><a href="">Address : 4-5 Main road , Delhi</a></li>
                        <li class="mt-1"><a href="">Email : healme@gmail.com</a></li>
                        <li class="mt-1"><a href="">Phone Number : +91 4533433265</a></li>
                        <!-- ... -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-14">
            <p class="text-[#7D7A74] text-center text-[13px] font-poppins-regular">© All Copyrights Reserved</p>
        </div>
    </div>
</footer>
