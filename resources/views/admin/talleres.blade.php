@extends('layout.base')

@section('title', 'Gestionar Talleres (Simulado)')

@section('content')
<div class="bg-gradient-to-br from-blue-900 via-blue-700 to-blue-400 min-h-screen p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white drop-shadow">Gestionar Talleres (Simulado)</h1>
        <a href="/admin-talleres/crear" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded shadow transition">Crear Nuevo Taller</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($talleres as $i => $taller)
            <div class="bg-white border-2 border-blue-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-blue-900">{{ $taller['nombre'] }}</h2>
                    <p class="text-gray-700 mb-4">{{ $taller['descripcion'] }}</p>
                    <p class="text-sm text-blue-700 mb-4 font-semibold">Tallerista: {{ $taller['tallerista'] }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <a href="/admin-talleres/detalle/{{ $i+1 }}" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-sm font-semibold transition">Ver detalles</a>
                        <div class="space-x-2">
                            <a href="/admin-talleres/editar/{{ $i+1 }}" class="bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded text-sm font-semibold transition">Editar</a>
                            <a href="/admin-talleres/eliminar/{{ $i+1 }}" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded text-sm font-semibold transition">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 