<x-slider>

    <div class=" text-primary-foreground min-h-screen p-2 ">
      
        <div class="bg-white p-6 rounded-xl mb-8 shadow-lg border-l-4  border-accent">
            <h2 class="text-2xl font-semibold mb-4 text-accent">Resumen de tu cuenta</h2>
            <div class="flex justify-center sm:justify-end items-center gap-x-4 mb-3 sm:mb-6">
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Ingresos</span>
                </div>
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-cyan-500 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Gastos</span>
                </div>
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-gray-300 rounded-sm me-2 dark:bg-neutral-600"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Otros</span>
                </div>
            </div>
            <div id="hs-multiple-line-charts"></div>
        </div>
        <div class="bg-white p-6 rounded-xl mb-8 shadow-lg border-l-4 border-accent">
          <h2 class="text-2xl font-semibold mb-4">Transacciones recientes</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-lg transition border-l-4 border-green-500">
              <p class="text-sm text-muted-foreground">12 Enero, 2025</p>
              <p class="text-lg font-semibold">Recibido</p>
              <p class="text-lg font-bold text-green-500">$500.00</p>
            </div>
            <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-lg transition border-l-4 border-red-500">
              <p class="text-sm text-muted-foreground">20 Enero, 2025</p>
              <p class="text-lg font-semibold">Retirado</p>
              <p class="text-lg font-bold text-red-500">$150.00</p>
            </div>
          </div>
        </div>
      
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <a href="/transferencias">
            <div class="bg-white text-gray-900 p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-105 border-2 border-yellow-300/50 hover:bg-quire hover:border-gray-700">
                <img src="{{ Vite::asset('resources/img/transferencia-de-dinero.png') }}" alt="payments-icon" class="w-12 h-12 mx-auto mb-4" />
                <p class="text-lg text-center font-semibold text-accent">Transferencias</p>
              </div>
          </a>
            <a href="/pagosyservicios">
                <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-105 border-2 border-yellow-300/50 hover:bg-quire hover:border-gray-700">
                    <img src="{{ Vite::asset('resources/img/pagoss.png') }}" alt="payments-icon" class="w-12 h-12 mx-auto mb-4" />
                    <p class="text-lg text-center font-semibold text-accent">Pagos y servicios</p>
                </div>
            </a>
            <a href="/historial">
                <div class="bg-white p-4  text-gray-900 rounded-xl shadow-md hover:shadow-lg transition transform hover:scale-105 border-2 border-yellow-300/50 hover:bg-quire hover:border-gray-700">
                    <img src="{{ Vite::asset('resources/img/ejecutivo.png') }}" alt="history-icon" class="w-12 h-12 mx-auto mb-4" />
                    <p class="text-lg text-center font-semibold text-accent">Resumen de Transacciones</p>
                </div>
            </a>
        </div>
      </div>

</x-slider>
