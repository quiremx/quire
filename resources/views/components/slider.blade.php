<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/logo.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 min-h-screen overflow-auto">
      <x-menu-movil></x-menu-movil>
      <div id="hs-sidebar-footer" class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64
      hs-overlay-open:translate-x-0
      -translate-x-full transition-all duration-300 transform
      h-full
      fixed top-0 start-0 bottom-0 z-[60]
      bg-white border-e border-gray-200" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full ">
        <header class="p-4 flex mt-5 items-center gap-x-2">
            <img class="size-8" src="{{ Vite::asset('resources/assets/logo.png') }}" alt="quirepay">
            <span class="font-bold text-2xl ">Quire Pay</span>
          <div class="lg:hidden -me-2">
            <button type="button" class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" data-hs-overlay="#hs-sidebar-footer">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
              <span class="sr-only">Close</span>
            </button>
          </div>
        </header>
        <nav class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
          <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1 mt-2">
              <li>
                <x-nav-menu href="/" :active="request()-> is ('/')" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3"><path d="M18.6 22H5.4A2.4 2.4 0 0 1 3 19.588V8.332c0-.382.18-.734.48-.965l7.78-5.126a1.195 1.195 0 0 1 1.44 0l7.82 5.126c.3.231.48.583.48.965v11.256A2.4 2.4 0 0 1 18.6 22Z"/><path d="M9.8 12h4.4c.44 0 .8.36.8.8V22H9v-9.2c0-.44.36-.8.8-.8Z"/></g></svg>
                  Dashboard
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/cuenta" :active="request()->is ('cuenta')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M5 5h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3m0 1a2 2 0 0 0-2 2v1h17V8a2 2 0 0 0-2-2zM3 17a2 2 0 0 0 2 2h13a2 2 0 0 0 2-2v-5H3zm2-1h4v1H5zm6 0h3v1h-3zm-8-6v1h17v-1z"/></svg>                    Cuenta virtual
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/transferencias" :active="request()->is ('transferencias')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="#000" d="M12.146 3.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L14.293 7H4.5a.5.5 0 0 1 0-1h9.793l-2.147-2.146a.5.5 0 0 1 0-.708m-4.292 7a.5.5 0 0 1 0 .708L5.707 13H15.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0"/></svg>
                    Transferencias
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/viajes" :active="request()->is ('viajes')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M5 9.942q0-3.06 2.105-5Q9.21 3 11.98 3q3.579 0 5.376 2.523t1.605 5.927l2.034-2.111q.14-.141.345-.141q.203 0 .343.14t.141.335t-.14.335l-2.639 2.734q-.242.242-.584.242t-.585-.242l-2.638-2.734q-.141-.14-.141-.335t.14-.334q.14-.141.345-.141t.344.14l2.035 2.112q.25-3.417-1.478-5.434Q14.756 4 11.98 4Q9.456 4 7.728 5.752T6 10.006q0 2.036 1.33 4.261t4.19 4.968q.172.173.432.182t.433-.163q.5-.489.963-.952t.754-.773q-.183-.256-.296-.55t-.114-.633q0-.838.581-1.419t1.42-.58t1.409.58t.571 1.42q0 .837-.571 1.409q-.571.571-1.41.571q-.219 0-.42-.035q-.2-.034-.395-.123q-.412.437-.86.89q-.45.452-.936.914q-.237.217-.532.323t-.588.106t-.587-.106t-.513-.323q-3.02-2.875-4.44-5.313T5 9.942"/></svg>
                  Viajes
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/pagosyservicios" :active="request()-> is ('pagosyservicios')" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M11.485 18.616h.98v-1.174q1.077-.09 2.064-.773q.987-.682.987-2.119q0-1.05-.639-1.79t-2.439-1.39q-1.653-.578-2.113-.991T9.865 9.2t.598-1.275t1.587-.51q.762 0 1.27.35t.822.885l.87-.342Q14.66 7.587 13.98 7.1t-1.464-.542V5.385h-.981v1.173q-1.308.217-1.98.975T8.886 9.2q0 1.079.678 1.727t2.287 1.23q1.614.595 2.168 1.074t.555 1.319q0 1.056-.77 1.52q-.77.465-1.653.465q-.863 0-1.559-.503q-.695-.503-1.11-1.432l-.881.38q.427 1.028 1.145 1.602t1.74.81zM12 21q-1.864 0-3.506-.71q-1.642-.711-2.857-1.926q-1.216-1.216-1.926-2.858Q3 13.864 3 12t.71-3.506t1.927-2.857T8.494 3.71Q10.137 3 12 3t3.506.71q1.642.711 2.857 1.927q1.216 1.215 1.926 2.857Q21 10.137 21 12t-.71 3.506q-.711 1.642-1.926 2.857q-1.216 1.216-2.858 1.926Q13.864 21 12 21m0-1q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/></svg>
                  Pagos y servicios 
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/historial" :active="request()-> is ('historial')" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M8.117 16.539q.327 0 .548-.222q.22-.221.22-.549t-.222-.548t-.549-.22t-.548.222t-.22.549t.222.547t.549.22m0-3.769q.327 0 .548-.221q.22-.222.22-.55t-.222-.547t-.549-.22t-.548.221t-.22.55t.222.547t.549.22m0-3.769q.327 0 .548-.221q.22-.222.22-.55t-.222-.547t-.549-.22t-.548.221q-.22.222-.22.549t.222.548t.549.22m3.075 7.27h5.385v-1h-5.385zm0-3.77h5.385v-1h-5.385zm0-3.77h5.385v-1h-5.385zM5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h12.769q.69 0 1.153.463T20 5.616v12.769q0 .69-.462 1.153T18.384 20zm0-1h12.769q.23 0 .423-.192t.192-.424V5.616q0-.231-.192-.424T18.384 5H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192M5 5v14z"/></svg>  
                  Historial
                </x-nav-menu>
              </li>
              <li>
                <x-nav-menu href="/soporte" :active="request()->is ('soporte')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="#000" d="M9 2a4 4 0 1 0 0 8a4 4 0 0 0 0-8M6 6a3 3 0 1 1 6 0a3 3 0 0 1-6 0m-1.991 5A2 2 0 0 0 2 13c0 1.691.833 2.966 2.135 3.797C5.417 17.614 7.145 18 9 18q.617 0 1.21-.057a5.5 5.5 0 0 1-.618-.958Q9.301 17 9 17c-1.735 0-3.257-.364-4.327-1.047C3.623 15.283 3 14.31 3 13c0-.553.448-1 1.009-1h5.59q.277-.538.658-1zm6.626 2.92a2 2 0 0 0 1.43-2.478l-.155-.557q.382-.293.821-.497l.338.358a2 2 0 0 0 2.91.001l.324-.344q.448.212.835.518l-.126.423a2 2 0 0 0 1.456 2.519l.349.082a4.7 4.7 0 0 1 .01 1.017l-.46.117a2 2 0 0 0-1.431 2.479l.156.556q-.383.294-.822.498l-.338-.358a2 2 0 0 0-2.909-.002l-.325.344a4.3 4.3 0 0 1-.835-.518l.127-.422a2 2 0 0 0-1.456-2.52l-.35-.082a4.7 4.7 0 0 1-.01-1.016zm4.865.58a1 1 0 1 0-2 0a1 1 0 0 0 2 0"/></svg>
                  Soporte
                </x-nav-menu>
              </li>
            </ul>
          </div>
        </nav>
        <footer class="mt-auto p-2 border-t border-gray-200">
          <div class="hs-dropdown [--strategy:absolute] [--auto-close:inside] relative w-full inline-flex">
            <button id="hs-sidebar-footer-example-with-dropdown" type="button" class="w-full inline-flex shrink-0 items-center gap-x-2 p-2 text-start text-sm text-gray-800 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1734122415415-88cb1d7d5dc0?q=80&w=320&h=320&auto=format&fit=facearea&facepad=3&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar">
              Mishell Jimenez
              <svg class="shrink-0 size-3.5 ms-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg>
            </button>
  
            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-lg shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="hs-sidebar-footer-example-with-dropdown">
              <div class="p-1">
                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" href="#">
                  Perfil
                </a>
                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" href="#">
                  Soporte
                </a>
                <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100" href="#">
                  Cerrar sesion
                </a>
              </div>
            </div>
          </div>
        </footer>
    </div>
  </div>
  <main class="flex min-h-screen sticky top-0 p-2 mb-10">
    <div class="hidden lg:block w-64 p-6">
    </div>

    <div class="flex-1 bg-gray-50 p-4  ">
        {{ $slot }}
    </div>
</main>
</body>
</html>


{{-- <div class="lg:hidden text-start p-5 pb-0 hidden md:block lg-block">
        <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-sm align-middle hover:bg-gray-950 focus:outline-none focus:bg-gray-900" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-footer" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-footer">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
</div> --}}