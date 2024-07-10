<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LAB2;

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
//   Route::get('/test',function(){
//     echo 'Danh sách sản phẩm';
//   });

//   Route::get('/list-user',[UserController::class,'showUser']);

//  // Parmams va Slug 
// //slug
//  Route::get('/get-user/{id}/{name?}',[UserController::class,'getUser']);
// // Parmas
// Route::get('/update-user',[UserController::class,'updateUser']);
// // SINHVIEN 
// Route::get('/sinhvien',[UserController::class,'thongtinSV']);

//
// Route::group(['prefix' => 'users' ,'as' => 'users.'],function() {

//   Route::get('list-users',[UserController::class,'listUsers']) ->name('listUsers');

//   Route::get('add-users',[UserController::class,'addUsers']) ->name('addUsers');

//   Route::post('add-users',[UserController::class,'postUsers']) ->name('postUsers');

//   Route::get('delete-user/{idUser}',[UserController::class,'deleteUser']) ->name('deleteUser');

//   Route::get('edit-user/{idUser}',[UserController::class,'editUsers']) ->name('editUsers');

//   Route::post('update-user/{idUser}',[UserController::class,'updateUsers']) ->name('updateUsers');
// });

Route::group(['prefix' => 'product' ,'as' => 'product.'],function() {

  Route::get('list-user',[LAB2::class,'listUser']) ->name('listUser');

  Route::get('add-user',[LAB2::class,'addUser']) ->name('addUser');

  Route::post('add-user',[LAB2::class,'postUser']) ->name('postUser');

  Route::get('delete-user /{idUser}',[LAB2::class,'deleteUser']) ->name('deleteUser');

  Route::get('edit-user/{idUser}',[LAB2::class,'editUser']) ->name('editUser');

  Route::post('update-user/{idUser}',[LAB2::class,'updateUser']) ->name('updateUser');

  Route::get('search-product',[LAB2::class,'searchProduct']) ->name('searchProduct');
});