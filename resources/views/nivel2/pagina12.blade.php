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

<body class="bg-gray-900 text-white"> <!-- Asegúrate de que el texto sea blanco -->

    <div class="max-w-6xl mx-auto py-12 px-6">
        <header class="text-center bg-gray-300 py-6 rounded-lg">
            <h1 class="text-5xl font-bold text-gray-900">NOSOTROS</h1> <!-- Texto en gris oscuro para el título -->
        </header>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="text-white"> <!-- Asegúrate de que el texto sea blanco -->
                <p class="text-lg leading-relaxed">
                    Bienvenidos, este es el sistema oficial de registro para talleres en la Universidad de Guadalajara. 
                    Nuestra plataforma está diseñada para facilitar a los estudiantes, docentes y personal administrativo 
                    la inscripción en una amplia variedad de talleres académicos, culturales y deportivos.
                </p>
                <p class="mt-4 text-lg leading-relaxed">
                    Nos comprometemos a ofrecer una experiencia intuitiva y accesible, permitiendo a los usuarios explorar 
                    el catálogo de talleres, gestionar su inscripción y recibir información actualizada sobre horarios, requisitos y certificaciones.
                </p>
                <p class="mt-4 text-lg leading-relaxed">
                    En la Universidad de Guadalajara, creemos en la educación continua y en el desarrollo integral de nuestra comunidad. 
                    Por ello, trabajamos constantemente para mejorar este sistema y garantizar que cada taller brinde oportunidades 
                    de aprendizaje y crecimiento personal.
                </p>
                <p class="mt-4 text-lg leading-relaxed">
                    Si tienes alguna duda o necesitas asistencia, no dudes en contactarnos a través de nuestros canales de soporte. 
                    ¡Gracias por ser parte de esta iniciativa!
                </p>
            </div>
            <div>
                <img class="w-full rounded-lg shadow-lg" src="/image/cut_feo.jpeg" alt="Universidad de Guadalajara, fachada principal" />
            </div>
        </div>
    </div>
</body>
</html>

@endsection