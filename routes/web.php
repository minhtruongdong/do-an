<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.pages.home');
});

Route::prefix('auth')->name('auth.')->group(function(){
    Route::get('login',[LoginController::class,'showLogin'])->name('showLogin');
    Route::post('login',[LoginController::class,'login'])->name('login');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});

Route::middleware(CheckLogin::class)->group(function(){
    Route::prefix('admin') -> name('admin.' ) -> group(function(){
        Route::prefix('dash') -> name('dash.') ->controller(DashBoardController::class)->group(function(){
            Route::get('index','index')->name('index');
        });
        Route::prefix('profile') -> name('profile.') ->controller(AdminProfileController::class)->group(function(){
            Route::get('index','index')->name('index');
        });

        Route::prefix('category') -> name('category.') ->controller(CategoryController::class)->group(function(){
            Route::get('index','index')->name('index');
    
            Route::get('create','create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    
        Route::prefix('product') -> name('product.') ->controller(ProductController::class)->group(function(){
            Route::get('index','index')->name('index');
    
            Route::get('create','create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');

            Route::post('upload-file/{id}', 'uploadFile')->name('uploadFile');
            Route::get('delete-file/{id}', 'deleteFile')->name('deleteFile');

            Route::get('search','search')->name('search');
        });
        
        Route::prefix('user') -> name('user.') ->controller(UserController::class)->group(function(){
            Route::get('index','index')->name('index');
    
            Route::get('create','create')->name('create');
            Route::post('store', 'store')->name('store');
    
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
    
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    });
});


Route::prefix('client') -> name('client.')->controller(ClientController::class) -> group(function(){
    Route::get('index','index')->name('index');
    Route::get('about','about')->name('about');
    Route::get('category','category')->name('category');
    Route::get('productdetail','productdetail')->name('productdetail');
    Route::get('checkout','checkout')->name('checkout');
    Route::get('contact','contact')->name('contact');
});
