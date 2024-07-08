<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// GET POST => method HTTP
// slug 
  Route::get('/test',function(){
    echo 'Danh sách sản phẩm';
  });

  Route::get('/list-user',[UserController::class,'showUser']);

 // Parmams va Slug 
//slug
 Route::get('/get-user/{id}/{name?}',[UserController::class,'getUser']);
// Parmas
Route::get('/update-user',[UserController::class,'updateUser']);
// SINHVIEN 
Route::get('/sinhvien',[UserController::class,'thongtinSV']);

//
Route::group(['prefix' => 'users' ,'as' => 'users.'],function() {

  Route::get('list-users',[UserController::class,'listUsers']) ->name('listUsers');

  Route::get('add-users',[UserController::class,'addUsers']) ->name('addUsers');

  Route::post('add-users',[UserController::class,'postUsers']) ->name('postUsers');

  Route::get('delete-user/{idUser}',[UserController::class,'deleteUser']) ->name('deleteUser');
});