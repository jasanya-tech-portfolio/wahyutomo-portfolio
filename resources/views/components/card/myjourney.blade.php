<section class="max-w-7xl mx-auto px- lg:px-10 py-12 font-[Poppins]">
    <h2 class="text-3xl font-bold text-center mb-2">My Journey</h2>
    <p class="text-center text-gray-600 mb-10">My journey in the world of technology and programming</p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 relative">
        <!-- Education Column -->
        <div class="relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center lg:text-left">Education</h3>

            <!-- Vertical Line -->
            <div class="absolute lg:left-4 left-4 top-8 bottom-0 w-0.5 bg-violet-200 z-0"></div>

            <!-- Timeline Items -->
            <div class="space-y-10">
                @foreach ($education as $edu)
                <div class="relative group">
                    <!-- Dot -->
                    <div class="absolute left-4 top-2 -translate-x-1/2 w-3 h-3 z-10">
                        <div class="w-full h-full rounded-full bg-violet-500 border-2 border-white shadow"></div>
                    </div>

                    <!-- Badge -->
                    <div class="ml-12">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white shadow text-sm text-gray-700">
                            {{ $edu->date }}
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="ml-12 mt-3">
                        <div class="bg-white p-4 rounded-xl border border-violet-400 shadow hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset('storage/'.$edu->logo) }}" alt="{{ $edu->institution }}" class="w-10 h-10 object-contain bg-gray-100 p-1">
                                <div>
                                    <h4 class="font-bold text-gray-900">{{ $edu->institution }}</h4>
                                    <p class="text-violet-600 font-medium">{{ $edu->degree }}</p>
                                    <p class="text-sm text-gray-600">{{ $edu->major }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Experience Column -->
        <div class="relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center lg:text-left">Experience</h3>

            <!-- Vertical Line -->
            <div class="absolute lg:left-4 left-4 top-8 bottom-0 w-0.5 bg-indigo-200 z-0"></div>

            <!-- Timeline Items -->
            <div class="space-y-10">
                @foreach ($experience as $exp)
                <div class="relative group">
                    <!-- Dot -->
                    <div class="absolute left-4 top-2 -translate-x-1/2 w-3 h-3 z-10">
                        <div class="w-full h-full rounded-full bg-indigo-500 border-2 border-white shadow"></div>
                    </div>

                    <!-- Badge -->
                    <div class="ml-12">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white shadow text-sm text-gray-700">
                            {{ $exp->date }}
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="ml-12 mt-3">
                        <div class="bg-white p-4 rounded-xl border border-indigo-400 shadow hover:shadow-lg transition">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset('storage/'.$exp->logo) }}" alt="{{ $exp->company }}" class="w-10 h-10 object-contain rounded-full bg-gray-100 p-1">
                                <div>
                                    <h4 class="font-bold text-gray-900">{{ $exp->position }}</h4>
                                    <p class="text-indigo-600 font-medium">{{ $exp->company }}</p>
                                    <p class="text-sm text-gray-600">{{ $exp->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>

</section>
