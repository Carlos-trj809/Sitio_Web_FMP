<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('InicioSesion', function () {
    return view('Sesion.inicioSesion');
});

Route::get('MisionVision', function () {
    return view('Nosotros.misionVision');
});

Route::get('Directorio', function () {
    return view('Nosotros.directorio');
});

Route::get('CienciasAgronomicas', function () {
    return view('Academicos.Departamentos.CienciasAgronomicas');
});

Route::get('CienciasEconomicas', function () {
    return view('Academicos.Departamentos.CienciasEconomicas');
});

Route::get('CienciasEducacion', function () {
    return view('Academicos.Departamentos.CienciasEducacion');
});

Route::get('EstructuraOrganizativa', function () {
    return view('Nosotros.estructuraOrganizativa');
});

require __DIR__.'/auth.php';
