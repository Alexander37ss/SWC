<header class="bg-white relative z-50">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
    <div class="flex mr-10">
      <a href="{{url('home')}}" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="{{asset('img/logo_dgeti.png')}}" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="btn-openmenu">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-7">
      <a href="{{url('home')}}" class="text-sm flex font-normal text-gray-600 hover:text-black transition-colors ease-in leading-6 " :active="request()->routeIs('homeAlumno')">Inicio</a>
      <div class="relative">
      <button type="button" class="flex items-center text-sm font-normal leading-6 text-gray-600 hover:text-black transition-colors ease-in" aria-expanded="false" id="btn-dropdown">
        Oferta educativa
          <svg class="h-4 w-4 flex-none text-gray-600 hover:text-black transition-colors ease-in" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>

        <!--
          'Product' flyout menu, show/hide based on flyout menu state.

          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
        <div class="absolute hidden -left-8 top-full mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" id="dropdown-nav">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m8 18l-6-6l6-6l1.425 1.425l-4.6 4.6L9.4 16.6L8 18Zm8 0l-1.425-1.425l4.6-4.6L14.6 7.4L16 6l6 6l-6 6Z"/></svg>
              </div>
              <div class="flex-auto">
                <a href="https://cetis107.edu.mx/portal/oferta/Programacion.pdf" class="block font-semibold text-gray-900">
                  Programación
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Aprende los conceptos fundamentales de la programación y preparate para esta era digital</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M9.87 12.15L9 6.46a9.91 9.91 0 0 1 6 0l-.87 5.69c-.07.49-.5.85-1 .85h-2.27a1 1 0 0 1-.99-.85M22 16c0-.79-.47-1.5-1.2-1.83A9.082 9.082 0 0 0 17 8.5l-1.76 4.84c-.14.4-.52.66-.94.66H9.7c-.42 0-.8-.26-.94-.66L7 8.5a9.087 9.087 0 0 0-3.8 5.66C2.47 14.5 2 15.2 2 16l6.45 1.84c.36.1.73.16 1.1.16h4.88c.37 0 .74-.06 1.1-.16L22 16Z"/></svg>
              </div>
              <div class="flex-auto">
                <a href="https://cetis107.edu.mx/portal/oferta/Construccion.pdf" class="block font-semibold text-gray-900">
                  Construcción
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Preparate para tu futuro laboral enfocado a ingenieras</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M10 13a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm0-4a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm4 0a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm7 4a1 1 0 0 0 0-2h-2V9h2a1 1 0 0 0 0-2h-2.18A3 3 0 0 0 17 5.18V3a1 1 0 0 0-2 0v2h-2V3a1 1 0 0 0-2 0v2H9V3a1 1 0 0 0-2 0v2.18A3 3 0 0 0 5.18 7H3a1 1 0 0 0 0 2h2v2H3a1 1 0 0 0 0 2h2v2H3a1 1 0 0 0 0 2h2.18A3 3 0 0 0 7 18.82V21a1 1 0 0 0 2 0v-2h2v2a1 1 0 0 0 2 0v-2h2v2a1 1 0 0 0 2 0v-2.18A3 3 0 0 0 18.82 17H21a1 1 0 0 0 0-2h-2v-2Zm-4 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1Zm-3-3a1 1 0 1 0 1 1a1 1 0 0 0-1-1Z"/></svg>
              </div>
              <div class="flex-auto">
                <a href="https://cetis107.edu.mx/portal/oferta/Electronica.pdf" class="block font-semibold text-gray-900">
                  Electrónica
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 5h-7L8 19l-3-6H3m11 0l6 6m-6 0l6-6"/></svg>
            </div>
              <div class="flex-auto">
                <a href="https://cetis107.edu.mx/portal/oferta/Contabilidad.pdf" class="block font-semibold text-gray-900">
                  Contabilidad
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero illo.</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/><path fill="currentColor" d="M7 12h2v5H7zm8-5h2v10h-2zm-4 7h2v3h-2zm0-4h2v2h-2z"/></svg>
              </div>
              <div class="flex-auto">
                <a href="https://cetis107.edu.mx/portal/oferta/Ofimatica.pdf" class="block font-semibold text-gray-900">
                  Ofimatica
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat doloribus ipsam labore a debitis, eaque molestia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="{{url('noticias')}}" class="text-sm flex font-normal leading-6 text-gray-600 hover:text-black transition-colors ease-in" :active="request()->routeIs('noticias')">Noticias</a>
      <a href="#" class="text-sm flex font-normal  leading-6  text-gray-600 hover:text-black transition-colors ease-in
" :active="request()->routeIs('alumnos')">Alumnos</a>
      <a href="#" class="text-sm flex font-normal  leading-6 text-gray-600 hover:text-black transition-colors ease-in
" :active="request()->routeIs('docentes')">Docentes</a>
    </div>
    <div class="hidden lg:block mx-10 md:w-[44%]">
      <form>   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="search" id="default-search" class="block w-full px-4 py-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Inscripciones, Lista de aceptados..." required>
          <button type="submit" class="text-white bg-red-600 absolute bottom-1 right-2.5 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 dark:bg-red-600 dark:hover:bg-red-500 dark:focus:ring-red-600">Buscar</button>
      </div>
      </form>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{url('login')}}" class="text-sm font-semibold leading-6 text-gray-900">Iniciar sesión <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="relative lg:hidden z-50" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-y-0 right-0 w-full overflow-y-auto  bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" id="menu">
      <div class="flex items-center justify-between">
        <a href="{{url('home')}}" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-10 w-auto" src="{{asset('img/logo_dgeti.png')}}" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="btn-closemenu">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Product
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch demo</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact sales</a>
              </div>
            </div>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
          </div>
          <div class="py-6">
            <a href="{{url('login')}}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Iniciar sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

