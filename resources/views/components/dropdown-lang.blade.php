<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">

    <div @click="open = ! open">
        <button class="hover:bg-[#149414] hover:text-white flex items-center rounded my-2 lg:py-2 lg:px-4 lg:ml-6">
            <span class="fi fi-us {{ session()->get('locale') == 'en' ? 'block' : 'hidden' }}"></span>
            <span class="fi fi-sk {{ session()->get('locale') == 'sk' ? 'block' : 'hidden' }}"></span>
            <div class="ml-1">
                <svg class="fill-white h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"/>
                </svg>
            </div>
        </button>
    </div>

    <div x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-50 mt-2 w-32 rounded-md shadow-lg"
        style="display: none;"
        @click="open = false">
        <div class="flex flex-col bg-[#000] px-2 py-1 rounded text-white">
            <a href="{{ route('change-lang', 'en') }}" class="hover:opacity-80"><span class="fi fi-us"></span> english</a>
            <a href="{{ route('change-lang', 'sk') }}" class="hover:opacity-80"><span class="fi fi-sk"></span> slovak</a>
        </div>
    </div>

</div>


