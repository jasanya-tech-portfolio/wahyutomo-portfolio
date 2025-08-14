<section class="py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Title and Subtitle -->
        <div class="inline-block px-4 py-2 mb-4 bg-red-100 text-red-600 rounded-full font-semibold text-sm">
            Technical Expertise
        </div>
        <h2 class="text-4xl sm:text-5xl font-bold mb-4">Professional Skills</h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-12">
            Technologies and tools I've mastered throughout my journey
        </p>

        <!-- Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 max-w-4xl mx-auto text-left">
            @foreach($tools as $tool)
                <div class="flex items-center space-x-4">
                    <div class="w-1/3">
                        <div class="flex items-center space-x-2">
                            <!-- Icon and Name -->
                            <i class="fa-brands {{ $tool->icon }} text-xl text-amber-600"></i>
                            <span class="text-lg font-medium">{{ $tool->name }}</span>
                        </div>
                    </div>
                    <div class="w-2/3">
                        <!-- Progress Bar -->
                        <div class="flex items-center space-x-2">
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div id="{{ strtolower(str_replace([' ', '.'], ['-', ''], $tool->name)) }}-progress" 
                                    class="progress-bar bg-{{ $tool->color }}-600 h-2.5 rounded-full" 
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
        // Ganti dengan data skills yang sebenarnya jika tersedia dari database
        const skillsData = [
            { id: "html-progress", value: 95 },
            { id: "tailwind-progress", value: 90 },
            { id: "laravel-progress", value: 90 },
            { id: "php-progress", value: 90 },
            { id: "filament-progress", value: 90 },
            { id: "bootstrap-progress", value: 90 },
            { id: "javascript-progress", value: 85 },
            { id: "jquery-progress", value: 80 },
            { id: "node-js-progress", value: 80 }
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