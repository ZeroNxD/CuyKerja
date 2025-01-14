<?php

use App\Models\Listing;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Middleware\CheckHirerRole;
use App\Http\Controllers\ApplicantController;
use App\Http\Middleware\CheckAdminRole;
use App\Http\Middleware\CheckJobseekerRole;

Route::prefix('/CuyKerja')->group(function(){
   Route::get('/', [Controllers\HomeController::class, 'ShowPage'])->name('home')->middleware(CheckJobseekerRole::class);

   Route::get('/List', [Controllers\ListController::class, 'ShowPage'])->name('job.list')->middleware((CheckJobseekerRole::class)); 

   Route::get('/Hirer', [Controllers\JobController::class, 'ShowPage'])->name('hirer.home')->middleware('auth', CheckHirerRole::class);

   Route::resource('Hirer/ListJob', JobController::class)->middleware('auth');

   Route::get('Hirer/ListApplicant', [Controllers\ApplicantController::class, 'index2'])->name('list.applicant.hirer')->middleware('auth', CheckHirerRole::class);
   
   Route::get('/List/{id}', [Controllers\ListController::class, 'DetailJob'])->name('detail.job');

   Route::get('/Applicant', [Controllers\ApplicantController::class, 'index'])->name('Applicant.index')->middleware('auth');

   Route::get('/Applicant/{job_id}', [Controllers\ApplicantController::class, 'create'])->name('Applicant.create')->middleware('auth');

   Route::post('/ApplyJob', [Controllers\ApplicantController::class, 'store'])->name('Applicant.store');

   Route::get('Applicant/edit/{id}', [Controllers\ApplicantController::class, 'edit'])->name('Applicant.edit')->middleware('auth', CheckHirerRole::class);

   Route::put('Applicant/update/{id}', [Controllers\ApplicantController::class, 'update'])->name('Applicant.update');

   Route::delete('Applicant/delete/{id}', [Controllers\ApplicantController::class, 'destroy'])->name('Applicant.delete');

   Route::get('/Categories', [Controllers\CategoriesController::class, 'ShowPage'])->name('categories.list')->middleware((CheckJobseekerRole::class)); 

   Route::get('/Categories/{id}', [Controllers\CategoriesController::class, 'ListJob'])->name('categories.job')->middleware((CheckJobseekerRole::class));

   Route::get('/AboutUs', [Controllers\AboutUsController::class, 'ShowPage'])->middleware((CheckJobseekerRole::class)); 

   Route::get('/Login', [Controllers\UserController::class, 'Signin'])->name('login')->middleware('guest'); 

   Route::post('Login-User',[Controllers\UserController::class, 'LoginUser'])->name('LoginUser');

   Route::get('/Register', [Controllers\UserController::class, 'Register'])->name('register')->middleware('guest'); 

   Route::post('Register-User', [Controllers\UserController::class, 'StoreUser'])->name('StoreUser');

   Route::post('/LogOut', [Controllers\UserController::class, 'LogOutUser'])->name('logout')->middleware('auth');

   Route::get('/add-company', [Controllers\UserController::class, 'CreateCompanyForm'])->name('addCompanyForm')->middleware('guest');

   Route::post('/store-company', [Controllers\UserController::class, 'StoreCompany'])->name('storeCompany');

   Route::prefix('Admin')->group(function () {
      Route::get('/ListUsers', [Controllers\AdminController::class, 'ListUsers'])->name('admin.users')->middleware('auth', CheckAdminRole::class);

      Route::delete('Users/{id}', [Controllers\UserController::class, 'DeleteUser'])->name('AdminUsers.delete')->middleware('auth');

      Route::get('/ListApplicants', [Controllers\AdminController::class, 'ListApplicants'])->name('admin.applicants')->middleware('auth', CheckAdminRole::class);

      Route::get('/ListJobs', [Controllers\AdminController::class, 'ListJobs'])->name('admin.jobs')->middleware('auth', CheckAdminRole::class);

      Route::get('/ListJobs/{id}', [Controllers\AdminController::class, 'DetailJobs'])->name('admin.detailjobs')->middleware('auth', CheckAdminRole::class);

      Route::get('/ListCategories', [Controllers\AdminController::class, 'ListCategories'])->name('admin.categories')->middleware('auth', CheckAdminRole::class);

      Route::get('/ListCategories/Create', [Controllers\CategoriesController::class, 'create'])->name('admin.createcategories')->middleware('auth', CheckAdminRole::class);

      Route::post('/ListCategories/Store', [Controllers\CategoriesController::class, 'store'])->name('admin.storecategories')->middleware('auth', CheckAdminRole::class);

      Route::get('/ListCategories/edit/{id}', [Controllers\CategoriesController::class, 'edit'])->name('admin.editcategories')->middleware('auth', CheckAdminRole::class);

      Route::put('/ListCategories/update/{id}', [Controllers\CategoriesController::class, 'update'])->name('admin.updatecategories')->middleware('auth', CheckAdminRole::class);

      Route::delete('/ListCategories/delete/{id}', [Controllers\CategoriesController::class, 'destroy'])->name('admin.deletecategories')->middleware('auth', CheckAdminRole::class);
   });

   Route::get('locale/{lang}', [Controllers\LocaleController::class, 'setLocale']);
});

