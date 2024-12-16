<?php

use App\Models\Listing;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::prefix('/CuyKerja')->group(function(){
   Route::get('/', [Controllers\HomeController::class, 'ShowPage'])->name('home');

   Route::get('/List', [Controllers\ListController::class, 'ShowPage'])->name('job.list'); 

   Route::get('/Hirer', [Controllers\JobController::class, 'ShowPage'])->name('hirer.home');

   Route::resource('Hirer/ListJob', JobController::class);
   
   Route::get('/List/{id}', [Controllers\ListController::class, 'DetailJob'])->name('detail.job');

   Route::get('/Categories', [Controllers\CategoriesController::class, 'ShowPage'])->name('categories.list'); 

   Route::get('/Categories/{id}', [Controllers\CategoriesController::class, 'ListJob'])->name('categories.job');

   Route::get('/AboutUs', [Controllers\AboutUsController::class, 'ShowPage']); 

   Route::get('/SignIn', [Controllers\SigninController::class, 'ShowPage']); 

   Route::get('/Register', [Controllers\RegisterController::class, 'ShowPage']); 

   
});