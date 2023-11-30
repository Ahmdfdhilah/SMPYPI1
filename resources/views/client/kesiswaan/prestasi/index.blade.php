@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<img class="w-full h-44 lg:h-60" src="/storage/frontend/bg.jpg" alt="bg">
<main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24">
  <div class="relative w-fit flex text-md font-light lg:text-xl">
    <a href="/">Home /&nbsp;</a>
    <div class="text-[#FFAC00]">Prestasi</div>
  </div>
  <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Prestasi</div>
  <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48">
    @foreach ($achievements as $achievement)
    <div data-aos="fade-up" class="block w-[18rem] h-[20rem] rounded-lg ">
        <div class="object-cover w-full h-full overflow-hidden relative">
            <img class="rounded-t-lg w-full h-full object-cover" src="/storage/{{$achievement->achievement_img}}" alt="" />
            <div class="absolute bottom-0 w-full bg-white p-2">
                <p class="font-bold text-lg text-[#FFAC00]">
                    {{$achievement->achievement_name}}
                </p>
                <div class="font-light text-md">{{$achievement->achievement_desc}}</div>
                <div class="font-thin text-xs pt-3"> {{ substr($achievement->achievement_date, 0, 10)}}</div>
            </div>
           
        </div>
    </div>
    @endforeach
</div>
</main>
@endsection