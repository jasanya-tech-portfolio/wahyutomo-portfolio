<div id="project" class="bg-white-100">

    {{-- Ping Bottom --}}
    <div class="flex justify-center pt-10 font-[Poppins]">
        <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-blue-600 font-semibold shadow-sm hover:shadow-md max-w-[220px] border-2 border-blue-100">
            <!--Ikon ping -->
            <div class="relative flex items-center justify-center w-4 h-4">
                <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex w-3 h-3 rounded-full bg-blue-600"></span>
            </div>
            
            <!-- Teks -->
            Featured Work
        </div>
    </div>

    <h1 class="text-4xl md:text-5xl text-gray-800 font-[Caveat] font-semibold text-center py-6">
        Recent Project
    </h1>

    <h3 class="text-sm md:text-lg text-gray-600 px-2 font-medium text-center">
        {{App\Helpers\SettingHelper::getSetting('text project')}}
    </h3>

    {{-- Card Project --}}
    <div class="px-6 lg:px-24 py-8">
        <div class="overflow-x-auto hide-scrollbar">
            <div class="flex space-x-6 w-max mx-auto">
                {{-- @foreach ( $projects as $project ) --}}
                    @for ($i = 0; $i < 6; $i++)
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg overflow-hidden w-72 lg:w-80 flex-shrink-0 border-1 border-emerald-700 hover:border-emerald-800 font-[poppins]">
                            <div class="overflow-hidden rounded-t-lg">
                                <img src="{{ asset('images/UIUX.png') }}"
                                    alt="Thumbnail"
                                    class="w-full h-40 md:h-48 object-cover transform transition-transform duration-300 hover:scale-110">
                            </div>
                            <div class="p-4">
                                <span class="text-sm text-blue-500 font-medium">Category {{ $i + 1 }}</span>
                                <h2 class="py-2 text-lg font-semibold mt-1">Sistem Informasi E-Learning Berbasis website {{ $i + 1 }}</h2>

                                <h2 class="text-md text-gray-700 font-medium mt-1">PT Pertamina{{ $i + 1 }}</h2>

                                <p class="text-gray-700 text-sm mt-2 line-clamp-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula purus nec neque vehicula, a rutrum erat varius.
                                </p>

                                <p class="py-4 text-gray-500">
                                    24 April 2025
                                </p>

                                {{-- <section class="flex justify-center wrapper !bg-[#ffffff] wrapper-border mx-auto">
                                    <div class="container py-4">
                                        <div class="swiper-container clients !mb-0 relative z-10" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="2000" data-items-xxl="7" data-items-xl="7" data-items-lg="7" data-items-md="4" data-items-xs="2">
                                        <div class="swiper">
                                            <div class="swiper-wrapper ticker">
                                            @foreach ($tools->take(5) as $tool)
                                            <div class="swiper-slide w-auto">
                                                <div class="flex items-center justify-center space-x-1 bg-white border border-blue-400 rounded-xl px-2 py-2 shadow-sm hover:shadow-md min-w-[100px] mx-1">
                                                    <img src="{{ asset('storage/' . $tool->logo) }}" alt="{{ $tool->name }}" class="w-4 h-4 object-contain">
                                                    <span class="text-xs font-medium text-gray-800">{{ $tool->name }}</span>
                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                            <!--/.swiper-wrapper -->
                                        </div>
                                        <!-- /.swiper -->
                                        </div>
                                        <!-- /.swiper-container -->
                                    </div>
                                </section> --}}

                                <a href="#" class="inline-block mt-2 px-4 py-2 bg-sky-800 text-white text-sm rounded hover:bg-sky-900 transition">
                                    View Project
                                </a>
                            </div>
                        </div>
                    @endfor
                {{-- @endforeach --}}
            </div>
        </div>
    </div>


</div>

{{-- Style Buat Card --}}
<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>