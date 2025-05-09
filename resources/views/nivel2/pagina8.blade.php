@extends('/layout/base')
@section('contenido')

<div class="bg-gray-50 dark:bg-gray-900">
    <!-- Carrusel mejorado para talleres académicos -->
    <div id="academic-carousel" class="relative w-full" data-carousel="slide">
        <!-- Contenedor del carrusel con altura adaptable -->
        <div class="relative h-64 sm:h-80 md:h-96 overflow-hidden rounded-lg">
            <!-- Item 1 - Filosofía -->
            <div class="duration-700 ease-in-out absolute inset-0" data-carousel-item>
                <div class="relative w-full h-full">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="text-xl font-bold">Taller de Filosofía</h3>
                        <p>Explora los grandes pensamientos y cuestionamientos humanos</p>
                    </div>
                    <img src="/image/filosofia.jpg" class="w-full h-full object-cover" alt="Taller de Filosofía">
                </div>
            </div>
            
            <!-- Item 2 - Valores -->
            <div class="duration-700 ease-in-out absolute inset-0" data-carousel-item>
                <div class="relative w-full h-full">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="text-xl font-bold">Taller de Valores</h3>
                        <p>Desarrolla tu ética y principios para la vida profesional</p>
                    </div>
                    <img src="/image/pod.jpg" class="w-full h-full object-cover" alt="Taller de Valores">
                </div>
            </div>
            
            <!-- Item 3 - Enfoque Transdisciplinario -->
            <div class="duration-700 ease-in-out absolute inset-0" data-carousel-item>
                <div class="relative w-full h-full">
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="text-xl font-bold">Enfoque Transdisciplinario</h3>
                        <p>Aprende a integrar conocimientos de diversas áreas</p>
                    </div>
                    <img src="/image/interpe.jpg" class="w-full h-full object-cover" alt="Enfoque Transdisciplinario">
                </div>
            </div>
        </div>
        
        <!-- Indicadores del carrusel -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        
        <!-- Controles del carrusel -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Formulario de registro -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Regístrate</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Elige tu taller académico: Filosofía, Valores o Enfoque Transdisciplinario</p>
            
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Correo electrónico</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo@udg.mx" required>
                </div>
                
                <div>
                    <label for="taller" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Taller de interés</label>
                    <select id="taller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Selecciona un taller</option>
                        <option value="filosofia">Filosofía</option>
                        <option value="valores">Valores</option>
                        <option value="transdisciplinario">Enfoque Transdisciplinario</option>
                    </select>
                </div>
                
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sugerencias o comentarios</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Qué temas te gustaría que se abordaran en el taller?"></textarea>
                </div>
                
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Enviar registro
                </button>
            </form>
        </div>
    </section>
    
    <!-- Testimonios -->
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-xs dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
        <!-- Testimonio 1 -->
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Perspectiva enriquecedora</h3>
                <p class="my-4">El taller de filosofía amplió mi forma de ver el mundo y mi carrera profesional</p>
            </blockquote>
            <figcaption class="flex items-center justify-center">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="Vanessa Alvarado">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Vanessa Alvarado</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Filosofía</div>
                </div>
            </figcaption>    
        </figure>
        
        <!-- Testimonio 2 -->
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Transformación personal</h3>
                <p class="my-4">El taller de valores me ayudó a definir mis principios éticos profesionales</p>
            </blockquote>
            <figcaption class="flex items-center justify-center">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="Ana Cambreros">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Ana Cambreros</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Derecho</div>
                </div>
            </figcaption>    
        </figure>
        
        <!-- Testimonio 3 -->
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Visión integral</h3>
                <p class="my-4">El enfoque transdisciplinario me enseñó a conectar mi carrera con otras áreas</p>
            </blockquote>
            <figcaption class="flex items-center justify-center">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Javier Rodriguez">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Javier Rodríguez</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Medicina</div>
                </div>
            </figcaption>    
        </figure>
        
        <!-- Testimonio 4 -->
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Áreas de mejora</h3>
                <p class="my-4">Los talleres son valiosos pero necesitan más ejemplos prácticos</p>
            </blockquote>
            <figcaption class="flex items-center justify-center">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Antonio Castillo">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Antonio Castillo</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Arquitectura</div>
                </div>
            </figcaption>    
        </figure>
    </div>
</div>

@endsection