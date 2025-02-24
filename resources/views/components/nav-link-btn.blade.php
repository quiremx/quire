@props(['active' => false ])

<a 
class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-500 hover:border hover:text-gray-500' }} rounded-md  px-3 py-2 text-sm font-medium " 
aria-current="{{ request()-> is('/') ? 'page':'false' }} "
{{$attributes}}
>{{$slot}}</a>
