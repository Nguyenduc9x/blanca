<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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


Route::get('/login', [CustomAuthController::class,'login']);
Route::get('/registration', [CustomAuthController::class,'registration']);
Route::post('/register-author',[CustomAuthController::class,'registerAuthor'])->name('register-author');
Route::post('/login-author',[CustomAuthController::class,'loginAuthor'])->name('login-author');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/user/changepassword',[UserController::class,'changepassword'])->name('change-password');
Route::get('/myprofile',[UserController::class,'myprofile'])->name('my-profile');

