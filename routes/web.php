<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

//
Route::get('/', [HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/view_category',[AdminController::class,'viewCategory'])->name('viewCategory');
Route::post('/add_category',[AdminController::class,'addCategory']);
Route::get('/delete_Category/{id}',[AdminController::class,'deleteCategory']);

Route::get('/product_view',[AdminController::class,'productView'])->name('productView');

Route::post('/add_products',[AdminController::class,'addProducts']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

