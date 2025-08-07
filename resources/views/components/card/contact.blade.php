<div class="lg:grid lg:grid-cols-2 lg:gap-12 items-start px-20 py-10 max-w-7xl mx-auto">
    <!-- Left Column: Info -->
    <div class="lg:sticky top-20">
        <div class="mb-4 lg:text-left text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 backdrop-blur shadow-lg mb-4">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-sm font-medium bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                    Let's Work Together
                </span>
            </div>
            <h2 class="lg:text-3xl text-2xl font-bold text-gray-900 mb-2">Start Your Project</h2>
            <p class="text-gray-600 max-w-md mx-auto lg:mx-0">
                Tell me about your project and I'll help bring your vision to life with the best solutions and practices
            </p>
        </div>

        <!-- Benefits List -->
        <div class="space-y-4">
            @php
                $benefits = [
                    ['title' => 'Professional Service', 'desc' => 'Get high-quality work delivered on time', 'icon' => 'check'],
                    ['title' => 'Quick Response', 'desc' => 'Get response within 24 hours', 'icon' => 'clock'],
                    ['title' => 'Secure Process', 'desc' => 'Your data and project details are fully protected', 'icon' => 'shield'],
                    ['title' => 'Clear Communication', 'desc' => 'Regular updates and open discussion throughout the project', 'icon' => 'chat'],
                    ['title' => 'Fast Delivery', 'desc' => 'Efficient workflow to meet your deadlines', 'icon' => 'lightning'],
                    ['title' => 'Dedicated Support', 'desc' => 'Post-project support and maintenance available', 'icon' => 'book-open'],
                ];
            @endphp

            @foreach($benefits as $item)
            <div class="flex items-start gap-3">
                <div class="p-2 bg-emerald-50 rounded-lg">
                    <x-icons.{{ $item['icon'] }} class="w-4 h-4 text-emerald-600" />
                </div>
                <div>
                    <h3 class="font-medium text-gray-900">{{ $item['title'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Right Column: Contact Form -->
    <div class="mt-8">
        <div class="bg-white rounded-xl shadow-lg p-6 border border-emerald-500 mx-auto">
            {{-- <form method="POST" action="{{ route('hire.submit') }}" enctype="multipart/form-data" class="space-y-4"> --}}
                @csrf

                <!-- Service -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Select Service</label>
                    <select name="service_id" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                        <option value="">Choose a service...</option>
                        <option value="1">Landing Page</option>
                        <!-- Tambah opsi sesuai kebutuhan -->
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="tel" name="phone" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Budget</label>
                        <input type="text" name="budget" placeholder="e.g. 1-2 million" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Project Description</label>
                    <textarea name="project_description" rows="3" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500" placeholder="Tell me about your project..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Deadline</label>
                    <input type="date" name="deadline" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:ring-emerald-500 focus:border-emerald-500 h-9">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Reference File (Optional)</label>
                    <input type="file" name="reference_file" class="mt-1 block w-full text-sm text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-full file:border-0 file:text-xs file:font-medium file:bg-emerald-50 file:text-emerald-600 hover:file:bg-emerald-100">
                    <p class="mt-0.5 text-xs text-gray-500">Max. 10MB</p>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center items-center gap-2 py-2 px-4 rounded-lg bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-sm font-medium shadow-lg hover:shadow-xl transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        <span>Send Request</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>