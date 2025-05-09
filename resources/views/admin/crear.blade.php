@extends('layout.base')

@section('title', 'Crear Taller (Simulado)')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[60vh]">
    <div class="bg-white shadow-lg rounded-lg p-8 mt-10 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-blue-800 mb-6">Crear Nuevo Taller (Simulado)</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nombre del taller</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Ejemplo: Taller de Robótica" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea class="w-full border rounded px-3 py-2" rows="3" placeholder="Describe el taller..." required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tallerista</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Nombre del tallerista" required>
            </div>
            <div class="flex justify-end space-x-2">
                <a href="/admin-talleres" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded">Crear</button>
            </div>
        </form>
    </div>
</div>
@endsection 