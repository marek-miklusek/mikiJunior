<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-gradient-to-r from-[#149414] via-[#1a1a1a] to-[#000] text-white">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            
            {{-- Introduction--}}
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1 class="text-xl text-[#9ca3af]">{{ __('messages.name') }}</h1>
                    <h1 class="w-full h-10 font-bold text-3xl sm:text-[42px] lg:text-[40px] xl:text-[42px] mb-[5rem] pt-4">
                        {{ __('messages.ilove') }}
                        <span x-data="{ texts: ['{{ __('messages.coding') }}', '{{ __('messages.learning') }}'] }" 
                            x-typewriter.1s="texts" class="text-amber-600 border-b-[1px]"></span>
                        <span class="blink-cursor"></span>
                    </h1>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="amber" class="rounded-lg">
                                {{ __('messages.myprojects') }}
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="font-normal text-md flex items-center text-[#9ca3af] mb-4">
                            {{ __('messages.social-media') }}
                            <span class="w-8 h-[1px] inline-block ml-2 bg-[#9ca3af]"></span>
                        </h6>
                        <x-social-icons />
                    </div>
                </div>
            </div>

            {{-- Hero photo --}}
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-1">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img src="{{ url('/img/me.jpeg') }}" alt="hero" class="max-w-full lg:ml-auto rounded-tl-3xl"/>
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg 
                                width="93"
                                height="93"
                                viewBox="0 0 93 93"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.5" cy="2.5" r="2.5" fill="#149414"/>
                                <circle cx="2.5" cy="24.5" r="2.5" fill="#149414"/>
                                <circle cx="2.5" cy="46.5" r="2.5" fill="#149414"/>
                                <circle cx="2.5" cy="68.5" r="2.5" fill="#149414"/>
                                <circle cx="2.5" cy="90.5" r="2.5" fill="#149414"/>
                                <circle cx="24.5" cy="2.5" r="2.5" fill="#149414"/>
                                <circle cx="24.5" cy="24.5" r="2.5" fill="#149414"/>
                                <circle cx="24.5" cy="46.5" r="2.5" fill="#149414"/>
                                <circle cx="24.5" cy="68.5" r="2.5" fill="#149414"/>
                                <circle cx="24.5" cy="90.5" r="2.5" fill="#149414"/>
                                <circle cx="46.5" cy="2.5" r="2.5" fill="#149414"/>
                                <circle cx="46.5" cy="24.5" r="2.5" fill="#149414"/>
                                <circle cx="46.5" cy="46.5" r="2.5" fill="#149414"/>
                                <circle cx="46.5" cy="68.5" r="2.5" fill="#149414"/>
                                <circle cx="46.5" cy="90.5" r="2.5" fill="#149414"/>
                                <circle cx="68.5" cy="2.5" r="2.5" fill="#149414"/>
                                <circle cx="68.5" cy="24.5" r="2.5" fill="#149414"/>
                                <circle cx="68.5" cy="46.5" r="2.5" fill="#149414"/>
                                <circle cx="68.5" cy="68.5" r="2.5" fill="#149414"/>
                                <circle cx="68.5" cy="90.5" r="2.5" fill="#149414"/>
                                <circle cx="90.5" cy="2.5" r="2.5" fill="#149414"/>
                                <circle cx="90.5" cy="24.5" r="2.5" fill="#149414"/>
                                <circle cx="90.5" cy="46.5" r="2.5" fill="#149414"/>
                                <circle cx="90.5" cy="68.5" r="2.5" fill="#149414"/>
                                <circle cx="90.5" cy="90.5" r="2.5" fill="#149414"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

















  