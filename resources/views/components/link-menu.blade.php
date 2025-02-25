@props(['active' => false])

<a 
    {{ $attributes->merge([
        'class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-500 hover:border hover:text-gray-500') . 
                   ' flex flex-col items-center justify-center text-sm font-medium p-2 rounded-md text-center space-y-1',
        'aria-current' => request()->is('/') ? 'page' : 'false'
    ]) }}
>
    <div class="flex flex-col items-center space-y-1">
        <span class="text-xl"> {{-- Aquí va el ícono --}}
            {{ $icon ?? '' }}
        </span>
        <span class="text-xs"> {{-- Aquí va el texto --}}
            {{ $slot }}
        </span>
    </div>
</a>
