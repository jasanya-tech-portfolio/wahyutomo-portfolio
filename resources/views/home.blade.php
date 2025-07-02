@extends('layouts.base')

@section('title', 'Home')

@section('content')
    {{-- hero section --}}
    {{-- <div class="bg-white py-10 px-10 rounded-b-4xl"> --}}
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
            <div class="text-gray-900 flex flex-col justify-center px-2 lg:px-3 order-2 md:order-2 lg:order-1 text-center lg:text-left">
                <h1 class="text-4xl lg:text-[44px] font-medium py-5 drop-shadow-2xl items-center justify-center font-mono">
                    Hi, I am <span class="font-black text-4xl lg:text-[48px]">{{App\Helpers\SettingHelper::getSetting('name')}}</span>
                    <br>
                    <span class="text-amber-600 text-3xl lg:text-5xl">Software Engineer</span>
                </h1>
                <h3 class="py-3 text-lg lg:text-xl text-gray-700 font-light">
                    I am a Software Engineer. Up to now, I have worked on many projects, 
                    developing innovative and efficient software solutions.
                </h3>
                <div class="py-5">
                    <a href="#" target="_blank" class="inline-block bg-amber-600 py-2 px-6 rounded shadow hover:shadow-lg hover:bg-amber-700 transition-colors duration-200 max-w-[250px]">
                        <div class="text-center text-white font-semibold">
                            Download Resume
                        </div>
                    </a>
                </div>
            </div>
        </div>
    {{-- </div> --}}


@endsection
