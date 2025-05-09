<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleristaController extends Controller
{
    private function misTalleresSimulados()
    {
        return [
            [
                'id' => 1,
                'nombre' => 'Taller de Robótica',
                'descripcion' => 'Aprende a construir y programar robots.',
                'alumnos' => [
                    ['id' => 1, 'nombre' => 'Ana García'],
                    ['id' => 2, 'nombre' => 'Luis Torres'],
                ],
            ],
            [
                'id' => 2,
                'nombre' => 'Taller de Pintura',
                'descripcion' => 'Explora técnicas de pintura al óleo y acrílico.',
                'alumnos' => [
                    ['id' => 3, 'nombre' => 'María López'],
                ],
            ],
        ];
    }

    public function index()
    {
        $talleres = $this->misTalleresSimulados();
        return view('tallerista.talleres', compact('talleres'));
    }
} 