<?php

use App\Http\Controllers\ApiRegister;
use App\Http\Controllers\ApiTodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::patch('serve/update', [ApiTodoController::class, 'update']);
Route::get('serve/createData', [ApiTodoController::class, 'createData']);
//index
Route::get('serve/index', [ApiTodoController::class, 'index']);
//read
Route::get('serve/{id}', [ApiTodoController::class, 'details']);
//create
Route::post('serve/store', [ApiTodoController::class, 'store']);
// delete
Route::delete('serve/delete', [ApiTodoController::class, 'delete']);
// update
Route::post('serve/register', [ApiRegister::class, 'register']);
