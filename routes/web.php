<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TallerController;
use App\Http\Controllers\TalleristaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Campechano Tavares Leonardo Emmanuel 

// Rutas públicas (sin autenticación)
Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio', '/paginaInicio');
Route::view('/vista14', '/nivel2/pagina14')->name('donativos'); // Página de donativos sin autenticación
Route::view('/contacto', '/nivel2/paginaContacto');
Route::view('/catalogo', '/nivel2/paginaCatalogo');
Route::view('/vista5', '/nivel2/pagina5');
Route::view('/vista6', '/nivel2/pagina6');
Route::view('/vista7', '/nivel2/pagina7');
Route::view('/vista8', '/nivel2/pagina8');
Route::view('/vista9', '/nivel2/pagina9');
Route::view('/vista10', '/nivel2/pagina10');
Route::view('/vista11', '/nivel2/pagina11');
Route::view('/vista12', '/nivel2/pagina12');
Route::view('/vista13', '/nivel2/pagina13');
Route::view('/vista15', '/nivel2/pagina15');
Route::view('/config', '/base/configuracion/info');
Route::view('/tailwind', '/flowbite');

Route::get('/admin-talleres', function () {
    // Datos simulados de talleres
    $talleres = [
        [
            'nombre' => 'Taller de Robótica',
            'descripcion' => 'Aprende a construir y programar robots.',
            'tallerista' => 'Juan Pérez',
        ],
        [
            'nombre' => 'Taller de Pintura',
            'descripcion' => 'Explora técnicas de pintura al óleo y acrílico.',
            'tallerista' => 'María López',
        ],
        [
            'nombre' => 'Taller de Música',
            'descripcion' => 'Iníciate en la guitarra y el piano.',
            'tallerista' => 'Carlos Ruiz',
        ],
    ];
    return view('admin.talleres', compact('talleres'));
});

Route::get('/admin-talleres/detalle/{id}', function ($id) {
    return view('admin.simulado', ['accion' => 'Detalle', 'id' => $id]);
});

Route::get('/admin-talleres/editar/{id}', function ($id) {
    return view('admin.editar', ['id' => $id]);
});

Route::get('/admin-talleres/eliminar/{id}', function ($id) {
    return view('admin.simulado', ['accion' => 'Eliminar', 'id' => $id]);
});

Route::get('/admin-talleres/crear', function () {
    return view('admin.crear');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('talleres', TallerController::class);
});

Route::get('/tallerista/talleres', [TalleristaController::class, 'index'])->name('tallerista.talleres');

// Rutas de autenticación
require __DIR__.'/auth.php';

