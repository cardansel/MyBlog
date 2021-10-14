<x-app-layout>
    <!--Creo una seccion para poner la imagen como background-->
    <section class="bg-cover" style="background-image: url(https://images.pexels.com/photos/247791/pexels-photo-247791.png?auto=compress&cs=tinysrgb&dpr=1&w=500)">
        <div class="container py-36">
            <!--creo un div para encerrar y mostrar los textos de la cabecera para distintos device-->
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Bienvenidos a CARDANSEL </h1>
                <p class="text-white text-lg text-2 mb-4">ESTAMOS AGRGANDO INFORMACION ACERCA DE NUESTROS SERVICIOS..</p>

               
            </div>
            <!--cfin del div para encerrar y mostrar los textos de la cabecera para distintos device-->
        </div>
        
         
    </section>
    <!--fin de la seccion para poner la imagen como background-->
   <section class="bg-gradient-to-r from-red-400 via-pink-500 to-red-500">
        <div class="bbg-gradient-to-r from-purple-400 via-pink-500 to-red-500 py-4 d-none d-md-block">
            <div class="grid grid-cols-3 gap-4 flex justify-center">
                <div class="flex justify-center text-white font-bold text-3xl"><i class="fas fa-laptop mr-4 mt-1 d-sm-none d-lg-block"></i> Cursos y Proyectos</div>
                <div class="flex justify-center text-white font-bold text-3xl"><i class="fas fa-chalkboard-teacher mr-4 mt-1 d-sm-none d-lg-block"></i> Manuales de M&uacute;sica</div>
                <div class="flex justify-center text-white font-bold text-3xl"><i class="fas fa-blog mr-4 mt-1 d-sm-none d-lg-block"></i> Blog</div>
                
              </div>
        </div>
       
    </section>
    <!--Creo la seccion de contenido-->
 <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="https://images.pexels.com/photos/5474284/pexels-photo-5474284.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Proyectos y Desarrollos</h1>
                </header>
                <p class="text-sm text-gray-500">Estamos constantemente realizando investigaciones de nuevos proyectos y desarrollo de app para distintos tipo de necesiad.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="https://images.pexels.com/photos/955402/pexels-photo-955402.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </figure>

				<header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Analisis de Dise&ntilde;o</h1>
                </header>
                <p class="text-sm text-gray-500">Lo ayudamos a convertir el sue&ntilde;o del sistema para dar soluci&oacute;n a su creaciones. </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="https://images.pexels.com/photos/257736/pexels-photo-257736.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </figure>.


                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Servicios de Hosting </h1>
                </header>
                <p class="text-sm text-gray-500">Dentro de nuestros servicios de desarrollo web puede optar por nuestros servicios de hosting.</p>
            </article>
            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover"src="https://images.pexels.com/photos/5240548/pexels-photo-5240548.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </figure>.


                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Diese&ntilde;o Grafico</h1>
                </header>
                <p class="text-sm text-gray-500">Asesoramiento puesta en escena de prototipos de diese&ntilde;o grafico, para su marca y presencia en la web .</p>
            </article>
        </div>
    </section>
    <!--Fin Seccion Contenido-->

   <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">Nuestros sistemas, para conocer m&aacute;s</h1>
        <p class="text-center text-white">Dir&iacute;gete al catálogo de cursos y filtralos por categor&iacute;a o nivel</p>

        <div class="flex justify-center mt-4">
            <a href="#" class="bg-blue-500 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cat&aacute;logo de desarrollo
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">&Uacute;ltimos Desarrollos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajando para seguir renovandonos</p>

        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($posts as $post)

            <x-course-card :course="$course" />

            <article class="bg-white shador-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title,40)}}</h1>
                        <p class="text-gray-500 text-sm mb-2"> Prof: {{$course->teacher->name}}</p>

                        
                        <div class="flex">
                            <ul class="flex text-sm">
                                <li  class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >=1 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >=2 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >=3 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >=4 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating =5 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                            </ul>

                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                {{$course->students_count}}
                            </p>

                       
                        </div>
                             <a href="{{route('courses.show',$course)}}" class="block text-center w-full mt-4 bg-blue-500 hover:blue-700 text-white font-bold py-2 px-4 rounded">
                               M&aacute;s Informaci&oacute;n
                            </a>
                    </div>
                </article> 
            
                @endforeach
        </div> --}}

        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Plataformas</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Uma manera simple para trabajar 
      </p>
      <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        Para que complicarse tanto con plataformas que son complejas, en cardansel le ayudamos a simplificar y acceder a una solucion a su medida.
      </p>
    </div>

    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/globe-alt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              Competitive exchange rates
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/scale -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              No hidden fees
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              Transfers are instant
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </div>

        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
              <!-- Heroicon name: outline/annotation -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <dt class="text-lg leading-6 font-medium text-gray-900">
              Mobile notifications
            </dt>
            <dd class="mt-2 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </div>
      </dl>
    </div>
  </div>
</div>

    </section> 
</x-app-layout>

