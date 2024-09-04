<header>
    <nav class="border-gray-200 px-4 fixed w-full bg-primary lg:px-6 py-2.5 z-20">
        <div class="flex flex-wrap justify-between items-center mx-auto md:max-w-screen-2xl">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold text-white whitespace-nowrap">Fund4Me</span>
            </a>
            <div class="flex items-center lg:order-2">
                @if (!Auth::check())
                    <a href="#" wire:navigate class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 focus:outline-none">START A CAMPAIGN</a>
                @else
                <div class="relative inline-block text-left">
                    <button type="button" wire:click="toggleDropdown" class="flex items-center text-white bg-primary hover:bg-primary-light focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 focus:outline-none">
                        <span class="mr-2">{{ Auth::user()->name }}</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414L10 13.414l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="{{ $isDropdownOpen ? 'block' : 'hidden' }} absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <a wire:navigate href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                @endif

                <button wire:click="toggleMenu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:bg-primary focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="{{ $isMenuOpen ? 'flex' : 'hidden' }} justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{route('welcome')}}" wire:navigate class="{{ Request::is('/') ? 'text-orange-300' : 'text-white' }} block py-2 pr-4 pl-3 rounded lg:p-0">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" wire:navigate class="{{ Request::is('about') ? 'text-orange-300' : 'text-white' }} block py-2 pr-4 pl-3 rounded lg:p-0">About</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" wire:navigate class="{{ Request::is('contact') ? 'text-orange-300' : 'text-white' }} block py-2 pr-4 pl-3 lg:border-0 lg:p-0">Contact</a>
                    </li>
                    <li>
                        @if (!Auth::check())
                            <a href="{{ route('login') }}"
                               wire:navigate
                               class="{{ Request::is('login') ? 'text-orange-300' : 'text-white' }} block py-2 pr-4 pl-3 rounded lg:p-0">
                                Log in
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
