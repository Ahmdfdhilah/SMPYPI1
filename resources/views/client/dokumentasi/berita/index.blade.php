<!-- resources/views/dokumentasi/berita/index.blade.php -->
@php
    $category = isset($_GET['category']) ? $_GET['category'] : null;
@endphp

@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 px-4 pb-48 md:px-11 lg:px-24">

        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Berita</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Berita</div>

        <form method="GET" action="{{ route('berita') }}">
            <div class="flex">
                <label for="search-dropdown"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">{{ $category ? $category : 'All categories' }} <svg class="w-2.5 h-2.5 ms-2.5"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                name="category" value="Blog">Blog</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                name="category" value="Pengumuman">Pengumuman</button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Cari Blog atau Pengumuman..." name="title" required>
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>

        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12">
            @forelse ($publications as $publication)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <a href="#">
                        <img class="rounded-t-lg object-cover w-full h-48"
                            src="/image/{{ $publication->publication_img }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/berita/{{ $publication->id }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $publication->publication_name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {!! substr($publication->publication_desc, 0, 200) !!} ...</p>
                        <a href="/berita/{{ $publication->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#FFAC00]  rounded-lg hover:bg-[#FFF000]  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            @empty
                <p class="text-gray-700 dark:text-gray-400">Tidak ada hasil pencarian.</p>
            @endforelse
        </div>
        @if ($publications->total() > 0)
            <nav class="w-fit mx-auto bg-gray-100 p-3 my-8 rounded-xl">
                <ul class="list-style-none flex">
                    @if ($publications->previousPageUrl())
                        <li>
                            <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                href="{{ $publications->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    @foreach ($publications->getUrlRange(1, $publications->lastPage()) as $page => $url)
                        <li @if ($page == $publications->currentPage()) aria-current="page" @endif>
                            <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm {{ $page == $publications->currentPage() ? 'font-medium text-primary-700' : 'text-neutral-600' }} transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                href="{{ $url }}">{{ $page }} @if ($page == $publications->currentPage())
                                    <span
                                        class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">(current)</span>
                                @endif
                            </a>
                        </li>
                    @endforeach

                    @if ($publications->nextPageUrl())
                        <li>
                            <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                href="{{ $publications->nextPageUrl() }}">Next</a>
                        </li>
                    @endif
                </ul>
            </nav>
        @endif
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.getElementById('dropdown-button');
            const dropdown = document.getElementById('dropdown');
            const categoryButtons = document.querySelectorAll('[name="category"]');

            categoryButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const category = button.value;
                    window.location.href = "{{ route('berita') }}?category=" + category;
                });
            });
        });
    </script>
@endsection
