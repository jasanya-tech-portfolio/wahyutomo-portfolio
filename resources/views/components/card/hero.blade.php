<div class="py-5 px-5 lg:py-8 lg:px-12 mt-[64px]">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:py-5 item-center justify-center">
        
        {{-- Foto Hero --}}
        <div class="py-3 order-1 md:order-2 lg:order-2">
            <div class="flex items-center justify-center h-full">
                <img src="{{App\Helpers\BannerHelper::getBannerImageUrl('fotohero')}}"
                    alt="Profile Image"
                    class="w-[370px] lg:w-[400px] h-auto rounded 
                    shadow-[0_0_40px_rgba(245,158,11,0.7)] 
                    hover:shadow-[0_0_60px_rgba(245,158,11,0.9)]
                    transform transition duration-300 hover:-translate-y-1">
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

            {{-- Name dan Position --}}
            <h1 class="text-4xl lg:text-[44px] font-medium py-5 drop-shadow-2xl items-center justify-center font-[Caveat]">
                <span class="font-black text-4xl lg:text-5xl">{{App\Helpers\SettingHelper::getSetting('name')}}</span>
                <br>
                <span class="text-amber-600 text-3xl lg:text-6xl">{{App\Helpers\SettingHelper::getSetting('hero title')}}</span>
            </h1>

            {{-- Icons Dan Alamat --}}
            <div class="flex flex-col sm:flex-row items-center gap-y-2 py-4 text-sm text-gray-700 font-[poppins] sm:gap-x-6">

                <div class="flex items-center gap-x-2 sm:gap-x-6 py-2">
                    <div class="flex items-center gap-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        <span>Jakarta, Indonesia</span>
                    </div>

                    <div class="flex items-center gap-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                        <span>2+ Years Experience</span>
                    </div>
                </div>

                <div class="flex items-center gap-x-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    <span>+6285891514812</span>
                </div>

            </div>

            <div class="flex justify-center lg:justify-start">
                <div class="w-[380px] md:w-[550px] lg:w-[680px]">
                    <h3 class="py-3 text-sm lg:text-lg text-gray-700 font-light">
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