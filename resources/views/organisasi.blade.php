<x-app-layout>
<x-slot name="title">
        Struktur Organisasi
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Struktur Organisasi') }}
        </h2>
    </x-slot>

    <div class="mt-10 mx-5 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-lg rounded-lg h-auto w-full md:w-full cursor-pointer m-auto p-4 bg-white transition duration-500 ease-in-out transform hover:translate-y-5 hover:shadow-2xl">

            <div class="p-10 bg-white">
                    <img src="{{ asset('img/organisasi.png') }}" md:w-auto width="75%" alt="logo ">

            </div>
        </div>
    </div>
</x-app-layout>
