@extends('layouts.client.app')

@section('content')
<img class="w-full h-44 lg:h-60 object-cover" src="/frontend/bg.jpg" alt="bg">
<main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24">
  <div class="relative w-fit flex text-md font-light lg:text-xl">
    <a href="/">Home /&nbsp;</a>
    <div class="text-[#FFAC00]">Prestasi</div>
  </div>
  <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Prestasi</div>
   <div class="grid gap-x-6 gap-y-6 md:grid-cols-3 lg:gap-x-12">
            @foreach ($achievements as $achievement)
                <div class="mb-6 lg:mb-0">
                    <div
                        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat">
                            <img src="/image/{{$achievement->achievement_img}}" class="w-full lg:max-h-[30rem] object-cover rounded-t-lg" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                                </div>
                            </a>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-4 text-lg">{{$achievement->achievement_desc}}</h5>
                            <p class="mb-4 text-neutral-500">{{ substr($achievement->achievement_date, 0, 10)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</main>
@endsection