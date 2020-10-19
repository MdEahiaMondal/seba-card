<?php


use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\backend\SliderController;
use  App\Http\Controllers\backend\ContactController;
use  App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\Frontend\ApplicationController;


// frontend area
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('apply/card', [ApplicationController::class, 'create'])->name('apply.form');

Auth::routes(['register' => false]);




// backend area
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function (){

    Route::get('/', [HomeController::class, 'index'])->name('/');

    Route::resource('sliders', SliderController::class);
    Route::get('sliders/change-status/{slider}', [SliderController::class, 'changeStatus'])->name('sliders.status');


    Route::resource('contacts', ContactController::class);
    Route::get('contacts/{contact}/change-status', [ContactController::class, 'changeStatus'])->name('contacts.status');

    Route::resource('profiles', ProfileController::class)->only(['index', 'update']);

});

