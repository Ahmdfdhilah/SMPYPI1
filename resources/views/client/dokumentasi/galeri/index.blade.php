@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Galeri</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Galeri</div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($paginatedData as $index => $item)
                <div data-aos="fade-up" class="grid gap-4 h-[250px] md:h-[250px] relative">
                    <div class="relative group border border-gray-300 rounded overflow-hidden bg-gray-100 hover:bg-gray-200 transition-all duration-300">
                        <img class="object-cover w-full h-full rounded-lg transition-all duration-300 group-hover:brightness-75"
                            src="/image/{{ $item['img'] }}" alt="">
                        <div
                            class="overlay absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 backdrop-blur-sm transition-opacity duration-300 group-hover:opacity-100 bg-black bg-opacity-50">
                            <p class="text-white text-lg p-2">{{ $item['name'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav class="w-fit mx-auto bg-gray-100 p-3 my-8 rounded-xl">
            <ul class="list-style-none flex">
                @if($paginatedData->previousPageUrl())
                <li>
                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="{{ $paginatedData->previousPageUrl() }}">Previous</a>
                </li>
                @endif
        
                @foreach($paginatedData->getUrlRange(1, $paginatedData->lastPage()) as $page => $url)
                <li @if($page == $paginatedData->currentPage()) aria-current="page" @endif>
                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm {{ $page == $paginatedData->currentPage() ? 'font-medium text-primary-700' : 'text-neutral-600' }} transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="{{ $url }}">{{ $page }} @if($page == $paginatedData->currentPage()) <span class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">(current)</span> @endif</a>
                </li>
                @endforeach
        
                @if($paginatedData->nextPageUrl())
                <li>
                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="{{ $paginatedData->nextPageUrl() }}">Next</a>
                </li>
                @endif
            </ul>
        </nav>
        
    </main>
@endsection
