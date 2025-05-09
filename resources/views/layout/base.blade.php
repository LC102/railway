<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>
<body class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900 min-h-screen flex flex-col">

<nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="http://127.0.0.1:8000/inicio" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/image/cut_sin.png" class="h-8" alt="Logo del Centro Universitario de Tonalá" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Talleres CUT</span>
        </a>
        
        <!-- Mobile menu button -->
        <div class="flex md:hidden">
            <button data-collapse-toggle="mega-menu-full-image" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full-image" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        
        <div id="mega-menu-full-image" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="/vista12" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Nosotros</a>
                </li>
                <li>
                    <button id="mega-menu-full-cta-image-button" data-collapse-toggle="mega-menu-full-image-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Talleres <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
                </li>
                <li>
                    <a href="/vista11" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                </li>
                <li>
                    <a href="/catalogo" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Ingresar</a>
                </li>
                <li>
                    <a href="/catalogo" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Inscripcion</a>
                </li>
                <li class="flex items-center ml-4">
                    <!-- User dropdown button -->
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="/image/person_sesion.jpg" alt="Foto de usuario">
                    </button>
                    <!-- User dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Usuario</span>
                            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">correo@ejemplo.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#" id="openLogin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Iniciar sesión</a>
                            </li>
                            <li>
                                <a href="#" id="changeAccount" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cambiar de cuenta</a>
                            </li>
                            <li>
                                <a href="#" id="signOut" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="mega-menu-full-image-dropdown" class="mt-1 bg-white border-gray-200 shadow-xs border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
            <ul class="hidden mb-4 space-y-4 md:mb-0 md:block" aria-labelledby="mega-menu-full-image-button">
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres Culturales
                    </a>
                </li>
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres deportivos
                    </a>
                </li>
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres artisticos
                    </a>
                </li>
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres de desarrollo personal
                    </a>
                </li>
            </ul>
            <ul class="mb-4 space-y-4 md:mb-0">
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres Informaticos
                    </a>
                </li>
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Talleres personales
                    </a>
                </li>
                <li>
                    <a href="/vista14" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Donativo
                    </a>
                </li>
                <li>
                    <a href="/catalogo" class="hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        Registro
                    </a>
                </li>
            </ul>
            <div class="p-8 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken" style="background-image: url(/image/cut_fo.jpg)">
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Registrate.</p>
                <button type="button" id="inscribeteBtn" class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                    Inicia
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
            
        </div>
    </div>
</div>

<main class="flex-1">
    @yield('contenido')
    
    <!-- El menú de usuario está junto a "Inscripcion" -->
</main>

<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="http://127.0.0.1:8000/inicio" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/image/cut_sin.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Talleres</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/vista12" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="/vista11" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="http://127.0.0.1:8000/inicio" class="hover:underline">Talleres CUT</a>. All Rights Reserved.</span>
    </div>
</footer>

<!-- Modal de login -->
<div id="loginModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Iniciar sesión</h2>
        <form id="loginForm">
            <input type="email" id="loginEmail" class="w-full mb-3 px-3 py-2 border rounded dark:bg-gray-900 dark:text-white" placeholder="Correo electrónico" required>
            <input type="password" id="loginPassword" class="w-full mb-3 px-3 py-2 border rounded dark:bg-gray-900 dark:text-white" placeholder="Contraseña" required>
            <div class="flex justify-end space-x-2">
                <button type="button" id="closeModal" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded">Cancelar</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white px-4 py-2 rounded">Entrar</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Leer estado de sesión desde localStorage
    window.isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
    window.currentUserEmail = localStorage.getItem('currentUserEmail') || '';

    // Función para mostrar el modal y bloquear el fondo
    function showLoginModal() {
        document.getElementById('loginModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        document.querySelectorAll('a, button').forEach(el => {
            if (!el.closest('#loginModal')) {
                el.setAttribute('tabindex', '-1');
                el.style.pointerEvents = 'none';
            }
        });
        // Enfoca el input de email
        setTimeout(function() {
            var emailInput = document.getElementById('loginEmail');
            if (emailInput) emailInput.focus();
        }, 100);
    }

    // Función para ocultar el modal y restaurar el fondo
    function hideLoginModal() {
        document.getElementById('loginModal').classList.add('hidden');
        document.body.style.overflow = '';
        // Habilita todos los enlaces y botones del fondo
        document.querySelectorAll('a, button').forEach(el => {
            el.removeAttribute('tabindex');
            el.style.pointerEvents = '';
        });
    }

    // Mostrar el modal si no está logueado
    if (!window.isLoggedIn) {
        showLoginModal();
    }

    // Evitar cerrar el modal con clic fuera o ESC si no está logueado
    document.getElementById('loginModal').addEventListener('click', function(e) {
        if (!window.isLoggedIn && e.target === this) {
            e.stopPropagation();
        }
    });
    window.addEventListener('keydown', function(e) {
        if (!window.isLoggedIn && e.key === 'Escape') {
            e.preventDefault();
        }
    });

    // El botón cancelar solo cierra si está logueado
    document.getElementById('closeModal').onclick = function() {
        if (window.isLoggedIn) {
            hideLoginModal();
        }
    };

    // Validar y redirigir
    document.getElementById('loginForm').onsubmit = function(e) {
        e.preventDefault();
        var email = document.getElementById('loginEmail').value;
        window.isLoggedIn = true;
        window.currentUserEmail = email;
        localStorage.setItem('isLoggedIn', 'true');
        localStorage.setItem('currentUserEmail', email);

        // Actualizar información del usuario en el menú
        document.querySelector('#user-dropdown .text-gray-500').textContent = email;

        hideLoginModal();

        // Redirigir según el tipo de usuario
        if (email.includes('alumnos.udg')) {
            window.location.href = '/catalogo';
        } else if (email.includes('profesor.udg')) {
            window.location.href = '/tallerista/talleres';
        } else if (email.includes('coordinador.udg')) {
            window.location.href = '/admin/talleres';
        } else {
            alert('Correo no reconocido para redirección.');
            window.isLoggedIn = false;
            window.currentUserEmail = '';
            localStorage.removeItem('isLoggedIn');
            localStorage.removeItem('currentUserEmail');
            showLoginModal();
        }
    };

    // Cambiar de cuenta = volver a mostrar login
    document.getElementById('changeAccount').onclick = function(e) {
        e.preventDefault();
        window.isLoggedIn = false;
        window.currentUserEmail = '';
        localStorage.removeItem('isLoggedIn');
        localStorage.removeItem('currentUserEmail');
        showLoginModal();
    };

    // Cerrar sesión = recargar o redirigir a inicio y limpiar localStorage
    document.getElementById('signOut').onclick = function(e) {
        e.preventDefault();
        window.isLoggedIn = false;
        window.currentUserEmail = '';
        localStorage.removeItem('isLoggedIn');
        localStorage.removeItem('currentUserEmail');
        window.location.href = '/inicio';
        showLoginModal();
    };

    // Delegación de eventos para proteger toda la página
    document.addEventListener('click', function(e) {
        // Elemento real clickeado
        let target = e.target;

        // Si el click fue en un icono o span dentro de un <a> o <button>, sube al padre
        while (target && !(target.tagName === 'A' || target.tagName === 'BUTTON')) {
            target = target.parentElement;
        }

        // Si no es un enlace o botón, no hacemos nada
        if (!target) return;

        // Excepciones: elementos dentro del modal, el botón cancelar, o el donativo
        if (
            target.closest('#loginModal') ||
            target.id === 'closeModal' ||
            (target.getAttribute('href') === '/vista14')
        ) {
            return;
        }

        // Si no está logueado, bloquea y muestra el modal
        if (!window.isLoggedIn) {
            e.preventDefault();
            showLoginModal();
        }
    });

    // Botón de inscripción
    var inscribeteBtn = document.getElementById('inscribeteBtn');
    if (inscribeteBtn) {
        inscribeteBtn.addEventListener('click', function(e) {
            if (!window.isLoggedIn) {
                e.preventDefault();
                showLoginModal();
            } else {
                window.location.href = '/catalogo';
            }
        });
    }

    // Mostrar el modal de login desde el menú usuario
    document.getElementById('openLogin').onclick = function(e) {
        e.preventDefault();
        showLoginModal();
    };
});
</script>

</body>
</html>