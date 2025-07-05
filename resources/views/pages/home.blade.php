@extends('layouts.base')

@section('title', 'Home')

@section('content')
    {{-- hero section --}}
    <div class="py-10 px-10 lg:py-13 lg:px-12 mt-[64px]">
        <!-- Background Pattern -->
        {{-- <div class="absolute inset-0">
            <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]">
                
            </div>
        </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:py-5 item-center justify-center">
            <div class="py-3 order-1 md:order-2 lg:order-2">
                <div class="flex items-center justify-center h-full">
                    <img src="{{App\Helpers\BannerHelper::getBannerImageUrl('fotohero')}}"
                        alt="Profile Image"
                        class="w-[370px] h-auto rounded 
                        shadow-[0_0_25px_rgba(245,158,11,0.7)] 
                        hover:shadow-[0_0_40px_rgba(245,158,11,0.9)] 
                        transition-shadow duration-300 ease-in-out animate-(--animate-float)">
                </div>
            </div>
            <div class="text-gray-900 flex flex-col justify-center px-2 lg:px-3 order-2 md:order-2 lg:order-1 text-center lg:text-left">
                <h1 class="text-4xl lg:text-[44px] font-medium py-5 drop-shadow-2xl items-center justify-center font-mono">
                    Hi, I am <span class="font-black text-4xl lg:text-[48px]">{{App\Helpers\SettingHelper::getSetting('name')}}</span>
                    <br>
                    <span class="text-amber-600 text-3xl lg:text-5xl">{{App\Helpers\SettingHelper::getSetting('hero title')}}</span>
                </h1>
                <h3 class="py-3 text-lg lg:text-xl text-gray-600 font-light font-[poppins]">
                    {{App\Helpers\SettingHelper::getSetting('text hero')}}
                </h3>

                {{-- Tombol CV --}}
                <div class="py-5">
                    <a 
                        href="{{ App\Helpers\SettingHelper::getSetting('cv') }}" 
                        target="_blank" 
                        class="inline-flex items-center gap-3 font-[poppins] text-amber-600 text-lg bg-white py-2 px-6 rounded-3xl shadow hover:shadow-lg max-w-[320px] h-[70px] border-2 border-amber-600 font-semibold"
                    >
                        <!-- Lingkaran dengan ikon di dalamnya -->
                        <div class="bg-amber-100 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 text-amber-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>

                        <!-- Teks -->
                        Download CV
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- Card Tools --}}
    <x-card.tools :tools="$tools" />

    {{-- Card Blog --}}
    <x-card.blog :blogs="$blogs" />
@endsection
