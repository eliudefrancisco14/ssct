<?php
use App\Http\Controllers\API\V1\FingerprintController;
use App\Models\Fingerprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('impressao/cadastrar/{id}',[FingerprintController::class, 'codigo_cadastrar']);
Route::get('impressao/reconhecer/{id}',[FingerprintController::class, 'reconhecer']);