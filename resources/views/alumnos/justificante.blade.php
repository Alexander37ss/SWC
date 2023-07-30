@extends('layouts.appAlumno')

@section('contenido')
<!-- breadcrumb -->
<div class="flex flex-col md:flex-row ml-5 mt-3" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{url('homeAlumno')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-600 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        Inicio
      </a>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Solicitar justificante</span>
      </div>
    </li>
  </ol>
</div>
<!-- fin breadcrum -->
<div class="mx-5 md:mx-7">
  <form action="{{url('alumno/prejustificante', auth()->user()->name)}}" method="POST">
          @csrf 
          <!-- /.card-header -->
          <div class="mt-5 mb-5">
            <h2 class="text-3xl font-thin dark:text-white mb-2">Solicitar justificante</h2>
            <hr>
          </div>
          <!-- Pasos -->
          <ol class="sm:flex hidden items-center w-[50%] mx-auto text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
              <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                  <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                      <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                      </svg>
                      Detalles <span class="hidden sm:inline-flex sm:ml-1">falta </span>
                  </span>
              </li>
              <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                  <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                      <span class="mr-2">2</span>
                      Confirmación <span class="hidden sm:inline-flex sm:ml-1">tutor</span>
                  </span>
              </li>
              <li class="flex items-center">
                  <span class="mr-2">3</span>
                  Confirmation
              </li>
          </ol>
          <!-- Fin Pasos -->
          <!-- Titulo paso -->
          <label for="countries_multiple" class="block text-2xl mb-5 text-gray-900 dark:text-white">Detalles de la falta</label>
            <div class="sm:grid md:grid-cols-2 gap-2 ml-2">
            <!-- Motivo -->
            <div class="border-r">
              <label for="countries_multiple" class="block text-lg text-gray-900 dark:text-white">Escoger motivo</label>
              <div class="flex items-center p-2 mb-2 text-sm rounded-lg  text-blue-500" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Tip!</span> Elige 'Otro' si ningún motivo coincide con lo que buscas.
                </div>
              </div>
              <select id="countries" class="bg-gray-50 border sm:w-full md:w-[65%] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Escoge un motivo...</option>
                <option value="Motivos de salud">Motivo de salud</option>
              <option value="Motivos vacacional">Motivo vacacional</option>
              <option value="Motivos de perdida">Motivo de perdida</option>
                <option value="Otro">Otro</option>
              </select>
              <!-- Otro... -->
              <div class="form-group mb-6 mt-3 hidden" id="OtroMotivo">
                <label for="countries_multiple" class="block text-lg text-gray-900 dark:text-white">Otro</label>
                <textarea id="message" rows="4" class="sm:w-full md:w-[50%] block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cuentanos la causa de tu inasistencia..."></textarea>
              </div>
              <!-- Fin motivo-->
              <!-- Fechas -->
              <label class="block mb-2 mt-3 text-lg text-gray-900 dark:text-white">Fechas</label>
              <div class="sm:grid md:grid-cols-2 mb-6 mr-2">
                <div class="sm:mr-0 md:mr-5">
                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desde</label>
                  <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona una fecha" required>
                </div>
                <div class="">
                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasta</label>
                  <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona una fecha" required>
                </div>
              </div>
              <!-- Fin fechas -->
            </div>
            <!-- Fin col 1 -->
            <div>
            <label for="countries_multiple" class="block ml-2 text-lg text-gray-900 dark:text-white">Adjuntar evidencia (opcional)</label>
            <label for="countries_multiple" class="block ml-2 text-sm text-gray-600 dark:text-white">Adjunta documentación de respaldo (por ejemplo, certificado médico)</label>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex mt-2 flex-col items-center justify-center w-[75%] h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div> 
            </div>
          </div>
          <!--Fin row -->
          <br>
          <!-- Botón(es) -->
          <div class="flex float-right md:mr-5">
          <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Siguiente <li class="fas fa-arrow-right text-sm ml-2"></li></button>
        </div>
        <!-- Fin botón(es) -->
      </form>
      <!-- Fin formulario -->
    </div>
    <!-- Fin margin main -->
    @stop