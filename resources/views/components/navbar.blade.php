<nav id="navbar" class="bg-white/75 p-2 fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center justify-between px-4 lg:px-10">
        
        {{-- Logo + Hamburger --}}
        <div class="flex items-center space-x-4">
            {{-- Hamburger Button (mobile) --}}
            <button id="menu-toggle" class="block lg:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            {{-- Logo --}}
            <a href="/" class="flex items-center">
                <img src="{{ App\Helpers\BannerHelper::getBannerImageUrl('logo') }}" 
                    alt="Logo" class="h-10 w-auto">
            </a>
        </div>

        {{-- Navigation Links --}}
        <ul id="menu"
            class="px-10 space-x-8 text-gray-900 font-medium hidden lg:flex lg:justify-end lg:items-center">
            <li><a href="/" class="text-lg hover:text-amber-600 block py-2">Home</a></li>
            <li><a href="#project" class="text-lg hover:text-amber-600 block py-2">Project</a></li>
            <li><a href="#" class="text-lg hover:text-amber-600 block py-2">Blog</a></li>
            <li><a href="#contact" class="text-lg hover:text-amber-600 block py-2">Contact</a></li>
        </ul>
    </div>
</nav>
