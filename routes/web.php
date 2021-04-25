<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProvedoresController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
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
});

Route::middleware(['auth:sanctum', 'verified'])->resource('dash', DashController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('proveedores', ProvedoresController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('clientes', ClientesController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('Productos', ProductosController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('usuarios', UsuariosController::class);
