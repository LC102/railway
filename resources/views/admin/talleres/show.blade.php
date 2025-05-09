@extends('layout.base')

@section('title', 'Detalle del Taller')

@section('contenido')
<div class="flex flex-col items-center justify-center min-h-[60vh]">
    <div class="bg-gray-800 shadow-lg rounded-lg p-8 mt-10 w-full max-w-lg border border-gray-700">
        <h2 class="text-2xl font-bold text-blue-300 mb-6">Detalle del Taller</h2>
        <div class="mb-4">
            <span class="block text-gray-200 font-semibold mb-1">Nombre:</span>
            <span class="text-lg text-white">{{ $taller['nombre'] }}</span>
        </div>
        <div class="mb-4">
            <span class="block text-gray-200 font-semibold mb-1">Descripción:</span>
            <span class="text-white">{{ $taller['descripcion'] }}</span>
        </div>
        <div class="mb-4">
            <span class="block text-gray-200 font-semibold mb-1">Tallerista:</span>
            <span class="text-blue-300">{{ $taller['tallerista'] }}</span>
        </div>
        <div class="flex justify-end space-x-2 mt-6">
            <a href="{{ route('admin.talleres.index') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Volver</a>
            <a href="{{ route('admin.talleres.edit', $taller['id']) }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-4 rounded">Editar</a>
        </div>
    </div>
</div>
@endsection 