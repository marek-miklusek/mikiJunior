<section id="portfolio" class="pt-20 lg:pt-[90px] pb-12 lg:pb-[90px] bg-gradient-to-r from-[#000] via-[#000] to-[#149414] ">
    <div class="container">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-amber-600 mb-4">
                        {{ __('messages.myprojects') }}
                    </h2>
                    <p class="text-lg text-white">
                        "{{ __('messages.myprojects-quote') }}" 
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-4 -mx-4">
            @foreach ($items as $item)
                <x-portfolio-items :title="$item['title']" :image="$item['image']" :github="$item['github']" />
             @endforeach
        </div>

        <div class="text-center">
            <x-button-link href="https://github.com/marek-miklusek" variant="amber" target="_blank" class="rounded-lg animate-bounce">
                {{ __('messages.view-all') }}
            </x-button-link>
        </div>
        
    </div>
</section>

