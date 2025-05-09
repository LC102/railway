@extends('layout.base')

@section('title', 'Mis Talleres')

@section('contenido')
<div class="p-6">
    <h1 class="text-2xl font-bold text-white mb-6">Mis Talleres</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($talleres as $taller)
            <div class="bg-gray-800 border border-gray-700 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-white">{{ $taller['nombre'] }}</h2>
                    <p class="text-gray-300 mb-4">{{ $taller['descripcion'] }}</p>
                    <h3 class="text-blue-300 font-semibold mb-2">Alumnos inscritos:</h3>
                    @if(count($taller['alumnos']))
                        <ul class="mb-4">
                            @foreach($taller['alumnos'] as $alumno)
                                <li class="flex justify-between items-center py-1 border-b border-gray-700 last:border-b-0">
                                    <span class="text-gray-200">{{ $alumno['nombre'] }}</span>
                                    <button class="bg-red-600 hover:bg-red-800 text-white text-xs px-2 py-1 rounded transition">Quitar</button>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-400">No hay alumnos inscritos.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 