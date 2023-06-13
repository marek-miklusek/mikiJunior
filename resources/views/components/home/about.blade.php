<section id="about" class="bg-gradient-to-r from-[#000] via-[#1a1a1a] to-[#149414] text-white pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">

            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/love1.jpg') }}"
                                alt=""
                                class="rounded-2xl w-full"/>
                        </div>
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/love2.jpg') }}"
                                alt=""
                                class="rounded-2xl w-full"/>
                        </div>
                    </div>

                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img
                                src="{{ url('/img/love3.jpeg') }}"
                                alt=""
                                class="rounded-2xl w-full"/>
                            <x-about-dots />
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="text-lg text-[#9ca3af] mb-2 block">
                        <blockquote class="text-sm font-semibold italic py-2 px-3 border-l-2">
                            "{{ __('messages.about-quote') }}"
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl text-amber-600 mb-8">
                        {{ __('messages.about-me') }}
                    </h2>
                    <p class="text-base mb-8">
                        {{ __('messages.about-text-first') }}<span class="text-amber-600 font-bold">{{ __('messages.fellinlove') }}</span>
                        {{ __('messages.about-text-second') }}
                    </p>
                    <p class="text-base mb-8">
                        {{ __('messages.about-text-third') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

  
  