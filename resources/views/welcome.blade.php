@extends('layouts.client.app')

@section('content')
    <main class="relative w-full">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("/storage/frontend/bg-home.png");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="lg:pr-12">
                            <h1 class="text-white font-bold text-3xl lg:text-5xl">
                                Selamat Datang di Website <br>
                                SMP YPI 1 Braja Selebah
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section class="pb-20 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="mx-auto w-fit justify-center">
                                    <svg width="34" height="33" viewBox="0 0 32 33" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28.0356 24.7C28.8377 24.7 29.607 24.3628 30.1742 23.7627C30.7414 23.1626 31.06 22.3486 31.06 21.5V3.89995C31.06 3.05126 30.7414 2.23733 30.1742 1.63721C29.607 1.03709 28.8377 0.699951 28.0356 0.699951H12.0971C12.6263 1.67595 12.9137 2.77995 12.9137 3.89995H28.0356V21.5H14.4259V24.7M20.4746 8.69995V11.9H11.4015V32.7H8.37707V23.1H5.35268V32.7H2.32829V19.9H0.0599976V11.9C0.0599976 11.0513 0.378638 10.2373 0.945821 9.63721C1.513 9.03709 2.28227 8.69995 3.08439 8.69995H20.4746ZM9.88927 3.89995C9.88927 4.74864 9.57063 5.56258 9.00344 6.16269C8.43626 6.76281 7.66699 7.09995 6.86488 7.09995C6.06276 7.09995 5.29349 6.76281 4.72631 6.16269C4.15913 5.56258 3.84049 4.74864 3.84049 3.89995C3.84049 3.05126 4.15913 2.23733 4.72631 1.63721C5.29349 1.03709 6.06276 0.699951 6.86488 0.699951C7.66699 0.699951 8.43626 1.03709 9.00344 1.63721C9.57063 2.23733 9.88927 3.05126 9.88927 3.89995Z"
                                            fill="#384252" />
                                    </svg>
                                    <div class="w-fit mx-auto text-2xl text-gray-600 font-bold pb-3 pt-3">
                                        {{ $totalGuru }}</div>
                                    <div class="w-fit pt-1 text-l text-gray-600 border-t-2 border-[#FFAC00]">GURU</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-6 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="mx-auto w-fit justify-center">
                                    <svg width="45" height="33" viewBox="0 0 45 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M34.2013 13.8616L34.5428 19.8571C34.5934 20.7299 34.0748 21.5394 32.987 22.2857C31.8992 23.032 30.413 23.6233 28.5283 24.0597C26.6437 24.4961 24.6009 24.7143 22.4 24.7143C20.1991 24.7143 18.1563 24.4961 16.2716 24.0597C14.387 23.6233 12.9007 23.032 11.8129 22.2857C10.7251 21.5394 10.2065 20.7299 10.2571 19.8571L10.5986 13.8616L21.4893 17.2957C21.7675 17.3843 22.0711 17.4286 22.4 17.4286C22.7289 17.4286 23.0324 17.3843 23.3107 17.2957L34.2013 13.8616ZM43.8397 7.1261C44.118 7.22729 44.2571 7.42335 44.2571 7.71427C44.2571 8.00519 44.118 8.20125 43.8397 8.30244L22.5897 14.981C22.5391 14.9937 22.4759 15 22.4 15C22.3241 15 22.2609 14.9937 22.2103 14.981L9.83972 11.0725C9.29582 11.5026 8.84679 12.2078 8.49262 13.188C8.13846 14.1683 7.92343 15.2972 7.84753 16.5748C8.64441 17.0301 9.04285 17.7195 9.04285 18.6428C9.04285 19.5156 8.67603 20.1923 7.9424 20.673L9.04285 28.8884C9.06814 29.0655 9.01755 29.2236 8.89106 29.3627C8.77722 29.5018 8.62544 29.5714 8.4357 29.5714H4.79285C4.60311 29.5714 4.45133 29.5018 4.33749 29.3627C4.211 29.2236 4.16041 29.0655 4.1857 28.8884L5.28615 20.673C4.55252 20.1923 4.1857 19.5156 4.1857 18.6428C4.1857 17.7195 4.59679 17.0175 5.41896 16.5368C5.5581 13.9185 6.17789 11.8315 7.27834 10.2757L0.960257 8.30244C0.681984 8.20125 0.542847 8.00519 0.542847 7.71427C0.542847 7.42335 0.681984 7.22729 0.960257 7.1261L22.2103 0.447527C22.2609 0.434877 22.3241 0.428555 22.4 0.428555C22.4759 0.428555 22.5391 0.434877 22.5897 0.447527L43.8397 7.1261Z"
                                            fill="#384252" />
                                    </svg>

                                    <div class="w-fit mx-auto text-2xl text-gray-600 font-bold pb-3 pt-3">
                                        {{ $totalStudent }}</div>
                                    <div class="w-fit pt-1 text-l text-gray-600 border-t-2 border-[#FFAC00]">SISWA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="mx-auto w-fit justify-center">
                                    <svg width="38" height="35" viewBox="0 0 38 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.0458 0.300049L37.2601 7.58576V10.0143H34.8315C34.8315 10.3432 34.7019 10.6278 34.4426 10.8681C34.1833 11.1085 33.8766 11.2286 33.5224 11.2286H4.56927C4.2151 11.2286 3.90837 11.1085 3.64907 10.8681C3.38976 10.6278 3.26011 10.3432 3.26011 10.0143H0.831543V7.58576L19.0458 0.300049ZM5.68869 12.4429H10.5458V27.0143H12.9744V12.4429H17.8315V27.0143H20.2601V12.4429H25.1173V27.0143H27.5458V12.4429H32.403V27.0143H33.5224C33.8766 27.0143 34.1833 27.1345 34.4426 27.3748C34.7019 27.6152 34.8315 27.8998 34.8315 28.2286V29.4429H3.26011V28.2286C3.26011 27.8998 3.38976 27.6152 3.64907 27.3748C3.90837 27.1345 4.2151 27.0143 4.56927 27.0143H5.68869V12.4429ZM35.951 30.6572C36.3051 30.6572 36.6119 30.7774 36.8712 31.0177C37.1305 31.258 37.2601 31.5426 37.2601 31.8715V34.3H0.831543V31.8715C0.831543 31.5426 0.961193 31.258 1.22049 31.0177C1.47979 30.7774 1.78653 30.6572 2.14069 30.6572H35.951Z"
                                            fill="#384252" />
                                    </svg>
                                    <div class="w-fit mx-auto text-2xl text-gray-600 font-bold pb-3 pt-3">
                                        {{ $totalKelas }}</div>
                                    <div class="w-fit pt-1 text-l text-gray-600 border-t-2 border-[#FFAC00]">KELAS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Selamat Datang di</div>
                        <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
                            Website Resmi <br>
                            SMP YPI 1 Braja Selebah
                        </div>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            Saat ini SMP Islam YPI 1 Braja Selebah di Kepalai Oleh bapak Hi. Jawadi, S.Pd. Beliau
                            menggantikan Kepala Sekolah sebelumnya yaitu bapak Sumarwan, M.Pd.I. Selama 3 tahun kepemimpinan
                            beliau, sudah banyak prestasi yang didapatkan oleh siswa-siswi SMP Islam YPI 1 Braja Selebah.
                            Saat ini SMP Islam YPI 1 Braja Selebah memiliki beberapa program unggulan. Salah satunya program
                            kelas khusus. Kelas ini disediakan bagi siswa-siswi yang memiliki prestasi dibidang akademik.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            Perkembangan SMP Islam YPI 1 Braja Selebah senantiasa didukung dengan program pembangunan
                            fasilitas yang berkelanjutan dan peningkatan kompetensi guru. Saat ini SMP Islam YPI 1 Braja
                            Selebah memiliki tenaga pendidik yang berkompeten dibidangnya masing-masing. Karena guru SMP
                            Islam YPI 1 Braja Selebah adalah lulusan dari Perguruan Tinggi Negeri dan Swasta terbaik. Saat
                            ini jenjang pendidikan guru yang ada di SMP Islam YPI 1 Braja Selebah sudah memenuhi klasifikasi
                            yaitu S1 dan S2. Informasi lebih lanjut tentang SMP Islam YPI 1 Braja Selebah dapat diakses di
                            web ini atau ditanyakan langsung ke SMP Islam YPI 1 Braja Selebah. Kami dengan senang hati untuk
                            memberikan informasi.
                        </p>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="/storage/frontend/home-1.png" class="w-full align-middle rounded-lg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section data-aos="fade-up" data-aos-delay="200" class="container w-full mx-auto flex flex-col p-12 gap-14">
            <div data-aos="fade-up" data-aos-delay="200"
                class="flex flex-col xl:flex-row justify-between  rounded relative">
                <div class="w-full sm:w-4/5 pt-10 mx-auto lg:mx-0">
                    <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Pengumuman</div>
                    <div class="w-full container mx-auto flex flex-col gap-4 lg:gap-12 lg:flex-row">
                        @foreach ($pengumuman as $publication)
                            <!-- Frame -->
                            <div class="w-full border border-gray-300 rounded">
                                <img src="/storage/{{ $publication->publication_img }}"
                                    class="object-cover mb-4 w-full h-48" alt="Image">
                                <div class="p-2">
                                    <p class="text-xs font-thin">{{ $publication->created_at }}</p>
                                    <a href="/berita/{{ $publication->id }}">
                                        <h3 class="text-lg font-bold mb-2">{{ $publication->publication_name }}</h3>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200"
                class="flex flex-col xl:flex-row justify-between  rounded relative">
                <div class="w-full sm:w-4/5 pt-10 mx-auto lg:mx-0">
                    <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Our Blog</div>
                    <div class="h-fit pb-8 m-auto flex items-center text-2xl font-bold">
                        Follow our latest news
                    </div>
                    <div class="w-full container mx-auto flex flex-col gap-4 lg:gap-12 lg:flex-row pb-24">
                        @foreach ($blog as $publication)
                            <div class="w-full border-2 border-gray-300 rounded-xl">
                                <img src="/storage/{{ $publication->publication_img }}"
                                    class="object-cover mb-4 w-full h-48" alt="Image">
                                <div class="p-2">
                                    <p class="text-xs font-thin">{{ $publication->created_at }}</p>
                                    <a href="/berita/{{ $publication->id }}">
                                        <h3 class="text-lg font-bold mb-2">{{ $publication->publication_name }}</h3>
                                    </a>
                                    <div class="texy-md font-thin">
                                        {!! substr($publication->publication_desc, 0, 200) !!} ...
                                        <a href="/berita/{{ $publication->id }}" class="text-[#FFAC00]">baca
                                            selengkapnya</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200"
                class="flex flex-col-reverse lg:flex-row justify-between  rounded relative mb-48">
                <div class="w-full sm:w-4/5">
                    <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Kepala Sekolah</div>
                    <div class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <div class="lg:-mx-6 lg:flex lg:items-center">
                                <img class="object-cover object-center lg:w-[24rem] lg:mx-6 w-64 h-64 rounded-full lg:h-[24rem]"
                                    src="/storage/frontend/kepsek.jpeg" alt="">

                                <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">
                                    <p class="text-5xl font-semibold text-[#FFCA00]">“</p>

                                    <h1 class="text-2xl font-bold text-gray-800 lg:text-3xl lg:w-96">
                                        Sambutan Kepala Sekolah
                                    </h1>

                                    <div class="max-w-lg mt-6 text-gray-500 dark:text-gray-400 " >
                                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                                            Semoga dengan terus dikembangkannya website sekolah ini dapat menjadi wahana
                                            sumber
                                            informasi publik bagi sekolah kepada masyarakat luas tentang perkembangan SMP
                                            YPI 1 Braja
                                            Selebah,
                                            menjadi wahana pengembangan diri baik bagi tenaga edukatif maupun peserta didik
                                        </p>
                                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                            sebagai sarana
                                            komunikasi antara stake holder sekolah sebagai penentu kebijakan dengan peserta
                                            didik, alumni,
                                            orang
                                            tua peserta didik maupun masyarakat luas, sehingga diharapkan dapat menjadi
                                            sebuah sinergi guna
                                            menciptakan sekolah sebagai wawasan wiyata mandala yang inovatif. Aamiin…
                                    </div>

                                    <h3 class="mt-6 text-lg font-medium text-[#FFCA00]">Jawadi</h3>
                                    <p class="text-gray-600 dark:text-gray-300">Kepala Sekolah SMP ISLAM YPI 1 BRAJA
                                        SELEBAH</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
