<nav id="navbar" class="bg-white p-2 fixed top-0 left-0 right-0 z-50">
    {{-- Logo --}}
    <div class="flex justify-end items-right px-4">
        {{-- Hamburger Button --}}
        <button
            id="menu-toggle"
            class="block lg:hidden focus:outline-none"
        >
            <svg
                class="w-6 h-6 text-gray-800"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    {{-- Navigation Links --}}
    <ul
        id="menu"
        class="px-10 space-x-6 text-gray-900 font-medium hidden lg:flex lg:justify-end lg:items-center"
    >
        <li><a href="#" class="text-lg hover:text-amber-600 block py-2">Home</a></li>
        <li><a href="#" class="text-lg hover:text-amber-600 block py-2">Works</a></li>
        <li><a href="#" class="text-lg hover:text-amber-600 block py-2">Blog</a></li>
        <li><a href="#" class="text-lg hover:text-amber-600 block py-2">Contact</a></li>
    </ul>
</nav>
