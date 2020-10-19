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
Route::get('district/select', [ApplicationController::class, 'districtSelect'])->name('district.select');
Route::get('upazila/select', [ApplicationController::class, 'upazilaSelect'])->name('upazila.select');
Route::get('union/select', [ApplicationController::class, 'unionSelect'])->name('union.select');

Auth::routes(['register' => false]);




// backend area
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function (){

    Route::get('/', [HomeController::class, 'index'])->name('/');

    Route::resource('sliders', SliderController::class);
    Route::get('sliders/change-status/{slider}', [SliderController::class, 'changeStatus'])->name('sliders.status');


    Route::resource('contacts', ContactController::class);
    Route::get('contacts/{contact}/change-status', [ContactController::class, 'changeStatus'])->name('contacts.status');

    Route::resource('profiles', ProfileController::class)->only(['index', 'update']);

    // all applications
    Route::get('/applications', [HomeController::class, 'listOfApplications'])->name('applications.lists');
    Route::get('/applications/show/{id}', [HomeController::class, 'listOfApplicationsShow'])->name('applications.lists.show');
    // active list find
    Route::get('/applications/active/list/search', [HomeController::class, 'listOfApplicationsActiveSearch'])->name('active.application.search');
    Route::get('/applications/active/list', [HomeController::class, 'listOfApplicationsActiveList'])->name('active.application.lists');


});

