<div class="relative mb-12 w-80">

    <a href="{{ $github }}" target="_blank">
        <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
            <img src="{{ $image }}" alt="portfolio image" class="object-contain"/>
        </div>
    </a>

    <div class="text-center bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]">
        <h3 class="font-bold text-lg text-white dark:text-gray-300 mb-4">
            {{ $title }}
        </h3>
        <div class="text-[#9ca3af] mb-4">{{ $description }}</div>
        <x-button-link :href="$github" variant="primary">{{ __('messages.view-details') }}</x-button-link>
    </div>

</div>
