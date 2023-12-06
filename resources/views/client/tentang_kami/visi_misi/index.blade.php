@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24 ">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Visi & Misi</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Visi & Misi</div>
            <div data-aos="fade-up" class="container mx-auto my-8 p-8 bg-white shadow-md rounded-lg">
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Visi</div>
                <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
                    Visi Sekolah
                </div>
                <p class="text-lg font-bold leading-relaxed mt-4 mb-4 text-gray-700">
                    “Terwujudnya Generasi yang Berprestasi, Beriman, dan Bertaqwa”
                </p>
                <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">Indikator :</p>
                <ul class="list-disc ml-6 mb-6 flex flex-col gap-4">
                    <li class="text-lg font-light leading-relaxed  text-gray-700">Terwujudnya SDM yang beriman,
                        bertaqwa, dan berahklak mulia serta sesuai dengan ajaran islam.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700"> Terwujudnya SDM yang memiliki
                        kecakapan hidup. </li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Terwujudnya kelembagaan yang
                        selalu belajar. </li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Terwujudnya lulusan yang cerdas
                        dan kompetitif. </li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Terwujudnya pembelajaran yang
                        efektif.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Terwujudnya sarana dan prasarana
                        yang memadai. </li>
                    <br>
                </ul>
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Misi</div>
                <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
                    Misi Sekolah
                </div>
                <ul class="list-disc ml-6 mb-6 flex flex-col gap-4">
                    <li class="text-lg font-light leading-relaxed text-gray-700">Standar isi kurikulum.</li>
                    <li class="text-lg font-light leading-relaxedtext-gray-700">Melaksanakan pengembangan
                        Kurikulum K-13.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Melaksanakan pengembangan
                        kurikulum muatan lokal Bahasa Arab dan Ibadah.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Melaksanakan pengembangan silabus
                        dan RPP.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Melaksanakan pengembangan
                        metodologi pembelajaran.</li>
                    <li class="text-lg font-light leading-relaxed  text-gray-700">Mewujudkan pembelajaran yang
                        aktif, kreatif, inovatif, efektif dan efisien dengan pendekatan kontekstual.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Mewujudkan pengembangan profesi
                        guru.</li>
                    <li class="text-lg font-light leading-relaxed  text-gray-700">Meningkatkan kualitas pendidik
                        dan tenaga kependidikan.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Mewujudkan dan
                        mengimplementasikan MBS yang tangguh.</li>
                    <li class="text-lg font-light leading-relaxed text-gray-700">Melaksanakan administrasi
                        sekolah.</li>
                </ul>
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00] mt-32">Tujuan</div>
                <h2 class="text-2xl font-bold mb-4">Tujuan</h2>
                <ul class="list-disc ml-6 mb-6 flex flex-col gap-4">
                    <li>Mewujudkan lulusan yang beriman, taqwa, cerdas, terampil dan berakhlak mulia.</li>
                    <li>Mewujudkan kemampuan olahraga yang kompetitif.</li>
                    <li>Mewujudkan apresiasi seni tangguh (Drumband, tari, musik, lukis dan drama).</li>
                    <li>Mewujudkan kader-kader PMR dan Pramuka yang tangguh.</li>
                    <li>Mewujudkan kader-kader dakwah yang berwawasan luas.</li>
                    <li>Mewujudkan kemampuan ilmiah melalui KIR dan Majalah dinding.</li>
                    <li>Mewujudkan sarana dan prasarana yang memadai dan berkualitas.</li>
                    <li>Melaksanakan jalinan kerja dengan komite sekolah dan penyandang dana.</li>
                </ul>
                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00] mt-32">Tujuan Program</div>
                <h2 class="text-2xl font-bold mb-4">Tujuan Program</h2>
                <ul class="list-disc ml-6 mb-6 flex flex-col gap-4">
                    <li>Meringankan beban biaya peserta didik.</li>
                    <li>Peningkatan mutu pembelajaran di sekolah.</li>
                    <li>Peningkatan prestasi siswa.</li>
                </ul>

                <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00] mt-32">Indikator Keberhasilan</div>
                <h2 class="text-2xl font-bold mb-4">Indikator Keberhasilan</h2>
                <ul class="list-disc ml-6 mb-6 flex flex-col gap-4">
                    <li>Tersedianya kelengkapan sekolah yang memadai.</li>
                    <li>Bermanfaatnya kelengkapan sekolah dalam kegiatan belajar mengajar.</li>
                    <li>Ketertiban dan kenyamanan KBM yang maksimal.</li>
                    <li>Kinerja Guru dan peran masyarakat dalam meningkatkan mutu pendidikan akan lebih baik.</li>
                    <li>Menunjang Visi dan Misi Sekolah.</li>
                    <li>Prestasi siswa akan meningkat.</li>
                </ul>
            </div>
    </main>
@endsection
