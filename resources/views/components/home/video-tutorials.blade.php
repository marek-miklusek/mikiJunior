<section id="tutorials" class="pt-24 pb-16 bg-gradient-to-r from-[#000] via-[#000] to-[#149414]">
    <div class="container">

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl text-amber-600 mb-4">
                        {{ __('messages.coding-heading') }}
                    </h2>
                    <p class="text-base text-white">
                        "{{ __('messages.tutorials-quote') }}" 
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            @foreach($video_tutorials as $video)
                <x-video-tutorial-items 
                    :video-id="$video['video_id']" :title="$video['title']"
                    :description="$video['description']" />
            @endforeach
        </div>

    </div>
</section>
  