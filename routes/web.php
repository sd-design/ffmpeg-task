<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

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

Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/', [UploadController::class, 'createForm']);


Route::post('/upload', [UploadController::class, 'upload_files'])->name('upload');
Route::get('/db', [UploadController::class, 'db']);
Route::get('/php', function(){
    return view('php');
});
