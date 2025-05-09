@extends('layout.base')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talleres Informáticos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilos personalizados */
        .categoria-btn {
            @apply rounded-full px-6 py-3 text-lg font-semibold border border-gray-300 bg-white text-gray-900 
                  hover:border-gray-400 focus:ring-4 focus:ring-gray-300 transition-all;
        }
        .categoria-btn.active {
            @apply text-blue-700 border-blue-600 hover:bg-blue-700 hover:text-white focus:ring-blue-300;
        }
        .tarjeta-taller {
            @apply bg-white shadow-md rounded-lg p-4 text-center border border-gray-200 
                  transition-all duration-300 transform origin-center;
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <!-- Barra de búsqueda -->
        <div class="max-w-lg mx-auto my-6">
            <input type="text" id="buscador" placeholder="Buscar talleres por nombre..." 
                   class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>
    
        <!-- Botones de categoría principal con fondo blanco y estilo circular -->
        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap gap-3">
            <button id="btn_culturales" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Culturales
            </button>
            <button id="btn_deportivos" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Deportivos
            </button>
            <button id="btn_artistico" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Artístico
            </button>
            <button id="btn_interpersonales" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Interpersonales
            </button>
            <button id="btn_tecnologicos" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Tecnológicos
            </button>
            <button id="btn_personales" type="button" 
                    class="rounded-full px-6 py-3 bg-white text-gray-800 border border-gray-300 hover:border-blue-400 hover:text-blue-600 hover:shadow-md font-medium text-lg transition-all duration-300">
                Personales
            </button>
        </div>
    
        <!-- Filtros por subcategoría -->
        <div id="filtros-subcategorias" class="bg-gray-50 p-6 rounded-lg mb-8 border border-gray-200 shadow-sm">
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Filtrar por subcategorías:</h3>
            
            <!-- Subcategorías Culturales -->
            <div id="subculturales">
                <h4 class="font-medium mb-3 text-gray-700">Culturales:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="musica" data-categoria="culturales">
                        <span class="ml-2 text-gray-700">Música</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="danza" data-categoria="culturales">
                        <span class="ml-2 text-gray-700">Danza</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="teatro" data-categoria="culturales">
                        <span class="ml-2 text-gray-700">Teatro</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="culturales">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
            
            <!-- Subcategorías Deportivos -->
            <div id="subdeportivos">
                <h4 class="font-medium mb-3 text-gray-700">Deportivos:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="futbol" data-categoria="deportivos">
                        <span class="ml-2 text-gray-700">Fútbol</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="basquet" data-categoria="deportivos">
                        <span class="ml-2 text-gray-700">Baloncesto</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="atletismo" data-categoria="deportivos">
                        <span class="ml-2 text-gray-700">Atletismo</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="deportivos">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
            
            <!-- Subcategorías Artístico -->
            <div id="subartistico">
                <h4 class="font-medium mb-3 text-gray-700">Artístico:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="pintura" data-categoria="artistico">
                        <span class="ml-2 text-gray-700">Pintura</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="escultura" data-categoria="artistico">
                        <span class="ml-2 text-gray-700">Escultura</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="fotografia" data-categoria="artistico">
                        <span class="ml-2 text-gray-700">Fotografía</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="artistico">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
            
            <!-- Subcategorías Interpersonales -->
            <div id="subinterpersonales">
                <h4 class="font-medium mb-3 text-gray-700">Interpersonales:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="comunicacion" data-categoria="interpersonales">
                        <span class="ml-2 text-gray-700">Comunicación</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="conflictos" data-categoria="interpersonales">
                        <span class="ml-2 text-gray-700">Resolución de Conflictos</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="equipo" data-categoria="interpersonales">
                        <span class="ml-2 text-gray-700">Trabajo en Equipo</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="interpersonales">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
            
            <!-- Subcategorías Tecnológicos -->
            <div id="subtecnologicos">
                <h4 class="font-medium mb-3 text-gray-700">Tecnológicos:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="programacion" data-categoria="tecnologicos">
                        <span class="ml-2 text-gray-700">Programación</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="diseno" data-categoria="tecnologicos">
                        <span class="ml-2 text-gray-700">Diseño Web</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="redes" data-categoria="tecnologicos">
                        <span class="ml-2 text-gray-700">Redes</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="tecnologicos">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
            
            <!-- Subcategorías Personales -->
            <div id="subpersonales">
                <h4 class="font-medium mb-3 text-gray-700">Personales:</h4>
                <div class="flex flex-wrap gap-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="autocuidado" data-categoria="personales">
                        <span class="ml-2 text-gray-700">Autocuidado</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="tiempo" data-categoria="personales">
                        <span class="ml-2 text-gray-700">Gestión del Tiempo</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-checkbox" value="mindfulness" data-categoria="personales">
                        <span class="ml-2 text-gray-700">Mindfulness</span>
                    </label>
                    <label class="inline-flex items-center cursor-pointer bg-blue-50 px-3 py-1 rounded-full">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 subcategoria-todas" data-categoria="personales">
                        <span class="ml-2 text-blue-700 font-medium">Ver todos</span>
                    </label>
                </div>
            </div>
        </div>
    
        <!-- Grid de talleres -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Taller de Música (Culturales) -->
            <div class="tarjeta-taller culturales musica">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=400&q=80" alt="Taller de Música, instrumentos musicales">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Música</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Música</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★★☆</div>
                <button 
                class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                onclick="window.location.href='/vista5'"
                >
                Ver más
            </button>
            </div>
            
            <!-- Taller de Fútbol (Deportivos) -->
            <div class="tarjeta-taller deportivos futbol">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Taller de Fútbol, balón y campo de fútbol">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Fútbol</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Fútbol</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★☆☆</div>
                <button 
                class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                onclick="window.location.href='/vista6'"
                >
                Ver más
            </button>
            </div>
            
            <!-- Taller de Pintura (Artístico) -->
            <div class="tarjeta-taller artistico pintura">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Taller de Pintura, pinceles y lienzo">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Pintura</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Pintura</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★★★</div>
                <button 
                class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                onclick="window.location.href='/vista7'"
                >
                Ver más
            </button>
            </div>
            
            <!-- Taller de Comunicación (Interpersonales) -->
            <div class="tarjeta-taller interpersonales comunicacion">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Taller de Comunicación, personas conversando">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Comunicación</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Comunicación</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★☆☆</div>
                <button 
                class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                onclick="window.location.href='/vista8'"
                >
                Ver más
            </button>
            </div>
            
            <!-- Taller de Programación (Tecnológicos) -->
            <div class="tarjeta-taller tecnologicos programacion">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80" alt="Taller de Programación, código en pantalla">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Programación</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Programación</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★★☆</div>
                <button 
                    class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                    onclick="window.location.href='/vista9'"
                    >
                    Ver más
                </button>
            </div>
            
            <!-- Taller de Autocuidado (Personales) -->
            <div class="tarjeta-taller personales autocuidado">
                <img class="h-auto max-w-full rounded-lg mb-3 transition-all duration-300" src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=400&q=80" alt="Taller de Autocuidado, persona meditando">
                <p class="nombre-taller mt-3 text-gray-700 text-lg font-medium">Taller de Autocuidado</p>
                <p class="subcategoria-taller text-sm text-gray-500 mt-1">Subcategoría: Autocuidado</p>
                <button class="text-red-500 text-2xl mt-2 hover:text-red-600 transition-all duration-300">❤</button>
                <div class="flex justify-center text-yellow-500 mt-2 text-xl">★★★★☆</div>
                <button 
                    class="text-blue-600 font-semibold mt-2 hover:text-blue-700 transition-all duration-300"
                    onclick="window.location.href='/vista10'"
                    >
                    Ver más
                </button>
            </div>
        </div>
    </div>

    <script src="/js/categorias.js"></script>
</body>
</html>
@endsection