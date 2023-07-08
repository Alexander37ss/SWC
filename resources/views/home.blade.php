@extends('layouts.app')

@section('contenido')
<!-- Encabezado principal -->
<div class="container-fluid my-0">
  <section class="background-radial-gradient text-center lg:text-left">
    <div class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] bg-[url('https://scontent.fcul2-1.fna.fbcdn.net/v/t39.30808-6/338030777_1012176836425008_7132372811127651829_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=wi22GzL3ElUAX-V0MUe&_nc_ht=scontent.fcul2-1.fna&oh=00_AfDyXYdvIfwpgcC2HLWT_BgpYPIIX0j-5gUPVj5kMweo-g&oe=64AB1AA5')] h-[600px] w-[100%]">
      <div
        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="flex h-full items-center justify-center">
          <div class="max-w-[800px] px-6 py-6 text-center text-white md:py-0 md:px-12">
            <h2 class="mb-12 text-5xl font-bold leading-tight tracking-tight md:text-6xl xl:text-7xl">
            Construye un futuro, <br> <span class="text-red-600">únete</span> al Cetis 107
            </h2>
            <p class="text-lg">
            Descubre el poder de la educación en el Cetis 107. Ofrecemos formación académica de calidad, programas actualizados y un cuerpo docente comprometido con tu éxito. Nuestras instalaciones modernas y oportunidades de prácticas te brindarán un entorno inspirador. Además, fomentamos tu desarrollo integral y te preparamos para destacar en el mundo laboral. ¡Inscríbete y construye un futuro brillante en tu carrera!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Fin encabezado principal -->
<!-- Por qué unirse -->
<div class="row-span-full flex">
    <div class="w-1/2">
    <h2 class="text-center ml-5 mt-10 text-3xl font-bold leading-tight tracking-tight md:text-4xl xl:text-5xl">
      Por qué <mark class="px-2 text-white bg-red-600 rounded dark:bg-blue-500">elegirnos</mark>
    </h2>
    <br>
    <div class="ml-10 mr-5 text-md text-gray-500">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur ullam labore repellendus, minima placeat rem amet? Blanditiis eveniet, praesentium ipsam sunt sint sequi ullam dolores earum inventore laboriosam qui?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur ullam labore repellendus, minima placeat rem amet? Blanditiis eveniet, praesentium ipsam sunt sint sequi ullam dolores earum inventore laboriosam qui?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur ullam labore repellendus, minima placeat rem amet? Blanditiis eveniet, praesentium ipsam sunt sint sequi ullam dolores earum inventore laboriosam qui?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur ullam labore repellendus, minima placeat rem amet? Blanditiis eveniet.
      </p>
    </div>
    <br><br>
    <div align="center">
      <button class="bg-transparent hover:bg-red-600 text-black font-semibold hover:text-white py-2 px-4 border border-red-600 hover:border-transparent rounded">
        Más información
      </button>
    </div>
    </div>
    <div class="w-1/2">
      <img src="https://scontent.fcul2-1.fna.fbcdn.net/v/t39.30808-6/315120093_509470804529187_3347489008461331643_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=_82iTNcy840AX9UmsKa&_nc_ht=scontent.fcul2-1.fna&oh=00_AfDFmGYP2HmEUdanRZTucdSjy-NMRd4W1hLgxq0yl-5-Bw&oe=64AD4FC2" alt="">
    </div>
  </div>
  <!-- Fin por qué unirse -->
  <!-- Si eres estudiante -->
<div class="row-span-full flex">
    <div class="w-1/2">
      <img src="{{asset('img/stock/estudiante.jpg')}}" alt="">
    </div>
    <div class="w-1/2">
    <h2 class="text-center ml-5 mt-10 text-3xl font-bold leading-tight tracking-tight md:text-4xl xl:text-5xl">
      Ya eres <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">estudiante?</span>
    </h2>
    <br>
    <div class="ml-10 mr-5 text-md text-gray-500">
      <p>
      En el CETis 107, entendemos que tener acceso rápido y sencillo a los servicios educativos es fundamental para tu experiencia como estudiante. 
      Por esa razón, hemos desarrollado una página web exclusiva para nuestros estudiantes inscritos, 
      con el objetivo de brindarte una plataforma en línea que te facilite la gestión de tus trámites y te brinde un conjunto de herramientas 
      y servicios diseñados específicamente para hacer tu vida estudiantil más conveniente y eficiente.
      </p>
    </div>
    <br><br><br><br>
    <div align="center">
      <a href="{{url('login')}}" class="bg-transparent cursor-pointer hover:bg-blue-600 text-black font-semibold hover:text-white py-3 px-7 border border-blue-600 hover:border-transparent rounded">
        Iniciar sesión
      </a>
      <br><br>
      No puedo <a class="underline text-blue-500 cursor-pointer" href="">acceder</a> a mi cuenta.
    </div>
    </div>
  </div>
  <!-- Fin si eres estudiante -->
<br>
@stop