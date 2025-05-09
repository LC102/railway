<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TallerController extends Controller
{
    private function talleresSimulados()
    {
        return [
            [
                'id' => 1,
                'nombre' => 'Taller de Robótica',
                'descripcion' => 'Aprende a construir y programar robots.',
                'tallerista' => 'Juan Pérez',
            ],
            [
                'id' => 2,
                'nombre' => 'Taller de Pintura',
                'descripcion' => 'Explora técnicas de pintura al óleo y acrílico.',
                'tallerista' => 'María López',
            ],
            [
                'id' => 3,
                'nombre' => 'Taller de Música',
                'descripcion' => 'Iníciate en la guitarra y el piano.',
                'tallerista' => 'Carlos Ruiz',
            ],
        ];
    }

    public function index()
    {
        $talleres = $this->talleresSimulados();
        return view('admin.talleres.index', compact('talleres'));
    }

    public function create()
    {
        return view('admin.talleres.create');
    }

    public function store(Request $request)
    {
        // Aquí iría la lógica para guardar en BD, pero solo simulamos
        return redirect()->route('admin.talleres.index')->with('success', 'Taller creado (simulado)');
    }

    public function show($id)
    {
        $taller = collect($this->talleresSimulados())->firstWhere('id', $id);
        return view('admin.talleres.show', compact('taller'));
    }

    public function edit($id)
    {
        $taller = collect($this->talleresSimulados())->firstWhere('id', $id);
        return view('admin.talleres.edit', compact('taller'));
    }

    public function update(Request $request, $id)
    {
        // Aquí iría la lógica para actualizar en BD, pero solo simulamos
        return redirect()->route('admin.talleres.index')->with('success', 'Taller actualizado (simulado)');
    }

    public function destroy($id)
    {
        // Aquí iría la lógica para eliminar en BD, pero solo simulamos
        return redirect()->route('admin.talleres.index')->with('success', 'Taller eliminado (simulado)');
    }
} 