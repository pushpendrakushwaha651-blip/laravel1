<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });
//  route UserController
// Route::post(' route name /addUser',[UserController::class , .function name 'addUser'])->name('addUser');
// 
// Route::get('/',[UserController::class , 'showUsers'])->name('home');

// Route::post('/addUser',[UserController::class , 'addUser'])->name('addUser');

// Route::get('/upadte',[UserController::class , 'updateUser']);
// Route::get('/upadtepage/{id}',[UserController::class , 'updatePage'])->name('update.page');

// Route::get('/delete/${id}',[UserController::class , 'deleteUser'])->name('delete.user');
// Route::get('/findUser/{id}',[UserController::class , 'singleUser'])->name('view.user');



Route::controller(UserController::class)->group(function(){
    // main view for all user 
    Route::get('/',  'showUsers')->name('home');

//  add user code
Route::post('/addUser',  'addUser'  )->name('addUser');
 
// updare
Route::post('/upadte/{id}',  'updateUser')->name('update.user');
Route::get('/upadtepage/{id}',  'updatePage')->name('update.page');

// delete 
Route::get('/delete/${id}', 'deleteUser')->name('delete.user');

// find 
Route::get('/findUser/{id}',  'singleUser')->name('view.user');

});

Route::view('newuser','/adduser');

// search route
Route::get('/search-users', [UserController::class, 'search'])->name('search.users');


