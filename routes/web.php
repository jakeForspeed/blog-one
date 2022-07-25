<?php

use Illuminate\Support\Facades\Route;

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
})->name('landing.page');

Route::group(['middleware' => 'auth'],function(){

    Route::middleware('is.admin')->prefix('admin')->as('admin.')->group(function(){

        Route::get('dashboard',function(){ return view('backend.dashboard'); })->name('dashboard');
        Route::get('product/index',function(){ return view('backend.product.index'); })->name('product.index');
    
    });

});

Route::get('one',function(){ return view('frontend.one'); })->name('page.one');
Route::get('two',function(){ return view('frontend.two'); })->name('page.two');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
