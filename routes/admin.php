<?php

Route::group(['prefix' => 'admin'],function(){
    Route::get('login', [LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class,'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });
})
?>