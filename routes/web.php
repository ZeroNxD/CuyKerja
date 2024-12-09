<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::prefix('/CuyKerja')->group(function(){
   Route::get('/', [Controllers\HomeController::class, 'ShowPage']); 
   Route::get('/List', [Controllers\ListController::class, 'ShowPage']); 
   Route::get('/Categories', [Controllers\CategoriesController::class, 'ShowPage']); 
   Route::get('/AboutUs', [Controllers\AboutUsController::class, 'ShowPage']); 
   Route::get('/SignIn', [Controllers\SigninController::class, 'ShowPage']); 
   Route::get('/Register', [Controllers\RegisterController::class, 'ShowPage']); 
});