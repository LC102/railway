@extends('layout.base')

@section('title', 'Simulación de acción')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[60vh]">
    <div class="bg-white shadow-lg rounded-lg p-8 mt-10 text-center">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">{{ $accion }} de Taller (Simulado)</h2>
        @if($id)
            <p class="text-lg text-gray-700">ID del taller: <span class="font-semibold">{{ $id }}</span></p>
        @endif
        <a href="/admin-talleres" class="mt-6 inline-block bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded transition">Volver a la lista</a>
    </div>
</div>
@endsection 