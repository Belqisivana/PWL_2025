<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

Route::get('/hello', [WelcomeController::class,'hello']);

/*Route::get('/hello', function () {
    return 'Hello World';
});*/

Route::get('/world', function () {
    return 'World';
});
 
Route::get('/SelamatDatang', [PageController::class,'SelamatDatang']);

/*Route::get('/SelamatDatang', function () {
    return 'Selamat Datang';
});*/

Route::get('/about', [PageController::class,'about']);

/*Route::get('/about', function () {
    return 'Nama: Belqis Ivana Fidelia Arfany <br> Nim: 2341760075';
});*/

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
  
Route::get('/articles/{id}', [PageController::class,'articles']);

/*Route::get('/articles/{id}', function ($articlesId) {
    return 'id ke-'.$articlesId;
});*/

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
    
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);

    
    