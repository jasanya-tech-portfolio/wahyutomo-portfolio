<section class="max-w-7xl mx-auto px-4 lg:px-16 py-12 font-[Poppins]">
    {{-- Ping Bootom --}}
    <div class="flex justify-center py-2">
        <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-amber-600 font-semibold shadow-sm hover:shadow-md border-2 border-blue-100">
            <!--Ikon ping -->
            <div class="relative flex items-center justify-center w-4 h-4">
                <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-amber-400 opacity-75"></span>
                <span class="relative inline-flex w-3 h-3 rounded-full bg-amber-600"></span>
            </div>
            
            <!-- Teks -->
            Experience & Education
        </div>
    </div>

    <h1 class="text-4xl md:text-5xl text-gray-800 font-[Caveat] font-semibold text-center py-6">
        My Journey
    </h1>

    <h3 class="text-sm md:text-lg text-gray-700 font-[poppins] font-medium text-center pb-6">
        {{App\Helpers\SettingHelper::getSetting('text journey')}}
    </h3>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 relative">
        <!-- Education Column -->
        <div class="relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center py-3">Education</h3>

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
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white shadow-md text-sm text-gray-800 border border-gray-100">
                            <div class="relative flex items-center justify-center w-5 h-5">
                                <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex w-3 h-3 rounded-full bg-blue-600"></span>
                            </div>
                            {{ $edu->date_range }}
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="ml-12 mt-4">
                        <div class="group bg-white p-4 rounded-xl border-2 border-violet-400 shadow-md transform transition duration-300 hover:-translate-y-1 hover:shadow-lg max-w-[500px]">
                            <div class="flex items-start gap-4">
                                <img src="{{ asset('storage/'.$edu->logo) }}" alt="{{ $edu->institude }}" class="w-12 h-12 object-contain p-1 self-center">
                                <div>
                                    <h4 class="font-bold text-gray-900 text-[20px] group-hover:text-violet-600 transition-colors duration-300">{{ $edu->institude }}</h4>
                                    <p class="text-violet-600 font-medium pt-[6px]">{{ $edu->title }}</p>
                                    <p class="text-sm text-gray-800">{{ $edu->desc }}</p>
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
            <h3 class="text-2xl font-bold text-gray-800 mb-3 text-center py-3">Experience</h3>

            <!-- Vertical Line -->
            <div class="absolute lg:left-4 left-4 top-8 bottom-0 w-0.5 bg-indigo-200 z-0"></div>

            <!-- Timeline Items -->
            <div class="space-y-10">
                @foreach ($experience as $exp)
                <div class="relative group">
                    <!-- Dot -->
                    <div class="absolute left-4 top-2 -translate-x-1/2 w-3 h-3 z-10">
                        <div class="w-full h-full rounded-full bg-violet-500 border-2 border-white shadow"></div>
                    </div>

                    <!-- Badge -->
                    <div class="ml-12">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white shadow-md text-sm text-gray-800 border border-gray-100">
                            <div class="relative flex items-center justify-center w-5 h-5">
                                <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex w-3 h-3 rounded-full bg-blue-600"></span>
                            </div>
                            {{ $exp->date_range }}
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="ml-12 mt-4">
                        <div class="bg-white group p-4 rounded-xl border-2 border-indigo-400 shadow-md transform transition duration-300 hover:-translate-y-1 hover:shadow-lg max-w-[500px]">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('storage/'.$exp->logo) }}" alt="{{ $exp->institute }}" class="w-12 h-12 object-contain p-1 self-center">
                                <div>
                                    <h4 class="font-bold text-gray-900 text-[20px] group-hover:text-violet-600 transition-colors duration-300">{{ $exp->title }}</h4>
                                    <p class="text-violet-600 font-medium pt-[6px]">{{ $exp->institude }}</p>
                                    <p class="text-sm text-gray-800">{{ $exp->desc }}</p>
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
