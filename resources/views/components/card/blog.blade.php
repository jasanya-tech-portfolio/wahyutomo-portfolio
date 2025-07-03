<div class="bg-gray-200">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 py-12 font-[poppins]">
        @foreach ($blogs as $blog)
            <div class="bg-white w-[418px] h-[295px] mx-auto shadow-sm hover:shadow-lg">
                {{-- Title --}}
                <div class="px-4 py-6">
                    <h1 class="text-[22px] font-semibold hover:underline">
                        {{$blog->title}}
                    </h1>
                </div>
                {{-- Date --}}
                {{-- Category --}}
                {{-- Body --}}
            </div>
        @endforeach
    </div>
</div>