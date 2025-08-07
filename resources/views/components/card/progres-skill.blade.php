{{-- Ping Bottom --}}
<div class="flex justify-center pt-10">
    <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-red-600 font-semibold shadow-sm hover:shadow-md max-w-[250px] border-2 border-red-100">
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

<h3 class="text-sm md:text-lg text-gray-500 px-2 font-[poppins] font-medium text-center">
    {{App\Helpers\SettingHelper::getSetting('text progres')}}
</h3>

{{-- <div class="min-h-screen bg-white py-10 px-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
        @foreach ($skills as $skill)
            <div class="flex items-center space-x-4">
                <img src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }} icon" class="w-6 h-6">
                <div class="w-full">
                    <div class="flex justify-between">
                        <span class="text-sm font-medium text-gray-700">{{ $skill['name'] }}</span>
                        <span class="text-sm font-medium text-red-500 counter" data-target="{{ $skill['percentage'] }}">0%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1">
                        <div class="bg-gradient-to-r from-{{ $skill['color'] }}-400 to-{{ $skill['color'] }}-600 h-2.5 rounded-full" style="width: {{ $skill['percentage'] }}%"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Animasi --}}
{{-- <script>
    window.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = parseInt(counter.dataset.target);
            let count = 0;

            const updateCount = () => {
                const speed = 10; // kecepatan animasi
                const increment = Math.ceil(target / 40); // angka lompat

                if (count < target) {
                    count += increment;
                    counter.innerText = (count > target ? target : count) + '%';
                    setTimeout(updateCount, speed);
                } else {
                    counter.innerText = target + '%';
                }
            };

            updateCount();
        });
    });

    document.querySelectorAll('.progress-bar').forEach(bar => {
        const width = bar.dataset.width;
        bar.style.width = width + '%';
    });
</script> --}}



