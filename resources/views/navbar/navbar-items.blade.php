<li>
    <a href="{{ $href }}" class="text-sm font-medium text-white py-2 flex lg:inline-flex lg:ml-6 xl:ml-12
        {{-- Hover underline --}}
        relative
        transition-all
        duration-500
        before:content-['']
        before:absolute
        before:-bottom-0
        before:left-0
        before:w-0
        before:h-[3px]
        before:rounded
        before:opacity-0
        before:transition-all
        before:duration-500
        before:bg-gradient-to-r
        before:from-[#000]
        before:to-[#2ce22c]
        hover:before:w-full
        hover:before:opacity-100">
        {{ $slot }}
    </a>
</li>