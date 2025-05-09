<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Talleres')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="/" class="flex items-center py-4">
                            <span class="font-semibold text-gray-500 text-lg">Sistema de Talleres</span>
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    @auth
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('talleres.index') }}" class="py-2 px-4 text-gray-500 hover:text-gray-700">Gestionar Talleres</a>
                        @elseif(auth()->user()->isTallerista())
                            <a href="{{ route('talleres.mis-talleres') }}" class="py-2 px-4 text-gray-500 hover:text-gray-700">Mis Talleres</a>
                        @else
                            <a href="{{ route('talleres.disponibles') }}" class="py-2 px-4 text-gray-500 hover:text-gray-700">Talleres Disponibles</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="py-2 px-4 text-gray-500 hover:text-gray-700">Cerrar Sesión</button>
                        </form>
                    @else
                        {{-- <a href="{{ route('login') }}" class="py-2 px-4 text-gray-500 hover:text-gray-700">Iniciar Sesión</a>
                        <a href="{{ route('register') }}" class="py-2 px-4 text-gray-500 hover:text-gray-700">Registrarse</a> --}}
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto mt-6 px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html> 