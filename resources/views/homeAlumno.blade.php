@extends('layouts.appAlumno')

@section('contenido')
<div class="ml-10 mr-10">
<!-- Escribir comentario -->
<!-- Fin escribir comentario -->
<br>
<ol class="relative">
<li class="mb-10">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
            <div class="items-center mb-3 sm:flex">
            <span class="w-6 h-6 mr-2 bg-blue-100 rounded-full ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="https://t3.ftcdn.net/jpg/02/02/52/36/360_F_202523652_NqEMp50IkORLXlCmJXqgqRBLMW8xBHMP.jpg" alt="Thomas Lean image"/>
            </span>
            <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300"><a href="#" class="font-semibold text-gray-900 dark:text-white">Thomas Lean </a><span class="ml-1 mr-1 bg-green-600 text-white text-xs px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Profesor</span> hizo un comentario</div>
            <div class="ml-auto">
                <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">Hace 2 horas</time>
            </div>
            </div>
            <div class="p-3 text-xs font-medium text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">Ya subí la tarea a la plataforma jovenes, para que la chequen.</div>
            <a href="{{url('discusion')}}" class="ml-2 font-normal text-xs text-blue-500 hover:underline">Comentarios (+9)</a>
            <a href="" class="font-normal text-xs text-gray-500"><i class="far fa-thumbs-up ml-3 mr-0 text-gray-500"></i> Me gusta</a>
        </div>
    </li>
    <li class="mb-10">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
            <div class="items-center mb-3 sm:flex">
            <span class="w-6 h-6 mr-2 bg-blue-100 rounded-full ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="https://t3.ftcdn.net/jpg/02/02/52/36/360_F_202523652_NqEMp50IkORLXlCmJXqgqRBLMW8xBHMP.jpg" alt="Thomas Lean image"/>
            </span>
            <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Thomas Lean commented on  <a href="#" class="font-semibold text-gray-900 dark:text-white hover:underline">Flowbite Pro</a></div>
            <div class="ml-auto">
                <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">2 hours ago</time>
            </div>
            </div>
            <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">Hi ya'll! I wanted to share a webinar zeroheight is having regarding how to best measure your design system! This is the second session of our new webinar series on #DesignSystems discussions where we'll be speaking about Measurement.</div>
        </div>
    </li>
    <li class="mb-10">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
            <div class="items-center mb-3 sm:flex">
            <span class="w-6 h-6 mr-2 bg-blue-100 rounded-full ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="https://t3.ftcdn.net/jpg/02/02/52/36/360_F_202523652_NqEMp50IkORLXlCmJXqgqRBLMW8xBHMP.jpg" alt="Thomas Lean image"/>
            </span>
            <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Thomas Lean commented on  <a href="#" class="font-semibold text-gray-900 dark:text-white hover:underline">Flowbite Pro</a></div>
            <div class="ml-auto">
                <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">2 hours ago</time>
            </div>
            </div>
            <div class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">Hi ya'll! I wanted to share a webinar zeroheight is having regarding how to best measure your design system! This is the second session of our new webinar series on #DesignSystems discussions where we'll be speaking about Measurement.</div>
        </div>
    </li>
</ol>
<!-- Fin -->
</div>
@stop