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
                        class="w-[370px] lg:w-[400px] h-auto rounded 
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

                {{-- Wrapper untuk dua tombol --}}
                <div class="flex flex-col sm:flex-row gap-4 py-5 items-center">
                    
                    {{-- Tombol Let's Talk --}}
                    <a 
                        href="mailto:{{ App\Helpers\SettingHelper::getSetting('email') }}" 
                        target="_blank" 
                        class="inline-flex items-center gap-3 text-blue-600 text-lg bg-white py-2 px-6 rounded-3xl shadow hover:shadow-lg max-w-[320px] h-[70px] border-2 border-blue-600 font-semibold"
                    >
                        Let's Talk
                        <div class="bg-blue-100 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                viewBox="0 0 24 24" stroke-width="1.5" 
                                stroke="currentColor" 
                                class="w-6 h-6 text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </a>

                    {{-- Tombol CV --}}
                    <a 
                        href="{{ App\Helpers\SettingHelper::getSetting('cv') }}" 
                        target="_blank" 
                        class="inline-flex items-center gap-3 text-amber-600 text-lg bg-white py-2 px-6 rounded-3xl shadow hover:shadow-lg max-w-[320px] h-[70px] border-2 border-amber-600 font-semibold"
                    >
                        <div class="bg-amber-100 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-6 h-6 text-amber-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
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
    <x-card.project :projects="$projects" />

    <!-- Progress Wrapper -->
    <div class="fixed right-6 bottom-6 flex flex-col items-center space-y-4 z-[9999]">
        <!-- Button 1 -->
        <div
            class="progress-wrap w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] opacity-100 translate-y-0 transition-all duration-300 ease-in-out delay-[0s] rounded-full after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:!text-[#605dba] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons 
                hover:scale-110 hover:shadow-lg hover:shadow-indigo-300">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path
                    class="fill-none stroke-[#605dba] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                    d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Button 2 (WhatsApp) -->
        <a href="https://wa.me/{{ App\Helpers\SettingHelper::getSetting('wa') }}" target="_blank">
            <div
                class="progress-wrap relative w-[2.3rem] h-[2.3rem] cursor-pointer flex items-center justify-center shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] opacity-100 translate-y-0 transition-all duration-300 ease-in-out rounded-full hover:scale-110 hover:shadow-lg hover:shadow-green-300">
                <!-- SVG WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                    class="w-5 h-5 fill-[#25D366] absolute z-[2]">
                    <path
                        d="M16 .5C7.44.5.5 7.44.5 16c0 2.8.74 5.54 2.14 7.94L.5 31.5l7.74-2.1C10.69 30.8 13.31 31.5 16 31.5 24.56 31.5 31.5 24.56 31.5 16S24.56.5 16 .5zm0 28.5c-2.46 0-4.86-.66-6.96-1.9l-.5-.3-4.6 1.24 1.24-4.6-.3-.5C3.66 20.86 3 18.46 3 16 3 8.82 8.82 3 16 3s13 5.82 13 13-5.82 13-13 13zm6.36-9.64c-.36-.18-2.14-1.06-2.47-1.18-.33-.12-.57-.18-.81.18s-.93 1.18-1.14 1.43-.42.27-.78.09c-.36-.18-1.51-.56-2.88-1.78-1.07-.95-1.78-2.12-1.99-2.48-.21-.36-.02-.55.16-.73.16-.16.36-.42.54-.63.18-.21.24-.36.36-.6.12-.24.06-.45-.03-.63-.09-.18-.81-1.96-1.11-2.68-.29-.7-.59-.6-.81-.61-.21-.01-.45-.01-.69-.01s-.63.09-.96.45c-.33.36-1.26 1.23-1.26 3 0 1.77 1.29 3.48 1.47 3.72.18.24 2.53 3.87 6.13 5.43.86.37 1.53.59 2.05.76.86.27 1.64.23 2.26.14.69-.1 2.14-.87 2.44-1.71.3-.84.3-1.55.21-1.71-.09-.15-.33-.24-.69-.42z" />
                </svg>
                <!-- Lingkaran progress -->
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path
                        class="fill-none stroke-[#25D366] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                        d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
        </a>
    </div>
@endsection
