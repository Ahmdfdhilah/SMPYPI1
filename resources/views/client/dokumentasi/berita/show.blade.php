@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 px-4 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Berita</div>
        </div>

        <div class="max-w-2xl mx-auto px-4 py-8">

            <img src="/image/{{$publication->publication_img}}" alt="{{ $publication->publication_title }}"
                 class="w-full h-64 object-cover mb-6 rounded-lg">
    
            <h1 class="text-3xl font-semibold mb-4">{{ $publication->publication_title }}</h1>
    
            <div class="flex items-center text-gray-600 text-sm mb-4">
                <svg class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm-1-11h2v6h-2zm0 4h2v2h-2z"/>
                </svg>
                <span>{{ $publication->created_at->format('F d, Y') }}</span>
            </div>
    
            <div class="prose max-w-full mb-8">
                {!! $publication->publication_desc !!}
            </div>
    
            <div class="flex items-center justify-between">
                <a href="/berita"
                   class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#FFCA00] rounded-lg hover:bg-[#FFF000]">
                    Lihat yang lain
                </a>
    
            </div>
    
        </div>

    </main>
@endsection
