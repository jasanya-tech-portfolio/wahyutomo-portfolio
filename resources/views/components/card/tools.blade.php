<div class="bg-gray-100 py-10 px-10">
    <h1 class="text-2xl md:text-3xl text-gray-800 font-[poppins] font-medium text-center pt-10 pb-4">
        My Tools
    </h1>
    <div class="h-[5px] w-[150px] bg-amber-600 mx-auto">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10 py-8">
        @foreach ($tools as $tool)
            <div class="bg-white w-[300px] h-[200px] mx-auto my-auto
                shadow-[0_0_25px_rgba(245,158,11,0.7)] 
                hover:shadow-[0_0_40px_rgba(245,158,11,0.9)] 
                transition-shadow duration-300 ease-in-out
                rounded-2xl">

                <!-- logo -->
                <div class="flex px-6 w-full h-[130px] pt-8">
                    <img src="{{ asset('storage/' . $tool->logo) }}" alt="{{ $tool->name }}" class="max-h-full max-w-full object-contain mx-auto">
                </div>

                <!-- name -->
                <h3 class="font-[poppins] font-medium text-xl px-4 pt-4 text-center">
                    {{ $tool->name }}
                </h3>
                
            </div>
        @endforeach
    </div>
</div>