@extends('layout.base')

@section('title', 'Gestionar Talleres')

@section('contenido')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Gestionar Talleres</h1>
        <a href="{{ route('admin.talleres.create') }}" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded shadow transition">Crear Nuevo Taller</a>
    </div>

    @if(session('success'))
        <div class="bg-green-900 border border-green-700 text-green-200 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($talleres as $taller)
            <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-white">{{ $taller['nombre'] }}</h2>
                    <p class="text-gray-300 mb-4">{{ $taller['descripcion'] }}</p>
                    <p class="text-sm text-blue-300 mb-4 font-semibold">Tallerista: {{ $taller['tallerista'] }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <a href="{{ route('admin.talleres.show', $taller['id']) }}" class="bg-blue-600 hover:bg-blue-800 text-white py-1 px-3 rounded text-sm font-semibold transition">Ver detalles</a>
                        <div class="space-x-2">
                            <a href="{{ route('admin.talleres.edit', $taller['id']) }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 py-1 px-3 rounded text-sm font-semibold transition">Editar</a>
                            <form action="{{ route('admin.talleres.destroy', $taller['id']) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-800 text-white py-1 px-3 rounded text-sm font-semibold transition" onclick="return confirm('¿Seguro que quieres eliminar este taller?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 