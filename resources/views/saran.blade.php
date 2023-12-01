@extends('layouts.client.app')

@section('content')
    <img class="w-full h-44 lg:h-60" src="/frontend/bg.jpg" alt="bg">
    <main class="w-full bg-white pt-12 pb-48 px-8 md:px-11 lg:px-24">
        <div class="relative w-fit flex text-md font-light lg:text-xl">
            <a href="/">Home /&nbsp;</a>
            <div class="text-[#FFAC00]">Saran</div>
        </div>
        <section class="min-h-screen py-24 lg:flex" data-aos="fade-up" data-aos-delay="200">
            <div
                class="flex flex-col justify-center w-full p-8 bg-cover lg:px-12 xl:px-32 lg:w-1/2" style="background-image: url('/frontend/contact.jpg');">
                <div class="bg-white opacity-95 p-8 rounded-xl">
                    <h1 class="text-2xl font-semibold  capitalize lg:text-3xl">Saran dan
                        Masukan
                    </h1>
    
                    <p class="mt-4 text-gray-800">
                        Jika ada sesuatu yang ingin disampaikan kepada kami, mohon isi form yang telah tersedia, Kami
                        senang
                        mendengar dari Anda, silahkan sampaikan komentar, opini, masukan/saran, pengaduan dengan tata
                        bahasa yang sopan. terimakasih
                    </p>
    
                    <div class="mt-6 md:mt-8">
                        <h3 class="font-medium text-gray-800">Follow Kami</h3>
    
                        <div class="flex mt-4 -mx-1.5 ">
    
                            <a class="mx-1.5 text-gray-800 transition-colors duration-300 transform hover:text-[#FFCA00]"
                                href="#">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
    
                            <a class="mx-1.5 text-gray-800 transition-colors duration-300 transform hover:text-[#FFCA00]"
                                href="#">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col bg-white justify-center w-full p-8 lg:w-1/2 lg:px-12 xl:px-24 ">
                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium">Nama
                            </label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Ahmad Fadillah" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium">Pekerjaan
                            </label>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Mahasiswa" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">Email
                                address</label>
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="john.doe@company.com" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium">Nomor
                                Telepon</label>
                            <input type="tel" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="08XX-XXXX-XXXX" pattern="08[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="large-input" class="block mb-2 text-sm font-medium">Isi
                            Pesan</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <button type="submit"
                        class="text-white bg-[#FFCA00] hover:bg-[#FFF000]  focus:ring-4 focus:outline-none focus:ring-[#FFAC00] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection
