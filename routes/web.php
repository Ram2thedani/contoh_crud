<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');
});
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'show']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);
