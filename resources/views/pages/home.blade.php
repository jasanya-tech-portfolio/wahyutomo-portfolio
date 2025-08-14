@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <div class="grow shrink-0">
        {{-- hero section --}}
        <x-home.hero />

        {{-- Card Tools --}}
        <x-home.tools :tools="$tools" />

        {{-- Card Tools --}}
        <x-home.count />

        {{-- Card Blog --}}
        {{-- <x-card.blog :blogs="$blogs" /> --}}

        {{-- Card Blog --}}
        <x-home.project :projects="$projects" :tools="$tools" />

        {{-- Card Blog --}}
        <x-home.contact />

        {{-- Card My Journey --}}
        <x-home.myjourney :education="$education" :experience="$experience" />

        {{-- Card My Journey --}}
        <x-home.progres-skill :tools="$tools" />

        {{-- Component Testimonial
        <x-home.testimonial :tools="$tools" /> --}}
    </div>

    <!-- Progress Wrapper -->
    <div class="fixed right-6 bottom-10 flex flex-col items-center space-y-4 z-[9999]">
        <div
            id="scrollToTopButton"
            class="relative w-10 h-10 sm:w-14 sm:h-14 bg-white border border-gray-300 rounded-full flex items-center justify-center cursor-pointer shadow-md transition-transform duration-200 hover:scale-110 hover:shadow-indigo-300"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
            title="Back to Top"
        >
            <!-- Progress Circle -->
            <svg class="absolute top-0 left-0 w-full h-full z-[1] rotate-[-90deg]" viewBox="0 0 100 100">
                <circle
                    class="scroll-progress stroke-indigo-400 fill-none"
                    cx="50" cy="50" r="45"
                    stroke-width="6"
                    stroke-linecap="round"
                    stroke-dasharray="282.6"
                    stroke-dashoffset="282.6"
                />
            </svg>

            <!-- Arrow Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#605dba" class="w-5 h-5 sm:w-6 sm:h-6 z-[2]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
            </svg>
        </div>

        <!-- Button: WhatsApp -->
        <a href="https://wa.me/{{ App\Helpers\SettingHelper::getSetting('wa') }}" target="_blank" title="Chat WhatsApp">
            <div
                class="relative w-10 h-10 sm:w-14 sm:h-14 cursor-pointer flex items-center justify-center shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] bg-white rounded-full hover:scale-110 hover:shadow-lg hover:shadow-green-300 transition-all duration-300 ease-in-out">
                <!-- WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5 sm:w-6 sm:h-6 fill-[#25D366] z-[2]">
                    <path d="M16 .5C7.44.5.5 7.44.5 16c0 2.8.74 5.54 2.14 7.94L.5 31.5l7.74-2.1C10.69 30.8 13.31 31.5 16 31.5 24.56 31.5 31.5 24.56 31.5 16S24.56.5 16 .5zm0 28.5c-2.46 0-4.86-.66-6.96-1.9l-.5-.3-4.6 1.24 1.24-4.6-.3-.5C3.66 20.86 3 18.46 3 16 3 8.82 8.82 3 16 3s13 5.82 13 13-5.82 13-13 13zm6.36-9.64c-.36-.18-2.14-1.06-2.47-1.18-.33-.12-.57-.18-.81.18s-.93 1.18-1.14 1.43-.42.27-.78.09c-.36-.18-1.51-.56-2.88-1.78-1.07-.95-1.78-2.12-1.99-2.48-.21-.36-.02-.55.16-.73.16-.16.36-.42.54-.63.18-.21.24-.36.36-.6.12-.24.06-.45-.03-.63-.09-.18-.81-1.96-1.11-2.68-.29-.7-.59-.6-.81-.61-.21-.01-.45-.01-.69-.01s-.63.09-.96.45c-.33.36-1.26 1.23-1.26 3 0 1.77 1.29 3.48 1.47 3.72.18.24 2.53 3.87 6.13 5.43.86.37 1.53.59 2.05.76.86.27 1.64.23 2.26.14.69-.1 2.14-.87 2.44-1.71.3-.84.3-1.55.21-1.71-.09-.15-.33-.24-.69-.42z" />
                </svg>
                <!-- Progress Circle -->
                <svg class="absolute top-0 left-0 w-full h-full" viewBox="-1 -1 102 102">
                    <path
                        class="fill-none stroke-[#25D366] stroke-[4] transition-all duration-200 ease-linear motion-reduce:transition-none"
                        d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
        </a>
    </div>
    
    <script>
        const circle = document.querySelector('.scroll-progress');
        const radius = 45;
        const circumference = 2 * Math.PI * radius;

        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const progress = scrollTop / docHeight;

            const offset = circumference - progress * circumference;
            circle.style.strokeDashoffset = offset;
        });
    </script>

    <style>
        body {
            background-image: url('data:image/svg+xml;utf8,<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 0V20M0 10H20" stroke="%23e5e7eb" stroke-width="0.5"/></svg>');
            background-color: #fff;
        }
        .dark body {
            background-color: #1a202c;
        }
    </style>

@endsection
