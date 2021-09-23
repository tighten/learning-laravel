<nav x-data="{ open: false }" class="p-2 h-95 md:h-full">
    <!-- Hamburger -->
    <div class="flex items-center justify-end md:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center text-light hover:text-light focus:outline-none transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'hidden': ! open}" class="md:flex h-full hidden flex flex-col">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('aliases.index')" :active="request()->routeIs('aliases.index')">
                {{ __('Aliases') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="mt-auto">
            <div class="pt-4 pb-1 border-t border-darkAccent">
                <div class="flex items-center">
                    <div>
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('img/carmen_logo_pink.png') }}" alt="Logo" class="w-14 h-14" />
                        </a>
                    </div>
                    <div class="px-2">
                        <div class="font-medium text-base text-darkAccent">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-darkAccent">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
