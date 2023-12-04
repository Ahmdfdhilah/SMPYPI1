@extends('layouts.admin.app')

@section('title', 'Selamat Datang, Admin!')

@section('content')
    <div class="container mx-auto p-4">

        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Admin Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            <!-- News Card -->
            <a href="{{ route('news.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/publications.jpg" alt="News Image" class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Publikasi</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $newsCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data Pengumuman dan blog.</p>
            </a>

            <!-- Achievements Card -->
            <a href="{{ route('achievements.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/achievements.jpg" alt="Achievements Image"
                        class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Prestasi</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 20c-1.18 0-2.18-.47-3-1.24m0 0c-1.26-1.26-2.34-3-3-4H5c-.66 1-1.74 2.74-3 4C2.82 20.53 3.82 22 5 22h14c1.18 0 2.18-.47 3-1.24c-.54-1.01-1.2-2.28-1.93-3.76l-1.89-4.92L12 2L9.82 4.29l-1.89 4.92c-.73 1.49-1.39 2.75-1.93 3.76c.82.77 1.82 1.24 3 1.24h14z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $achievementsCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data prestasi</p>
            </a>

            <a href="{{ route('employees.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/employees.jpg" alt="Employees Image" class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Pegawai</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 20c-1.18 0-2.18-.47-3-1.24m0 0c-1.26-1.26-2.34-3-3-4H5c-.66 1-1.74 2.74-3 4C2.82 20.53 3.82 22 5 22h14c1.18 0 2.18-.47 3-1.24c-.54-1.01-1.2-2.28-1.93-3.76l-1.89-4.92L12 2L9.82 4.29l-1.89 4.92c-.73 1.49-1.39 2.75-1.93 3.76c.82.77 1.82 1.24 3 1.24h14z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $employeesCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data pegawai</p>
            </a>
            <!-- Extracurriculars Card -->
            <a href="{{ route('extracurriculars.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/eskuls.jpg" alt="Extracurriculars Image"
                        class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Eskul</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $extracurricularsCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data eksul.</p>
            </a>

            <!-- Facilities Card -->
            <a href="{{ route('facilities.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/facilities.jpg" alt="Facilities Image"
                        class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Facilities</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 21H4v-4c0-1.1.9-2 2-2h7V9a3 3 0 013-3h1a1 1 0 011 1v8a3 3 0 01-3 3H9a1 1 0 01-1 1z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $facilitiesCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data fasilitas.</p>
            </a>

            <!-- Scholarships Card -->
            <a href="{{ route('scholarships.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/documentations.jpg" alt="Scholarships Image"
                        class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Beasiswa</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-purple-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 21H4v-4c0-1.1.9-2 2-2h7V9a3 3 0 013-3h1a1 1 0 011 1v8a3 3 0 01-3 3H9a1 1 0 01-1 1z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $scholarshipsCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data beasiswa.</p>
            </a>

            <a href="{{ route('students.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/students.jpg" alt="Students Image" class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Siswa</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#fff000"
                        class="h-6 w-6 text-purple-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 21H4v-4c0-1.1.9-2 2-2h7V9a3 3 0 013-3h1a1 1 0 011 1v8a3 3 0 01-3 3H9a1 1 0 01-1 1z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Jumlah Data: {{ $studentsCount }}</p>
                <p class="text-gray-600 mt-2">Lihat dan edit data siswa.</p>
            </a>

            <a href="{{ route('kepsek.index') }}"
            class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
            <div class="mb-4">
                <img src="/frontend/kepsek.jpg" alt="Kepsek Image" class="w-full h-32 object-cover rounded-t-lg">
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Kepala Sekolah</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#FFCA00"
                    class="h-6 w-6 text-purple-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 21H4v-4c0-1.1.9-2 2-2h7V9a3 3 0 013-3h1a1 1 0 011 1v8a3 3 0 01-3 3H9a1 1 0 01-1 1z">
                    </path>
                </svg>
            </div>
            <p class="text-gray-600 mt-2">Jumlah Data: {{ $kepsekCount }}</p>
            <p class="text-gray-600 mt-2">Lihat dan edit data Kepala Sekolah.</p>
        </a>
        </div>

    </div>
@endsection
