<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;
use App\Http\livewire\visualizacion;
use App\Http\Controllers\Bodegas;
use App\Http\Controllers\Bodegas_Productos;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Registrar Bodegas
Route::get('bodegas/registro', [Bodegas::class, 'formularioRegBodegas']);
Route::post('bodegas/registro', [Bodegas::class, 'registrarBodega']);
//Registrar Productos
Route::get('productos/registro', [Productos::class, 'formularioRegProductos']);
Route::post('productos/registro', [Productos::class, 'registrarProducto']);
//Asociar Productos con su Bodega
Route::get('bodegas/asociar', [Bodegas_Productos::class, 'formularioAsoPro']);
Route::post('bodegas/asociar', [Bodegas_Productos::class, 'registrarAsociacion']);
//Visualizar Productos
Route::get('visualizar', [visualizacion::class, 'render']);
//Eliminar un Producto
Route::get('eliminar/{id}', [visualizacion::class, 'borrar'])->name('destroy');
//Actualizar un Registro
Route::get('Actualizar/{id}', [visualizacion::class, 'ActualizaPro'])->name('Actual');
Route::post('registrar/{id}', [Productos::class, 'ActualizaReg'])->name('registro');