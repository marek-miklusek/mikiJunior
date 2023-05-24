<a href="{{ $href }}" target="{{ $target }}"
    {{ $attributes->class([
        'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition', // Default
        'border-[#000] text-[#000] hover:bg-amber-600 hover:border-amber-600 hover:text-white' => $variant === 'outline-primary',
        'bg-primary border-primary text-white hover:bg-opacity-50 hover:border-[#0a490a]' => $variant === 'primary',
        'bg-amber-600 border-amber-600 text-white hover:bg-opacity-80 ' => $variant === 'amber',
    ]) }}>
    {{ $slot }}
</a>
