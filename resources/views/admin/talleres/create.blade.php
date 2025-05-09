@extends('layout.base')

@section('title', 'Crear Taller')

@section('contenido')
<div class="flex flex-col items-center justify-center min-h-[60vh]">
    <div class="bg-gray-800 shadow-lg rounded-lg p-8 mt-10 w-full max-w-lg border border-gray-700">
        <h2 class="text-2xl font-bold text-blue-300 mb-6">Crear Nuevo Taller</h2>
        <form action="{{ route('admin.talleres.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-200 font-semibold mb-2">Nombre del taller</label>
                <input type="text" name="nombre" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-900 text-white" placeholder="Ejemplo: Taller de Robótica" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-200 font-semibold mb-2">Descripción</label>
                <textarea name="descripcion" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-900 text-white" rows="3" placeholder="Describe el taller..." required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-200 font-semibold mb-2">Tallerista</label>
                <input type="text" name="tallerista" class="w-full border border-gray-600 rounded px-3 py-2 bg-gray-900 text-white" placeholder="Nombre del tallerista" required>
            </div>
            <div class="flex justify-end space-x-2">
                <a href="{{ route('admin.talleres.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded">Crear</button>
            </div>
        </form>
    </div>
</div>
@endsection 