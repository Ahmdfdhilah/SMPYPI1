@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <img class="w-full h-44 lg:h-60" src="/storage/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 px-4 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Beasiswa</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] pt-20 lg:text-3xl">Syarat Beasiswa</div>

        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48" data-aos="fade-up" data-aos-delay="200">
            {!!$scholarship->scholarship_condition!!}
        </div>

    </main>
@endsection
