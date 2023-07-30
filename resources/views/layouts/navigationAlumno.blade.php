<nav id="nav" class="bg-[#5d0018]">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
      <div class="flex flex-shrink-0 items-center">
          <a href="{{url('homeAlumno')}}"><img class="h-8 w-auto" src="{{asset('img/logo_dgeti3.png')}}" alt="Your Company"></a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <span id="btnTramites" class="text-gray-300 transition cursor-pointer rounded-md px-3 py-2 text-sm font-medium">Trámites</span>
            <!-- Mega menu tramites -->
            <div id="mega-menu-dropdown" class="absolute hidden top-[63.7px] rounded left-[38px] z-10 grid w-auto grid-cols-2 text-sm bg-white shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700 border-b-2 border-[#6e1229]">
                        <div class="p-4 pb-0 text-white md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                  <span class="font-bold text-black">En línea</span>
                                </li>
                                <li>
                                    <a href="{{url('tramites/solicitud_justificante')}}" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                        Solicitar justificante
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                        Descargar constancia
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                        Trámites enviados
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-white md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                <span class="font-bold text-black">Formatos</span>
                                </li>
                                <li>
                                    <a href="#" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                        Servicio social
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                        Practicas profesionales
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-white md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                <span class="font-bold text-black">Otros</span>
                                </li>
                                <li>
                                    <a href="#" class="text-black hover:underline dark:text-gray-400  dark:hover:text-blue-500">
                                      Becas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Fin mega menu -->
            <a id="btnPagos" href="#" class="text-gray-300 hover:bg-[#6e1229] rounded-md px-3 py-2 text-sm font-medium">Pagos</a>
            <a id="btnCalificaciones" href="#" class="text-gray-300 hover:bg-[#6e1229] rounded-md px-3 py-2 text-sm font-medium">Calificaciones</a>
          </div>
        </div>
      </div>
      <div class="hidden absolute inset-y-0 right-0 sm:flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="rounded-ful p-1 mr-3 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">Calendar</span>
          <svg class="h-6 w-6 text-[#e2b78b]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" d="M4 7v2h16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 5h2a2 2 0 0 1 2 2v2H4V7a2 2 0 0 1 2-2h2m8 0V3m0 2H8m0-2v2M4 9.5V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9.5"/></g></svg>
        </button>
        <button type="button" class="rounded-ful p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6 text-[#e2b78b]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3 hidden sm:block">
        <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-[#e2b78b] focus:outline-none transition ease-in-out duration-150">
                            <div><i class="fas fa-user"></i></div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <x-slot name="content">
                        <!-- Datos usuario -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                        </div>
                        <!-- Link perfil -->
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Configuración') }}
                        </x-dropdown-link>

                        <!-- Link cerrar sesión -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               <span style="color: red !important">{{ __('Cerrar sesión') }}</span>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
          </x-dropdown>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
    </div>
    </div>
  </nav>
<!-- Fin nuevo navbar -->

