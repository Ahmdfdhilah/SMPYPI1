@extends('layouts.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/storage/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white py-12 px-8 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Guru & Staff</div>
        </div>
        <div class="text-2xl font-bold text-[#FFAC00] py-20 lg:text-3xl">Guru & Staff</div>
        <div class="m-auto pl-2 text-xl mb-2 border-s-4 border-[#FFAC00]">Our Teachers</div>
        <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
            Meet our expert teachers
        </div>
        <div class="grid gap-x-6 gap-y-6 md:grid-cols-3 lg:gap-x-12">
            @foreach ($guru as $employee)
                <div class="mb-6 lg:mb-0">
                    <div
                        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat">
                            <img src="storage/frontend/bg-emp.jpeg" class="w-full rounded-t-lg" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                                </div>
                            </a>
                            <svg class="absolute text-white dark:text-neutral-700  left-0 bottom-0"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="currentColor"
                                    d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-4 text-lg font-bold">{{ $employee->employee_name }}</h5>
                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">{{ $employee->employee_position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="m-auto pl-2 text-xl mb-2 mt-24 border-s-4 border-[#FFAC00]">Our Staff</div>
        <div class="h-fit pb-2 m-auto flex items-center text-2xl font-bold">
            Meet our expert staff
        </div>
        <div class="grid gap-x-6 gap-y-6 md:grid-cols-3 lg:gap-x-12">
            @foreach ($staff as $employee)
                <div class="mb-6 lg:mb-0">
                    <div
                        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat">
                            <img src="storage/frontend/bg-emp.jpeg" class="w-full rounded-t-lg" />
                            <a href="#!">
                                <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                                </div>
                            </a>
                            <svg class="absolute text-white dark:text-neutral-700  left-0 bottom-0"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="currentColor"
                                    d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-4 text-lg font-bold">{{ $employee->employee_name }}</h5>
                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">{{ $employee->employee_position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
