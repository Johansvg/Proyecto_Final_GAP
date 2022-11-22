<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PedidosController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('AdminGeneral', GeneralController::class);
Route::resource('productos', ProductoController::class);
Route::resource('centros', CentroController::class);
Route::resource('cargos', CargoController::class);
Route::resource('empleados', EmpleadosController::class);
Route::resource('servicios', ServiciosController::class);
Route::resource('agenda', AgendaController::class);
Route::resource('almacen', AlmacenController::class);
Route::resource('administrador', AdminController::class);
Route::resource('pedidos', PedidosController::class);