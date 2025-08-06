<section class="max-w-7xl mx-auto px- lg:px-10 py-12 font-[Poppins]">
    <h2 class="text-3xl font-bold text-center mb-2">My Journey</h2>
    <p class="text-center text-gray-600 mb-10">My journey in the world of technology and programming</p>

    <div class="grid md:grid-cols-2 gap-12 relative">
        <!-- Vertical Timeline Line -->
        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 top-8 bottom-0 w-[2px] bg-gray-300 z-0"></div>

        <!-- EDUCATION -->
        <div class="space-y-10 z-10">
            <h3 class="text-xl font-bold text-center md:text-left">Education</h3>
            @foreach ($education as $edu)
                <div class="relative pl-6 md:pr-8 md:pl-0">
                    <!-- Dot -->
                    <div class="absolute -left-1 md:-right-4 top-2 w-3 h-3 bg-indigo-500 rounded-full z-10"></div>

                    <!-- Date -->
                    <div class="text-sm text-gray-500 mb-2 text-left md:text-right">{{ $edu['date'] }}</div>

                    <!-- Card -->
                    <div class="bg-white border border-indigo-300 rounded-xl p-4 shadow-md max-w-md md:ml-auto">
                        <div class="flex items-start space-x-3">
                            <img src="{{ asset($edu['logo']) }}" alt="{{ $edu['title'] }}" class="w-10 h-10 object-contain mt-1">
                            <div>
                                <h4 class="font-bold">{{ $edu['title'] }}</h4>
                                <p class="text-sm text-indigo-600 font-medium">{{ $edu['subtitle'] }}</p>
                                <p class="text-sm text-gray-600">{{ $edu['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- EXPERIENCE -->
        <div class="space-y-10 z-10">
            <h3 class="text-xl font-bold text-center md:text-left">Experience</h3>
            @foreach ($experience as $exp)
                <div class="relative pl-6">
                    <!-- Dot -->
                    <div class="absolute -left-1 md:-left-4 top-2 w-3 h-3 bg-indigo-500 rounded-full z-10"></div>

                    <!-- Date -->
                    <div class="text-sm text-gray-500 mb-2">{{ $exp['date'] }}</div>

                    <!-- Card -->
                    <div class="bg-white border border-indigo-300 rounded-xl p-4 shadow-md max-w-md">
                        <div class="flex items-start space-x-3">
                            <img src="{{ asset($exp['logo']) }}" alt="{{ $exp['company'] }}" class="w-10 h-10 object-contain mt-1">
                            <div>
                                <h4 class="font-bold">{{ $exp['title'] }}</h4>
                                <p class="text-sm text-indigo-600 font-medium py-1">{{ $exp['company'] }}</p>
                                <p class="text-sm text-gray-600">{{ $exp['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
