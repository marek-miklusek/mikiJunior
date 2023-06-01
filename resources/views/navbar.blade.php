<header x-data="{ navbarOpen: false }" class="fixed left-0 top-0 z-50 w-full flex items-center bg-gradient-to-r from-[#000] via-[#000] to-[#149414] h-24">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">

            <div class="pr-4 w-60 max-w-full">
                <a href="#" class="w-full flex items-center py-2">
                    <img src="{{ url('/img/logo.jpg') }}" alt="logo" class="w-[48px] lg:w-[64px] rounded mr-2 animate-pulse"/>
                    <h2 class="text-lg xl:text-xl font-bold pl-4 text-[#9ca3af]">
                        @mikiJunior
                    </h2>
                </a>
            </div>

            <div class="flex px-4 justify-end items-center w-full">
                <div>
                  
                    <x-navbar-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen && 'navbarTogglerActive'">
                    </x-navbar-hamburger>

                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-0 top-full py-4 px-6 z-50 w-full bg-gradient-to-r from-[#000] via-[#1a1a1a] to-[#149414] 
                            lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static rounded-3xl">
                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigation_items as $item)
                                <x-navbar-items :href="$item['href']">{{ $item['label'] }}</x-navbar-items>
                            @endforeach
                            <x-dropdown-lang />
                            <div class="ml-0 lg:ml-10 xl:ml-16"></div>
                        </ul>
                      
                    </nav>

                </div>
            </div>

        </div>
    </div>

</header>









