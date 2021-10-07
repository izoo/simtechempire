<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ProductsController;

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
// Route::view('/admin','admin.dashboard.index');
Auth::routes();
Route::group(['prefix' => 'admin'],function(){
    Route::get('login', [LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']],function(){
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
        Route::get('prods',function(){
            return view('admin.dashboard.products');
        });
        Route::post('update_products',[ProductsController::class,'update'])->name('update_products');

        
    });


    
});
Route::resource('products',ProductsController::class);
// Route::group(['prefix' => 'user'],function(){
// });

Route::get('/', function () {
    return view('mbele.index');
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
});
Route::get('contact', function () {
    return view('mbele.contact');
});
Route::get('about', function () {
    return view('mbele.about');
});
Route::get('services', function () {
    return view('mbele.services');
});
Route::get('reviews', function () {
    return view('mbele.reviews');
});
Route::get('shop', function () {
    return view('mbele.shop');
});
Route::get('/users_products',[ProductsController::class,'usersProducts'])->name('users_products');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
