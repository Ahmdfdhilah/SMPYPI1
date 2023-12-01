@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 px-4 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Beasiswa</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Beasiswa</div>

        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48" data-aos="fade-up" data-aos-delay="200">
            @foreach ($scholarships as $scholarship)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Program Indonesia
                            Pintar</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">{{ substr($scholarship->scholarship_desc, 0, 100) }} ...</p>
                    <div class="flex flex-col gap-4 pt-4">
                        <a href="/beasiswa/{{$scholarship->id}}/deskripsi"
                            class="w-fit inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#FFAC00] rounded-lg hover:bg-[#FFF000]">
                            Tentang Program
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="/beasiswa/{{$scholarship->id}}/syarat"
                            class="w-fit inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#FFAC00] rounded-lg hover:bg-[#FFF000]">
                            Syarat Program
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
@endsection
