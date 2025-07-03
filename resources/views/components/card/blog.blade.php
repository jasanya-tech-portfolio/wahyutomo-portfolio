<div class="bg-gray-100">
    <h1 class="text-2xl md:text-3xl text-gray-800 font-[poppins] font-medium text-center pt-10 pb-4">
        Recent Blogs
    </h1>
    <div class="h-[5px] w-[150px] bg-amber-600 mx-auto"></div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-2 py-12 font-[poppins] text-gray-800">
        @foreach ($blogs as $blog)
            <div class="bg-white w-[418px] h-[280px] mx-auto my-auto shadow-sm hover:shadow-lg border-gray-300 hover:border-2">
                {{-- Title --}}
                <div class="px-4 pt-6 pb-2 w-[374px] h-[85px]">
                    <h1 class="text-[22px] font-semibold hover:underline">
                        {{ \Illuminate\Support\Str::limit($blog->title, 50, '...') }}
                    </h1>
                </div>
                {{-- Date & Category--}}
                <div class="px-4 py-4">
                    <h3 class="text-sm font-light">
                        {{ date('F d, Y', strtotime($blog->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; {{$blog->categoris->pluck('name')->join(', ')}} 
                    </h3>
                </div>
                {{-- Body --}}
                <div class="px-4 py-2">
                    <p class="text-sm line-clamp-3">{{ strip_tags($blog->body) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>