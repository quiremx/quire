<x-slider title="Cuenta y Saldo">

    <div class=" text-primary-foreground min-h-screen lg:p-4  overflow-y-hidden ">
        <header class="relative  flex justify-end items-center hidden md:flex "  >
            <button type="button" class="py-2 px-4 mr-5 lg:mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-quire text-gray-800 hover:bg-yellow-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-900 dark:hover:bg-white dark:focus:bg-quire">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
                </svg>
                Agregar saldo
            </button>
        </header>
        {{-- BUTTON SOLO EN MOVIL --}}
        <div class="grid grid-cols-1 mb-2 sm:mt-20 sm:hidden">
            <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-quire text-gray-800 hover:bg-yellow-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-900 dark:hover:bg-white dark:focus:bg-quire">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
                </svg>
                Agregar saldo
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 lg:p-5 w-full md:mt-5 lg:mt-0">
            <div class="w-lg h-64 mr-auto bg-red-100 rounded-lg relative text-white shadow-lg ">
                <img class="relative object-cover w-full h-full rounded-xl" src="https://i.imgur.com/Zi6v09P.png">
                <div class="w-full px-8 absolute top-8">
                    <div class="flex justify-between">
                        <div class="">
                            <p class="font-light">
                                Nombre del titular
                            </h1>
                            <p class="font-medium tracking-widest">
                               Jonas Abarca Ponce
                            </p>
                        </div>
                        <img class="w-14 h-14" src="https://i.imgur.com/bbPHJVe.png"/>
                    </div>
                    <div class="pt-1">
                        <p class="font-light">
                            Número de tarjeta
                        </h1>
                        <p class="font-medium tracking-more-wider">
                            4642  3489  9867  7632
                        </p>
                    </div>
                    <div class="pt-6 pr-6">
                        <div class="flex justify-between">
                            <div class="">
                                <p class="font-light text-xs">
                                    Fecha de vencimiento
                                </h1>
                                <p class="font-medium tracking-wider text-sm">
                                    11/15
                                </p>
                            </div>
                            <div class="">
                                <p class="font-light text-xs">
                                    CVV
                                </h1>
                                <p class="font-bold tracking-more-wider text-sm">
                                    ···
                                </p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="bg-white  text-gray-900 rounded-lg shadow-lg border w-full">
                <header class="p-4 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">Información de tu cuenta</h2>
                </header>
                <div class="p-4 space-y-2">
                    <p class="font-semibold text-gray-700">Nombre: 
                        <span class="text-gray-600">Jonas Abarca Ponce</span>
                    </p>
                    <p class="font-semibold text-gray-700">Número de cuenta: 
                        <span class="text-gray-600 tracking-wider">4642 3489 9867 7632

                        </span>
                    </p>
                    <p class="font-semibold text-gray-700">Saldo disponible: 
                        <span class="text-green-500 font-bold">$5000</span>
                    </p>
                </div>
                <div class="border-t border-gray-200 rounded-b-xl py-3 px-4">
                    <button class="w-full bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Actualizar tarjeta
                    </button>
                </div>
            </div>
        </div>  
        
    <div class="mt-2 lg:mb-5 lg:pr-5 lg:pl-5">
            <h2 class="text-xl font-semibold text-gray-700">Mis otras tarjetas</h2>
    </div>
    <x-card-tarjetas
    :url_card="'#'"
    :image="Vite::asset('resources/img/tarjeta.png')" 
    :cardNumber="'**** **** **** 4560'" 
    :balance="'$23 000.00'"
    :url_edit="'/editar/tarjeta/4560'"
    :url_delete="'/eliminar/tarjeta/4560'"
/>
<x-card-tarjetas
    :url_card="'#'"
    :image="Vite::asset('resources/img/tarjeta.png')" 
    :cardNumber="'**** **** **** 4560'" 
    :balance="'$23 000.00'"
    :url_edit="'/editar/tarjeta/4560'"
    :url_delete="'/eliminar/tarjeta/4560'"
/>


</x-slider>