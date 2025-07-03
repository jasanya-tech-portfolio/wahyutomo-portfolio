<div class="bg-gray-200">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-12 font-[poppins]">
        @foreach ($blogs as $blog)
            <div class="bg-white w-[418px] h-[295px] mx-auto shadow-sm hover:shadow-lg">
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
            </div>
        @endforeach
    </div>
</div>