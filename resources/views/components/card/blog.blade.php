<div class="bg-gray-200">
    <h1 class="text-2xl md:text-3xl text-gray-800 font-[poppins] font-medium text-center pt-10 pb-4">
        Recent Blogs
    </h1>
    <div class="h-[5px] w-[150px] bg-amber-600 mx-auto"></div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-12 font-[poppins]">
        @foreach ($blogs as $blog)
            <div class="bg-white w-[418px] h-[295px] mx-auto my-auto shadow-sm hover:shadow-lg">
                {{-- Title --}}
                <div class="px-4 pt-6 pb-2">
                    <h1 class="text-[22px] font-semibold hover:underline">
                        {{$blog->title}}
                    </h1>
                </div>
                {{-- Date & Category--}}
                <div class="px-4 py-2">
                    <h3 class="text-sm font-light">
                        {{ date('F d, Y', strtotime($blog->created_at)) }} &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; {{$blog->categoris->pluck('name')->join(', ')}} 
                    </h3>
                </div>
                {{-- Body --}}
                <div class="px-4 py-4">
                    <p class="text-sm line-clamp-3">{{ strip_tags($blog->body) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>