@extends('layouts.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/storage/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24 ">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Visi & Misi</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Visi & Misi</div>
        <div data-aos="fade-up" class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Visi</div>
                <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
                    Visi Sekolah
                </div>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                    ” MEMBENTUK PESERTA DIDIK YANG MEMILIKI LANDASAN SPIRITUAL, EMOSIONAL, INTELEKTUAL YANG BERWAWASAN
                    KEBANGSAAN DAN MEMILIKI DAYA SAING DALAM MENGHADAPI ERA GLOBALISASI SERTA TERAMPIL DALAM MENHADAPI
                    KEHIDUPAN SEHARI-HARI”
                </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                    <img alt="..." src="/storage/frontend/home-1.png" class="w-full align-middle rounded-t-lg" />
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto lg:order-2">
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Misi</div>
                <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
                   Misi Sekolah
                </div>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                    1. Membentuk pribadi peserta didik cerdas dalam spiritual dengan memberikan kegiatan kerohnian sesuai
                    agama/kepercayaan yang
                    dianut <br>
                    2. Membentuk peserta didik cerdas dalam emosional dengan
                    memberikan berbagai kegiatan ekstrakurikuler di dalam maupun di luar
                    kelas <br>
                    3. Membentuk peserta didik cerdas dalam intelektual melalui pelayanan Kegiatan Belajar Mengajar (KBM(
                    yang prima sesuai dengan kurikulum
                    2013 <br>
                    4. Membentuk ketrampilan yang berorientasi pada ketrampilan hidup melalui praktek yang intensif dan
                    nyata
                </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto lg:order-1">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                    <img alt="..." src="/storage/frontend/home-1.png" class="w-full align-middle rounded-t-lg" />
                </div>
            </div>
        </div>

    </main>
@endsection
