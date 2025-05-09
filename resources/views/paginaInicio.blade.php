@extends('/layout/base')
@section('contenido')
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 text-center lg:text-left"> <!-- Centrado en móvil, alineado a la izquierda en desktop -->
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Bienvenido</h1>
                <p class="dark:text-gray-400 mx-auto lg:mx-0"> 
                    <pr>Talleres Cut de Tonalá tiene como misión principal fomentar el crecimiento y desarrollo de habilidades cognitivas en diversas áreas, brindando a los estudiantes herramientas prácticas y conocimientos especializados que les permitan enfrentar los desafíos académicos y profesionales de manera efectiva. A través de una amplia gama de talleres, buscamos promover el aprendizaje continuo, la creatividad y el pensamiento crítico, contribuyendo así al desarrollo integral de nuestra comunidad estudiantil.</pr>
                </p>
                <br><br>
                <div class="flex flex-col lg:flex-row justify-center lg:justify-start space-y-4 lg:space-y-0 lg:space-x-4"> <!-- Botones centrados en móvil, alineados a la izquierda en desktop -->
                    <a id="inscribeteHomeBtn" href="/vista2" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Inscríbete
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="/vista13" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Dudas frecuentes
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="/image/studiante.png" alt="Estudiante usando computadora" class="w-full h-auto" />
            </div>
        </div>
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Variables globales para el estado de sesión (si ya existen en base.blade.php, puedes omitirlas aquí)
        window.isLoggedIn = window.isLoggedIn || false;
        window.currentUserEmail = window.currentUserEmail || '';

        var inscribeteHomeBtn = document.getElementById('inscribeteHomeBtn');
        if (inscribeteHomeBtn) {
            inscribeteHomeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (!window.isLoggedIn) {
                    var loginModal = document.getElementById('loginModal');
                    if (loginModal) loginModal.classList.remove('hidden');
                } else {
                    window.location.href = '/catalogo';
                }
            });
        }
    });
    </script>
</body>



</html>
@endsection