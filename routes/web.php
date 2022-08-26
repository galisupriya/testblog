<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;



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


Route::get('/',function(){
    return view('form');
});


Route::get('users',[userController::class,'getData']);

Route::view('home','home')->middleware('protectedPage');
Route::view('contact','contact');
Route::view('noaccess','noaccess');

// Route::group(['middleware'=>['protectedView']],function(){
//         Route::view('contact','contact');
// });



// Route::get('/{name}', function ($name) {
//     return view('about',['user'=>$name]);
// });

// Route::get('users/{user}',[Users::class,'index']);

// Route::view('about','about');

// Route::view('contact','contact');

// Route::get('/about',function()
// {
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });
