@props(['active' => false ])

<a class="{{ $active ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-3 py-2 px-2.5  text-sm text-gray-700 rounded-full " 
aria-current="{{ request()-> is('/') ? 'page':'false' }} " {{ $attributes }}
>
  {{ $slot }}
</a>



