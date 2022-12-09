<?php

use App\Http\Controllers\CustomUserController;
use Illuminate\Auth\Events\Logout;
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


Route::get('/login', [CustomUserController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomUserController::class,'registration'])->middleware('alreadyLoggedIn');;
Route::post('/register-user',[CustomUserController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomUserController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomUserController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/user/changepassword',[CustomUserController::class,'changepassword'])->name('change-password');
Route::get('/myprofile',[CustomUserController::class,'myprofile'])->name('my-profile');
Route::get('/userlist',[CustomUserController::class,'userlist'])->name('user-list');
Route::get('/logout',[CustomUserController::class,'logout']);
