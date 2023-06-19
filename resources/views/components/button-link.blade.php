<a href="{{ $href }}" target="_blank"
    {{ $attributes->class([
        'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition', // Default
        'border-[#000] text-[#000] hover:bg-amber-600 hover:border-amber-600 hover:text-white' => $variant === 'outline-primary',
        'bg-primary border-primary text-white hover:bg-opacity-50 hover:border-[#0a490a]' => $variant === 'primary',
        'bg-inherit border-amber-600 text-amber-600 font-semibold hover:bg-amber-600 hover:text-white' => $variant === 'amber',
        'bg-amber-600 border-amber-600 text-white font-semibold hover:bg-inherit hover:text-white' => $variant === 'amber-full',
    ]) }}>
    {{ $slot }}
</a>
