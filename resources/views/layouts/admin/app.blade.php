<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link rel="icon" href="/admin-icon.svg" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    brightness: {
                        40: '.40'
                    }

                }
            }
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>


</head>

<body class="relative font-sans">
    <header class="w-full">
        <nav class="bg-[#434343] py-3 px-8">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div class="flex items-center">
                    <img src="/frontend/logo.png" class="h-12 mr-2 w-12" alt="logo" />
                    <div class="flex flex-col items-left">
                        <div class="text-l text-[#FFF100] font-semibold whitespace-nowrap leading-6">SMP YPI 1 Braja
                            Selebah</div>
                        <div class="text-s text-white whitespace-nowrap leading-4">Lampung Timur</div>
                    </div>
                </div>
                <button data-collapse-toggle="mobile-menu" type="button"
                    class="lg:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden lg:block w-full md:w-auto" id="mobile-menu">
                    <ul class="flex-col md:flex-row flex md:space-x-0 mt-4 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="/admin/news"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">PUBLIKASI</a>
                        </li>
                        <li>
                            <a href="/admin/achievements"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">PRESTASI</a>
                        </li>
                        <li>
                            <a href="/admin/students"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">SISWA</a>
                        </li>
                        <li>
                            <a href="/admin/employees"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">PEGAWAI</a>
                        </li>
                        <li>
                            <a href="/admin/scholarships"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">BEASISWA</a>
                        </li>
                        <li>
                            <a href="/admin/extracurriculars"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">ESKUL</a>
                        </li>
                        <li>
                            <a href="/admin/facilities"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent text-white text-sm rounded lg:bg-transparent lg:text-grey-700' block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">FASILITAS</a>
                        </li>
                    </ul>
                </div>
                <div class="items-center space-x-4 hidden lg:flex">
                    <a href="/logout">
                        <button type="button"
                            class="inline-block rounded-full bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                            Keluar
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </header>


    <section class="bg-white py-24 px-8">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/admin/dashboard">Admin /&nbsp;</a>
            <div class="text-[#FFAC00]">@yield('title')</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">@yield('title')</div>
        @yield('content')
    </section>
    <!-- Footer -->
    <footer class="bg-[#434343]">

        <div class="container mx-auto flex flex-col md:flex-row justify-evenly px-8 lg:gap-12">
            <div class="w-full md:w-1/3 p-5">
                <img src="/frontend/logo.png" class="h-12 mr-2 w-12" alt="Logo" />
                <div class="flex flex-col items-left">
                    <div class="text-l text-[#FFF100] font-semibold whitespace-nowrap leading-6">SMP YPI 1 Braja
                        Selebah
                    </div>
                    <div class="text-s text-white whitespace-nowrap leading-4">Lampung Timur</div>
                </div>
                <div class="text-xs text-white py-3">Bantinglah otak untuk mencari ilmu sebanyak-banyaknya guna mencari
                    rahasia besar yang terkandung di dalam benda besar yang bernama dunia ini, tetapi pasanglah pelita
                    dalam hati sanubari, yaitu pelita kehidupan jiwa." - Al-Ghazali</div>
            </div>
            <div class="w-full md:w-1/3 p-7 flex flex-col">
                <h4 class="text-lg font-bold mb-2 text-[#FFF100]">Alamat</h4>
                <div class="text-s text-white w-50 pb-4">Jln KH. Ahmad Dahlan No. 01 Braja Harjosari, Kec. Braja
                    Selebah, Lampung Timur</div>
                <div class="text-xs text-white ">Phone : 085658982299</div>
                <div class="text-xs text-white ">Email : smpypi1bs@gmail.com</div>
            </div>
            <div class="w-full md:w-1/3 p-7 flex flex-col">
                <h4 class="text-lg font-bold mb-2 text-[#FFF100]">Kontak</h4>
                <div class="flex flex-col gap-2">
                    <a href="#" class="flex text-white gap-2 items-center hover:text-[#FF0000] " title="Youtube">
                        <i class="bi bi-youtube text-3xl"></i>
                        <div class="text-s font-thin ">youtube</div>
                    </a>
                    <a href="#" class="flex text-white gap-2 items-center hover:text-[#E4405F]" title="Instagram">
                        <i class="bi bi-instagram text-2xl"></i>
                        <div class="text-s font-thin ">insta</div>
                    </a>
                    <a href="#" class="flex text-white gap-2 items-center hover:text-[#25D366]" title="WhatsApp">
                        <i class="bi bi-whatsapp  text-2xl"></i>
                        <div class="text-s font-thin ">+6285658982299</div>
                    </a>
                    <a href="#" class="flex text-white gap-2 items-center hover:text-[#1877F2]"
                        title="Facebook">
                        <i class="bi bi-facebook text-2xl"></i>
                        <div class="text-s font-thin ">facebook</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-[#5A5A5A] text-center text-sm text-white p-4">
            &copy; {{ date('Y') }} @Ahmdfdhilah. All rights reserved.
        </div>

    </footer>
    {{-- move keatas --}}
    <button id="moveToTopBtn"
        class="hidden fixed bottom-4 right-4 bg-[#434343] text-white p-2 rounded-full shadow-md">
        <svg class="w-6 h-6" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 17a1 1 0 01-1-1V6.414l-4.293 4.293a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 6.414V16a1 1 0 01-1 1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>


    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var moveToTopBtn = document.getElementById("moveToTopBtn");

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                moveToTopBtn.style.display = "block";
            } else {
                moveToTopBtn.style.display = "none";
            }
        }

        document.getElementById("moveToTopBtn").onclick = function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            once: true,
            mirror: false,
        });
    </script>
</body>

</html>
