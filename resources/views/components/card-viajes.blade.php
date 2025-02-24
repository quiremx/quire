<a href="detalles/viaje" class="block">
<div class="bg-white rounded-lg p-3 shadow-sm ">
  <ul role="list" class="divide-y divide-gray-100">
    <li 
      class="flex justify-between gap-x-6 py-5 cursor-pointer" 
      onclick="toggleModal(true)">
      <div class="flex min-w-0 gap-x-4 ml-5">
        <div class="min-w-0 flex-auto">
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
            </svg>
            <p class="text-sm/6 font-semibold text-gray-900 mb-2 mx-2">15 junio, 10:00 a.m.</p>
          </div>
          <div class="flex flex-col border-l-1 border-green-500 pl-4 relative space-y-2">
            <div class="flex items-center justify-between">
              <div class="absolute -left-2 w-4 h-4 bg-green-500 rounded-full"></div>
             <div>
                <x-text-historial>Los Ganaderos</x-text-historial>
                <p class="text-xs text-gray-500">Av. Verde / Calle 12</p>
             </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="absolute -left-2 w-4 h-4 bg-red-500 rounded-full"></div>
              <div>
                <x-text-historial>Los Ganaderos</x-text-historial>
                <p class="text-xs text-gray-500">Av. Verde / Calle 12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end justify-between mr-5">
        <p class="text-sm/6 text-gray-900 font-bold">MX$ 20.00</p>
        <p class="mt-1 text-xs/5 text-green-500">Completado</p>
      </div>
    </li>
  </ul>
</div>
</a>