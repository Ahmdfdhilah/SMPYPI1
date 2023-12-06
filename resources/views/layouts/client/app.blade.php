<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Sekolah</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="icon" href="/client-icon.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"
        integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <!-- Open Graph untuk Media Sosial -->
    <meta property="og:title" content="Sistem Informasi Desa - SMP YPI 1 Braja Selebah, Lampung Timur">
    <meta property="og:description"
        content="Deskripsi singkat dan menarik mengenai Sistem Informasi Desa SMP YPI 1 Braja Selebah, Lampung Timur.">
    <meta property="og:image" content="/path/to/og-image.jpg">
    <meta property="og:url" content="https://smpypi1brajaselebah.sch.id/">
    <meta property="og:type" content="website">

    <style>
        .loader-overlay {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(255, 255, 255);
            z-index: 1000;
            transition: opacity 0.3s ease;
            pointer-events: none;
            /* Allows interaction with elements behind the loader */
        }

        @layer components {
            .loader {
                --size: 24px;
                --distance: 100px;
                --xturns: 1turn;
                --yturns: 1turn;
                --duration: 9s;
            }

            .loader,
            .loader::before,
            .loader::after {
                content: '';
                position: absolute;
                top: calc(50% - var(--size)*0.5);
                left: calc(50% - var(--size)*0.5);
                width: var(--size);
                height: var(--size);
                border-radius: 50%;
                background: black;
            }

            .loader {
                transform-style: preserve-3d;
                animation: figure-eight var(--duration) linear infinite;
                --xturns-neg: calc(var(--xturns) * -1);
                --yturns-neg: calc(var(--yturns) * -1);
            }

            .loader::before,
            .loader::after {
                animation:
                    figure-eight-invert var(--duration) linear infinite,
                    figure-eight var(--duration) linear infinite;
                animation-composition: add;
            }

            .loader::before {
                animation-delay: 0s, calc(var(--duration) * -0.333333)
            }

            .loader::after {
                animation-delay: 0s, calc(var(--duration) * -0.666666)
            }

            @keyframes figure-eight {
                from {
                    transform:
                        rotateX(var(--xturns)) rotateY(var(--yturns)) translateZ(var(--distance)) rotateY(var(--yturns-neg)) rotateX(var(--xturns-neg))
                }

                to {
                    transform:
                        rotateX(var(--xturns-neg)) rotateY(var(--yturns-neg)) translateZ(var(--distance)) rotateY(var(--yturns)) rotateX(var(--xturns))
                }
            }

            @keyframes figure-eight-invert {
                from {
                    transform:
                        rotateX(var(--xturns-neg)) rotateY(var(--yturns-neg)) translateZ(var(--distance)) rotateY(var(--yturns)) rotateX(var(--xturns))
                }

                to {
                    transform:
                        rotateX(var(--xturns)) rotateY(var(--yturns)) translateZ(var(--distance)) rotateY(var(--yturns-neg)) rotateX(var(--xturns-neg))
                }
            }

            @property --size {
                syntax: "<length>";
                inherits: true;
                initial-value: 0px;
            }

            @property --distance {
                syntax: "<length>";
                inherits: true;
                initial-value: 0px;
            }

            @property --xturns {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --yturns {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --xturns-neg {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --yturns-neg {
                syntax: "<angle>";
                inherits: true;
                initial-value: 0turn;
            }

            @property --duration {
                syntax: "<time>";
                inherits: true;
                initial-value: 0s;
            }
        }
    </style>
</head>

<body class="relative bg-gray-500 font-sans">
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
                    <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="/"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'home' ? 'text-white bg-[#FFF100] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'home' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">BERANDA</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="text-white bg-[#434343] text-sm md:hover:bg-[#434343] md:border-0 pl-3 pr-4 py-2 md:hover:text-[#FFF100]  md:p-0 flex items-center justify-between w-full md:w-auto">TENTANG
                                KAMI
                                <svg class="w-4 h-4 ml-1" fill="#fff" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <div id="dropdownNavbar"
                                class="hidden  text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-[50%] lg:w-32">
                                <div class="bg-[#434343]" aria-labelledby="dropdownLargeButton">
                                    <a href="/visimisi"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'visimisi' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">VISI
                                        MISI</a>
                                    <a href="/sejarah"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'sejarah' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">SEJARAH</a>
                                    <a href="/gurustaff"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'gurustaff' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">GURU
                                        DAN STAFF</a>
                                    <a href="/fasilitas"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'fasilitas' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">FASILITAS</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar-2"
                                class="text-white bg-[#434343] text-sm  md:hover:bg-[#434343] md:border-0 pl-3 pr-4 py-2 md:hover:text-[#FFF100]  md:p-0  flex items-center justify-between w-full md:w-auto">KESISWAAN
                                <svg class="w-4 h-4 ml-1" fill="#fff" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <div id="dropdownNavbar-2"
                                class="hidden  text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-[50%] lg:w-32">
                                <div class="bg-[#434343]" aria-labelledby="dropdownLargeButton">
                                    <a href="/prestasi"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'prestasi' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">PRESTASI</a>
                                    <a href="/beasiswa"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'beasiswa' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">BEASISWA</a>
                                    <a href="/eskul"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'eskul' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">EXTRAKULIKULER</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar-3"
                                class="text-white bg-[#434343] text-sm  md:hover:bg-[#434343] md:border-0 pl-3 pr-4 py-2 md:hover:text-[#FFF100]  md:p-0 flex items-center justify-between w-full md:w-auto">DOKUMENTASI
                                <svg class="w-4 h-4 ml-1" fill="#fff" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <div id="dropdownNavbar-3"
                                class="hidden  text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-[50%] lg:w-32">
                                <div class="bg-[#434343]" aria-labelledby="dropdownLargeButton">
                                    <a href="/galeri"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'galeri' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">GALERI</a>
                                    <a href="/berita"
                                        class="hover:text-[#FFF100] block px-4 py-2 {{ Route::currentRouteName() == 'berita' ? 'text-white bg-[#FFF100] text-sm lg:text-[#FFF100]' : 'text-white text-sm lg:text-grey-700' }} rounded lg:bg-transparent  ">BERITA</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/saran"
                                class="bg-[#434343] hover:text-[#FFF100] md:bg-transparent {{ Route::currentRouteName() == 'saran' ? 'text-white bg-[#FFF100] text-sm' : 'text-white text-sm' }} rounded lg:bg-transparent  {{ Route::currentRouteName() == 'saran' ? 'lg:text-[#FFF100]' : 'lg:text-grey-700' }} block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none">SARAN</a>
                        </li>
                    </ul>
                </div>
                <div class="items-center space-x-4 hidden lg:flex">
                    <a href="https://www.youtube.com/@spysamediaofficial1151" class="text-white hover:text-[#FF0000] text-3xl" title="Facebook">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.instagram.com/smpypi1brasel_lpg/" class="text-white hover:text-[#E4405F] text-2xl" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://wa.me/6285658982299" class="text-white hover:text-[#25D366] text-2xl" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/smpislamypi1brajaselebah/?locale=id_ID" class="text-white hover:text-[#1877F2] text-2xl" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>


    <!-- Page Content -->
    <section class="bg-white pb-48">
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
                    <a href="https://www.youtube.com/@spysamediaofficial1151" class="flex text-white gap-2 items-center hover:text-[#FF0000] "
                        title="Youtube">
                        <i class="bi bi-youtube text-3xl"></i>
                        <div class="text-s font-thin ">SPYSA Media Official</div>
                    </a>
                    <a href="https://www.instagram.com/smpypi1brasel_lpg/" class="flex text-white gap-2 items-center hover:text-[#E4405F]"
                        title="Instagram">
                        <i class="bi bi-instagram text-2xl"></i>
                        <div class="text-s font-thin ">smpypi1brasel_lpg</div>
                    </a>
                    <a href="https://wa.me/6285658982299" class="flex text-white gap-2 items-center hover:text-[#25D366]"
                        title="WhatsApp">
                        <i class="bi bi-whatsapp  text-2xl"></i>
                        <div class="text-s font-thin ">+6285658982299</div>
                    </a>
                    <a href="https://www.facebook.com/smpislamypi1brajaselebah/?locale=id_ID" class="flex text-white gap-2 items-center hover:text-[#1877F2]"
                        title="Facebook">
                        <i class="bi bi-facebook text-2xl"></i>
                        <div class="text-s font-thin ">SMP Islam YPI 1 Braja Selebah</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-[#5A5A5A] text-center text-sm text-white p-4">
            &copy; {{ date('Y') }} @SMP YPI 1 BRAJA SELEBAH. All rights reserved.
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

    {{-- loader --}}
    <div id="loader-overlay" class="loader-overlay">
        <div class="loader"></div>
    </div>



    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                document.getElementById("loader-overlay").style.opacity = 0;
                setTimeout(() => {
                    document.getElementById("loader-overlay").style.display = "none";
                }, 50);
            }
        };
    </script>
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
