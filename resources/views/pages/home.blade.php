@extends('layouts.base')

@section('title', 'Home')

@section('content')
    {{-- hero section --}}
    <div class="py-10 px-5 lg:py-13 lg:px-12 mt-[64px]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:py-5 item-center justify-center">
            
            {{-- Foto Hero --}}
            <div class="py-3 order-1 md:order-2 lg:order-2">
                <div class="flex items-center justify-center h-full">
                    <img src="{{App\Helpers\BannerHelper::getBannerImageUrl('fotohero')}}"
                        alt="Profile Image"
                        class="w-[370px] h-auto rounded 
                        shadow-[0_0_25px_rgba(245,158,11,0.7)] 
                        hover:shadow-[0_0_40px_rgba(245,158,11,0.9)] 
                        transition-shadow duration-300 ease-in-out motion-preset-seesaw motion-duration-700">
                </div>
            </div>
            
            {{-- Text Hero --}}
            <div class="text-gray-900 flex flex-col justify-center px-2 lg:px-3 order-2 md:order-2 lg:order-1 text-center lg:text-left font-[poppins]">
                
                {{-- Ping Bottom --}}
                <div class="flex justify-center lg:justify-start">
                    <div class="inline-flex items-center gap-2 bg-amber-100 px-4 py-2 rounded-full text-sm text-amber-600 font-semibold hover:shadow-sm max-w-[220px]">
                        <!--Ikon ping -->
                        <div class="relative flex items-center justify-center w-4 h-4">
                            <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-amber-400 opacity-75"></span>
                            <span class="relative inline-flex w-3 h-3 rounded-full bg-amber-600"></span>
                        </div>
                        
                        <!-- Teks -->
                        Remote Worker
                    </div>
                </div>


                <h1 class="text-4xl lg:text-[44px] font-medium py-5 drop-shadow-2xl items-center justify-center font-[Caveat]">
                    <span class="font-black text-4xl lg:text-5xl">{{App\Helpers\SettingHelper::getSetting('name')}}</span>
                    <br>
                    <span class="text-amber-600 text-3xl lg:text-6xl">{{App\Helpers\SettingHelper::getSetting('hero title')}}</span>
                </h1>
                <div class="flex justify-center lg:justify-start">
                    <div class="w-[380px] md:w-[550px] lg:w-[680px]">
                        <h3 class="py-3 text-sm lg:text-lg text-gray-800 font-light">
                            {{App\Helpers\SettingHelper::getSetting('text hero')}}
                        </h3>
                    </div>
                </div>

                {{-- Tombol CV --}}
                <div class="py-5">
                    <a 
                        href="{{ App\Helpers\SettingHelper::getSetting('cv') }}" 
                        target="_blank" 
                        class="inline-flex items-center gap-3 text-amber-600 text-lg bg-white py-2 px-6 rounded-3xl shadow hover:shadow-lg max-w-[320px] h-[70px] border-2 border-amber-600 font-semibold"
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

    {{-- Card Blog --}}
    <x-card.blog :project="$project" />
@endsection
