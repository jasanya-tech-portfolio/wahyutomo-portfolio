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

</div>