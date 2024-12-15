<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::prefix('/CuyKerja')->group(function(){
   Route::get('/', [Controllers\HomeController::class, 'ShowPage'])->name('home');

   Route::get('/List', [Controllers\ListController::class, 'ShowPage'])->name('job.list'); 
   
   Route::get('/List/{id}', [Controllers\ListController::class, 'DetailJob'])->name('detail.job');

   Route::get('/Categories', [Controllers\CategoriesController::class, 'ShowPage'])->name('categories.list'); 

   Route::get('/Categories/{id}', [Controllers\CategoriesController::class, 'ListJob'])->name('categories.job');

   Route::get('/AboutUs', [Controllers\AboutUsController::class, 'ShowPage']); 

   Route::get('/SignIn', [Controllers\SigninController::class, 'ShowPage']); 

   Route::get('/Register', [Controllers\RegisterController::class, 'ShowPage']); 
});