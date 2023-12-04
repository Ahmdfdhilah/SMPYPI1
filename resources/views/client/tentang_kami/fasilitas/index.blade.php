@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 px-4 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Fasilitas</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Fasilitas</div>
        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48" data-aos="fade-up" data-aos-delay="200">
            @foreach ($facilities as $facility)
                <div class="block rounded-xl bg-white shadow-xl text-center">
                    <div>
                        <img class="rounded-t-xl object-cover w-full h-48 mt-2" src="/image/{{ $facility->facilities_img }}"
                            alt=""/>
                    </div>

                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800">
                            {{ $facility->facilities_name }}
                        </h5>
                        <p class="mb-2 text-base text-neutral-500">
                            {{ $facility->facilities_desc }}
                        </p>

                    </div>
                    <div class="border-t-2 border-neutral-100 px-6 py-4">
                        <h5 class="flex items-center justify-center text-neutral-500">
                            <span class="ml-2">
                                Jumlah :
                            </span>
                            <span
                                class="inline-block whitespace-nowrap rounded-[0.27rem] bg-gray-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-gray-700">
                                {{ $facility->facilities_total }}
                            </span>
                       
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
