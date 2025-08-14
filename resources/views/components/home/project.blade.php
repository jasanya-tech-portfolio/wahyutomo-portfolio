<div id="project" class="bg-white-100">

    {{-- Ping Bottom --}}
    <div class="flex justify-center pt-10 font-[Poppins]">
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

    <h3 class="text-sm md:text-lg text-gray-600 px-2 font-medium text-center">
        {{App\Helpers\SettingHelper::getSetting('text project')}}
    </h3>

    {{-- Card Project --}}
    <div class="px-6 lg:px-24 py-8">
        <div class="overflow-x-auto hide-scrollbar">
            <div class="flex space-x-6 w-max mx-auto">
                @foreach ( $projects as $project )
                    <a href="{{ route('project.show', $project->id) }}">
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg overflow-hidden w-72 lg:w-80 flex-shrink-0 border-1 border-emerald-700 hover:border-emerald-800 font-[poppins]">
                            <div class="overflow-hidden rounded-t-lg">
                                <img src="{{ $project->thumbnail }}"
                                    alt="Thumbnail"
                                    class="w-full h-40 md:h-48 object-cover transform transition-transform duration-300 hover:scale-110">
                            </div>
                            <div class="p-4">
                                @foreach($project->categories as $category)
                                    <span class="text-sm text-blue-500 font-medium">{{ $category->name }}</span>
                                @endforeach
                                <h2 class="py-2 text-lg font-semibold mt-1">{{ $project->name }}</h2>

                                <h2 class="text-md text-gray-700 font-medium mt-1">{{ $project->client->name }}</h2>

                                <p class="text-gray-700 text-sm mt-2 line-clamp-3">
                                    {{strip_tags($project->body)}}
                                </p>

                                <p class="py-4 text-gray-500">
                                    {{  date('F d, Y', strtotime($project->end_project)) }}
                                </p>

                                <a href="{{ $project->url }}" class="inline-block mt-2 px-4 py-2 bg-sky-800 text-white text-sm rounded hover:bg-sky-900 transition">
                                    View Project
                                </a>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


</div>

{{-- Style Buat Card --}}
<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>