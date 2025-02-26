
@props([
    'url_card' => '#',
    'image' => '',
    'cardNumber' => '**** **** **** 0000',
    'balance' => '$0.00',
    'url_edit' => '#',
    'url_delete' => '#'
])

<a href="{{ $url_card }}" class="block">
    <div class="bg-card mt-3 dark:bg-black text-card-foreground p-2 lg:p-4 dark:text-white lg:mr-5 lg:ml-5 rounded-lg shadow-md border flex items-center">
        <div class="flex items-center space-x-4">
            <img src="{{ $image }}" alt="Tarjeta" class="w-24 h-16 object-cover rounded-md" />
            <div class="flex flex-col">
                <h2 class="text-lg font-semibold text-gray-600">{{ $cardNumber }}</h2>
                <p class="text-sm text-muted-foreground font-semibold">{{ $balance }}</p>
            </div>
        </div>
        <div x-data="{ open: false }" class="relative w-6 h-6 ml-auto cursor-pointer mr-2">
            <button @click="open = !open" class="focus:outline-none">
                <svg class="size-6 text-gray-600 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="1"/>
                    <circle cx="12" cy="5" r="1"/>
                    <circle cx="12" cy="19" r="1"/>
                </svg>
            </button>
            <div x-show="open" @click.away="open = false"
                x-transition
                class="absolute right-0 mt-2 min-w-40 bg-white shadow-md rounded-lg dark:bg-neutral-800"
                style="display: none;">
                <a href="{{ $url_edit }}" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700">Editar</a>
                <a href="{{ $url_delete }}" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-neutral-700">Eliminar</a>
            </div>
        </div>
    </div>
</a>
