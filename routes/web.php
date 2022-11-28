<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ServiciosController;

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
    return view('auth.login');
})->middleware('auth');

Route::get('login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('login', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('register', [RegistroController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('register', [RegistroController::class, 'store'])
    ->name('register.store');

Route::get('admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    // ->middleware('guest')
    ->name('admin.index');

Route::resource('productos', ProductoController::class)
    ->middleware('auth.admin');

Route::resource('servicios', ServiciosController::class)
    ->middleware('auth.admin');

Route::resource('cargos', CargoController::class)
    ->middleware('auth.admin');

Route::resource('empleados', EmpleadosController::class)
    ->middleware('auth.admin');
