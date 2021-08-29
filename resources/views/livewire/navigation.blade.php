<header class="bg-Emerald-900 sticky top-0"x-data="dropdown()">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a
            :class="{'bg-opacity-100 text-Emerald-700' : open}"
            x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="text-sm hidden md:block">Categories</span>
        </a>
        <a href="/" class="mx-4">

            <x-mark-logo class="block h-1"/>

        </a>

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <!--dropdown menu -->
        <div class="mx-6 relative hidden md:block">
            @auth
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">

                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>

            @endauth
        </div>
        <!--dropdown menu end-->

        <!-- dropdown cart-->
        <div class="hidden md:block">
            @livewire('dropdown-cart')
        </div>
        <!-- dropdown cart end-->
    </div>

    <nav id="navigation-menu"
    :class="{'block': open, 'hidden': !open}"
    x-show="open"
    class="bg-Emerald-900 bg-opacity-25 w-full absolute hidden">
    {{-- Menu desktop --}}
        <div class="container h-full hidden md:block">
            <div
            x-on:click.away="close()"
            class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach($categories as $category)
                        <li class="navigation-link text-Emerald-700 hover:bg-Emerald-500 hover:text-white">
                            <a href="" class="py-4 px-8 text-sm flex items-center">

                                <span class="flex justify-center w-9">
                                    {!! $category->icon !!}
                                </span>

                                {{ $category->name }}
                            </a>
                            <div class="navigation-submenu bg-white absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category"/>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="col-span-3 bg-white shadow-lg">
                    <x-navigation-subcategories :category="$categories->first()"/>
                </div>
            </div>
        </div>

        {{-- menu mobile --}}
        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-Emerald-900 bg-opacity-25 py-3 mb-2">
                @livewire('search')
            </div>

            <ul>
                @foreach($categories  as $category)
                <li class="text-Emerald-700 hover:bg-Emerald-500 hover:text-white">
                    <a href="" class="py-4 px-8 text-sm flex items-center">

                        <span class="flex justify-center w-9">
                            {!! $category->icon !!}
                        </span>

                        {{ $category->name }}
                    </a>
                </li>
                @endforeach
            </ul>

            <p class="text-Emerald-700 px-10 my-4 bg-Emerald-900 bg-opacity-25 py-3">Users</p>
            @auth
                <a href="{{ route('profile.show') }}" class="py-4 px-8 text-sm flex items-center text-Emerald-700 hover:bg-Emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-alt"></i>
                    </span>

                    Profile
                </a>
                <a href=""
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit()"
                class="py-4 px-8 text-sm flex items-center text-Emerald-700 hover:bg-Emerald-500 hover:text-white">


                    <span class="flex justify-center w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>

                    Log out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="py-4 px-8 text-sm flex items-center text-Emerald-700 hover:bg-Emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>

                    Login
                </a>
                <a href="{{ route('register') }}" class="py-4 px-8 text-sm flex items-center text-Emerald-700 hover:bg-Emerald-500 hover:text-white">

                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-plus"></i>
                    </span>

                    Register
                </a>
            @endauth
        </div>
    </nav>
</header>
