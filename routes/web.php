<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DadospessoaisController;
use App\Http\Controllers\DadosviaturaController;
use App\Http\Controllers\FormulariosController;
use App\Http\Controllers\LivreteController;
use App\Http\Controllers\PasseController;
use App\Http\Controllers\PlacaController;
use App\Http\Controllers\Site\TaxistaController;
use App\Http\Controllers\TabelasController;
use App\Http\Controllers\TaxiController;
use App\Http\Controllers\UsersController;
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

/*Route::get('/', function () {
    return view('welcome');*/

Route::middleware(['auth', 'verified'])->prefix('/admin')->group(function () {
  Route::get('', [TabelasController::class, 'index'])->name('admin.dashboard');
  Route::get('/logs', [TabelasController::class, 'log'])->name('admin.logs');
  Route::post('/pdf/log', [TabelasController::class, 'pdflog'])->name('admin.pdf.log');
  
        
  Route::prefix('/taxistas')->group(function () {
    Route::get('', [TaxiController::class, 'index'])->name('admin.taxistas');
    Route::get('/create', [TaxiController::class, 'create'])->name('admin.taxistas.create');
    Route::post('', [TaxiController::class, 'store'])->name('admin.taxistas.store');
    Route::get('/{id}/edit', [TaxiController::class, 'edit'])->where('id', '[0-9]+')->name('admin.taxistas.edit');
    Route::put('/{id}', [TaxiController::class, 'update'])->where('id', '[0-9]+')->name('admin.taxistas.update');
    Route::delete('/{id}', [TaxiController::class, 'destroy'])->where('id', '[0-9]+')->name('admin.taxistas.destroy');
    Route::get('muda_estado/{id}/{estado}', [TaxiController::class, 'muda_estado'])->where('id', '[0-9]+')->name('admin.taxistas.muda_estado');
    Route::post('/pdf', [TaxiController::class, 'taxista'])->name('pdf.taxistas');
    Route::get('/pdf/taxistaDoc/{id}', [TaxiController::class, 'taxistaDoc'])->name('admin.pdf.taxistaDoc');
  });
  Route::prefix('/livretes')->group(function () {
    Route::get('', [LivreteController::class, 'index'])->name('admin.livretes');
    Route::get('/create', [LivreteController::class, 'create'])->name('admin.livretes.create');
    Route::post('', [LivreteController::class, 'store'])->name('admin.livretes.store');
    Route::get('/{id}/edit', [LivreteController::class, 'edit'])->where('id', '[0-9]+')->name('admin.livretes.edit');
    Route::put('/{id}', [LivreteController::class, 'update'])->where('id', '[0-9]+')->name('admin.livretes.update');
    Route::delete('/{id}', [LivreteController::class, 'destroy'])->where('id', '[0-9]+')->name('admin.livretes.destroy');
    Route::get('/pdf/livreteDoc/{id}', [LivreteController::class, 'livreteDoc'])->name('admin.pdf.livreteDoc');
  });
  Route::prefix('/titulos')->group(function () {
    Route::get('', [AdminsController::class, 'index'])->name('admin.titulos');
    Route::get('/create', [AdminsController::class, 'create'])->name('admin.titulos.create');
    Route::post('', [AdminsController::class, 'store'])->name('admin.titulos.store');
    Route::get('/{id}/edit', [AdminsController::class, 'edit'])->where('id', '[0-9]+')->name('admin.titulos.edit');
    Route::put('/{id}', [AdminsController::class, 'update'])->where('id', '[0-9]+')->name('admin.titulos.update');
    Route::delete('/{id}', [AdminsController::class, 'destroy'])->where('id', '[0-9]+')->name('admin.titulos.destroy');
  });

  Route::prefix('/users')->group(function () {
    Route::get('', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/create', [UsersController::class, 'create'])->name('admin.users.create');
    Route::post('', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])->where('id', '[0-9]+')->name('admin.users.edit');
    Route::put('/{id}', [UsersController::class, 'update'])->where('id', '[0-9]+')->name('admin.users.update');
    Route::delete('/{id}', [UsersController::class, 'destroy'])->where('id', '[0-9]+')->name('admin.users.destroy');
  });

  Route::prefix('/placas')->group(function () {
    Route::get('', [PlacaController::class, 'index'])->name('admin.placas');
    Route::get('/create', [PlacaController::class, 'create'])->name('admin.placas.create');
    Route::post('', [PlacaController::class, 'store'])->name('admin.placas.store');
    Route::get('/{id}/edit', [PlacaController::class, 'edit'])->where('id', '[0-9]+')->name('admin.placas.edit');
    Route::put('/{id}', [PlacaController::class, 'update'])->where('id', '[0-9]+')->name('admin.placas.update');
    Route::delete('/{id}', [PlacaController::class, 'destroy'])->where('id', '[0-9]+')->name('admin.placas.destroy');
  });
});


/////Rotas sem usa ainda----//
Route::prefix('/formulario')->group(function () {
  //////Rota para qualquer coisa--------//não está a ser usada
  Route::prefix('/dadospessoais')->group(function () {
    Route::get('', [DadospessoaisController::class, 'index'])->name('formulario.dadospessoais');
  });

  ///////Rota para qualquer outra coisa--------//não está a ser usada

  Route::prefix('/dadosviaturas')->group(function () {
    Route::get('', [DadosviaturaController::class, 'index'])->name('formulario.dadosviaturas');
  });
  Route::get('/create', [DadosviaturaController::class, 'create'])->name('formulario.dadosviaturas.create');
  Route::post('', [DadosviaturaController::class, 'store'])->name('formulario.dadosviaturas.store');
});

////Rota do Cadastro geral dos taxistas--------------///
Route::prefix('/site')->group(function () {
  Route::get('', [TaxistaController::class, 'index'])->name('site');
  Route::get('/create', [TaxistaController::class, 'create'])->name('site.create');
  Route::post('', [TaxistaController::class, 'store'])->name('site.store');
});

/////Rota da página principal------------------------//

Route::get('/', function () {
  return view('welcome');
})->name('welcome');

////////Rota para os relatórios-----------------------------------//

Route::get('/gerar-pdf-relatorio', [RelatorioController::class, 'gerarPdf'])->name('relatorio.gerar-pdf');

/* ////-Rota do login e dos register---------------------------------------//
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::view('/forgot-password', 'auth.forgot-password')->name('password.email');
Route::post('/forgot-password', [PasseController::class, 'forgot-password'])->name('password.email');;
Route::view('/reset-password', 'auth.reset-password')->name('password.reset');
Route::post('/reset-password', [PasseController::class, 'resetPassword']);

// Rota padrão para usuários não autenticados
Route::middleware(['guest'])->group(function () {
  Route::view('/login', 'auth.login')->name('login');
  Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
  Route::view('/reset-password', 'auth.reset-password')->name('password.reset');
});


Route::middleware('auth:sanctum')->group(function () {
  Route::get('logout', [AuthController::class, 'logout'])->name('logout');
}); */

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
  Route::get('dashboard', function () {
    return view('admin.index');
  })->name('dashboard');
});
