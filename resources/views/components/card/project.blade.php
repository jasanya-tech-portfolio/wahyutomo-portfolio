<div class="bg-gray-100">

    {{-- Ping Bottom --}}
    <div class="flex justify-center pt-10">
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

    <h3 class="text-sm md:text-lg text-gray-700 font-[poppins] font-medium text-center">
        {{App\Helpers\SettingHelper::getSetting('text project')}}
    </h3>

    {{-- Card Project --}}
    <div class="px-6 lg:px-24 py-6">
        <div class="overflow-x-auto hide-scrollbar">
            <div class="flex space-x-6 w-max mx-auto">
                {{-- @foreach ( $projects as $project ) --}}
                    @for ($i = 0; $i < 6; $i++)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden w-80 flex-shrink-0">
                            <img src="https://via.placeholder.com/600x300" alt="Thumbnail" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <span class="text-sm text-gray-500 font-medium">Category {{ $i + 1 }}</span>
                                <h2 class="text-lg font-semibold mt-1">Project Title {{ $i + 1 }}</h2>
                                <p class="text-gray-700 text-sm mt-2 line-clamp-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula purus nec neque vehicula, a rutrum erat varius.
                                </p>
                                <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                    Start Project
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