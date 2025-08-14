<section class="py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center">
        {{-- Ping Bottom --}}
        <div class="flex justify-center pt-10">
            <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-red-600 font-semibold shadow-sm hover:shadow-md max-w-[230px] border-2 border-red-100">
                <!--Ikon ping -->
                <div class="relative flex items-center justify-center w-4 h-4">
                    <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex w-3 h-3 rounded-full bg-red-600"></span>
                </div>
                
                <!-- Teks -->
                Technical Expertise
            </div>
        </div>

        <h1 class="text-4xl md:text-5xl text-gray-800 font-[Caveat] font-semibold text-center py-6">
            Professional Skills
        </h1>

        <h3 class="text-sm md:text-lg text-gray-600 px-2 font-medium text-center">
            {{App\Helpers\SettingHelper::getSetting('text progres')}}
        </h3>

        <!-- Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 max-w-4xl mx-auto text-left pt-8">
            @foreach($tools as $tool)
                <div class="flex items-center space-x-4">
                    <div class="w-1/3">
                        <div class="flex items-center space-x-2">
                            <!-- Icon and Name -->
                            <img src="{{ asset('storage/' . $tool->logo) }}" alt="{{ $tool->name }} Logo" class="w-7 h-7 object-contain rounded" />
                            <span class="text-lg font-medium">{{ $tool->name }}</span>
                        </div>
                    </div>
                    <div class="w-2/3">
                        <!-- Progress Bar -->
                        <div class="flex items-center space-x-2">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div id="{{ strtolower(str_replace([' ', '.'], ['-', ''], $tool->name)) }}-progress" 
                                    class="progress-bar bg-amber-600 h-2.5 rounded-full" 
                                    style="width: 0%">
                                </div>
                            </div>
                            <!-- Percentage (Placeholder) -->
                            <span class="text-sm font-semibold text-gray-500">
                                @if($tool->percentage !== null)
                                    {{ $tool->percentage }}%
                                @else
                                    -
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JavaScript for animation (unchanged for now, replace with dynamic data later) -->
<script>
   document.addEventListener("DOMContentLoaded", () => {
        const skillsData = [
            @foreach($tools as $tool)
                @if($tool->percentage !== null)
                    { id: "{{ strtolower(str_replace([' ', '.'], ['-', ''], $tool->name)) }}-progress", value: {{ $tool->percentage }} },
                @endif
            @endforeach
        ];

        skillsData.forEach(skill => {
            const element = document.getElementById(skill.id);
            if (element) {
                setTimeout(() => {
                    element.style.width = skill.value + "%";
                }, 500); 
            }
        });
    });
</script>
<style>
    .progress-bar {
    transition: width 1s ease-in-out;
}
</style>