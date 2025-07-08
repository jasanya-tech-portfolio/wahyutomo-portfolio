<div class="bg-gray-100 py-10 px-10">

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

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 py-8 font-[poppins] text-gray-800">
        {{-- @foreach ($blogs as $blog) --}}
            <div class="bg-white w-[418px] h-[280px] mx-auto my-auto shadow-sm hover:shadow-lg border-gray-300 hover:border-2">
                {{-- Title --}}
                <div class="px-4 pt-6 pb-2 w-[374px] h-[85px]">
                    <h1 class="text-[22px] font-semibold hover:underline">
                        {{-- {{ \Illuminate\Support\Str::limit($blog->title, 50, '...') }} --}}
                    </h1>
                </div>
                {{-- Date & Category--}}
                <div class="px-4 py-4">
                    <h3 class="text-sm font-light">
                        {{-- {{ date('F d, Y', strtotime($blog->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; {{$blog->categoris->pluck('name')->join(', ')}}  --}}
                    </h3>
                </div>
                {{-- Body --}}
                <div class="px-4 py-2">
                    {{-- <p class="text-sm line-clamp-3">{{ strip_tags($blog->body) }}</p> --}}
                </div>
            </div>
        {{-- @endforeach --}}
    </div>
</div>