@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <img class="w-full h-44 lg:h-60" src="/storage/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Eskul</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Eskul</div>
        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48">
            @foreach ($eskuls as $eskul)
            <div data-aos="fade-up" class="block w-[18rem] h-[15rem] rounded-lg bg-[#FFAC00] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                <div class="object-cover w-full h-full overflow-hidden relative">
                    <img class="rounded-lg w-full h-full object-cover" src="/storage/{{$eskul->eskul_img}}" alt="" />
                    <div class="rounded-b-lg absolute bottom-0 w-full bg-[#FFAC00] p-2">
                        <p class="font-bold text-white">
                            {{$eskul->eskul_name}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
@endsection
