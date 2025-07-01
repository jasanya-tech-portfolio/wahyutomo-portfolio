@extends('layouts.base')

@section('title', 'Home')

@section('content')
    {{-- hero section --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 py-3 lg:py-5 item-center justify-center">
        <div class="py-3 order-1 md:order-2 lg:order-2">
            <div class="flex items-center justify-center h-full">
                <img src="{{ asset('images/profile.jpg') }}"
                    alt="Profile Image"
                    class="w-[370px] h-auto rounded 
                    shadow-[0_0_25px_rgba(245,158,11,0.7)] 
                    hover:shadow-[0_0_40px_rgba(245,158,11,0.9)] 
                    transition-shadow duration-300 ease-in-out">
            </div>
        </div>
        <div class="text-gray-950 flex flex-col justify-center px-2 lg:px-3 order-2 md:order-2 lg:order-1 text-center lg:text-left">
            <h1 class="text-4xl lg:text-[44px] font-bold py-5 drop-shadow-2xl items-center justify-center">
                Hi, I am Wahyu Dwi Utomo,
                <br>
                <span class="text-amber-600 lg:text-5xl">Software Engineer</span>
            </h1>
            <h3 class="py-3 text-lg lg:text-xl text-gray-700">
                Saya adalah seorang Software Engineer. Hingga saat ini, 
                saya telah banyak mengerjakan berbagai proyek, mengembangkan solusi perangkat lunak yang inovatif dan efisien.
            </h3>
        </div>
    </div>


@endsection
