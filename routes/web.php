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

Route::controller(CustomUserController::class)->group(function(){
    Route::get('login','login');
    Route::get('registration', 'registration');
    Route::post('register-user','registerUser')->name('register-user');
    Route::post('login-user','loginUser')->name('login-user');
    Route::get('logout','logout');
    Route::get('dashboard','dashboard');
    Route::get('userlist','userlist')->name('user-list');
    Route::get('myprofile','myprofile')->name('my-profile');
    Route::post('myprofile-upload','profileUpdate')->name('myprofile-upload');
    Route::get('changepassword','changepassword')->name('change-password');
    Route::post('user-changepassword','userchangepassword')->name('user-changepassword');
    Route::post('useredit','useredit')->name('user-edit');
 
    Route::get('/getusers', 'getUsers');
     
    Route::patch('/update/{id}', ['as' => 'item.update', 'uses' => 'update']);
     
    Route::delete('/delete/{id}', ['as' => 'item.delete', 'uses' => 'delete']);


    Route::get('postlist','postlist')->name('post-list');
    Route::get('addpost','newpost')->name('new-post');
    Route::get('category','category')->name('list-category');

    Route::post('/addnewpost', 'addpost')->name('add-post');
    Route::post('add','addnew');
});
 


