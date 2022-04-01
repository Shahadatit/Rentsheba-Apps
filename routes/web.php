<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\pageController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\postController;
use App\Http\Controllers\Backend\divisionController;
use App\Http\Controllers\Backend\districtController;
use App\Http\Controllers\Backend\cuntryController;
use App\Http\Controllers\Backend\userCompany;
use App\Http\Controllers\Backend\backendUserController;
use App\Http\Controllers\Backend\adminCommintController;

// Frontend Controller
use App\Http\Controllers\Frontend\frontendController;
use App\Http\Controllers\Frontend\userController;
use App\Http\Controllers\Frontend\companyController;
use App\Http\Controllers\Frontend\commentController;
use App\Http\Controllers\Frontend\favoritiesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/

Route::get('/' , [frontendController::class, 'home'])->name('home');
Route::get('/listing' , [frontendController::class, 'businessList'])->name('company-list');
Route::get('/listing/{slug}' , [frontendController::class, 'businessDetails'])->name('company-details');
Route::get('/inventory/{slug}' , [frontendController::class, 'primaryCategory'])->name('primarycatcompany');
Route::get('/blog' , [frontendController::class, 'blogList'])->name('blog-list');
Route::get('/blog-details/{slug}' , [frontendController::class, 'blogDetails'])->name('blog-details');
Route::get('/search',[frontendController::class, 'search']);
Route::get('/contact-us',[frontendController::class,'contact'])->name('contact');
Route::get('/about-us',[frontendController::class,'about'])->name('about');
Route::get('/terms-of-conditions',[frontendController::class,'termsofCondition'])->name('terms.condition');
Route::get('/privacy-policy',[frontendController::class,'privacyPolicy'])->name('privacy.policy');

// Domain Route
Route::get('/domain-name-search',[frontendController::class,'domainNameSearch'])->name('domain.name.search');
Route::get('/best-web-hosting',[frontendController::class,'webHosting'])->name('web.hosting');
Route::get('/wordpress-hosting',[frontendController::class,'wordPressHosting'])->name('wordpress.hosting');
Route::get('/vps-hosting',[frontendController::class,'vpsHosting'])->name('vps.hosting');

// Ambulance
Route::get('/ambulance-service',[frontendController::class,'ambulanceService'])->name('ambulnace-service');
Route::get('/ac-ambulance-service',[frontendController::class,'acAmbulance'])->name('ac-ambulnace');
Route::get('/non-ac-ambulance-service',[frontendController::class,'nonAcAmbulance'])->name('non-ac-ambulnace');
Route::get('/freezing-ambulance-service',[frontendController::class,'freezingAmbulance'])->name('freezing-ambulnace');
Route::get('/icu-ambulance-service',[frontendController::class,'icuAmbulance'])->name('icu-ambulnace');

// IT service pages
Route::get('/web-design',[frontendController::class,'webDesign'])->name('web-design');
Route::get('/web-development',[frontendController::class,'webDevelopment'])->name('web-development');
Route::get('/local-seo-service',[frontendController::class,'localSeoService'])->name('local.seo.service');

// Commetn Route
Route::post('/commetn-store' , [commentController::class,'store'])->name('comment.store');
Route::post('/company-commetn-store' , [companyController::class,'commentStore'])->name('companycomment.store');

Route::middleware('auth','verified')->group(function (){
    Route::group(['prefix' => '/user'],function(){
        Route::get('/dashboard' , [frontendController::class,'userDashboard'])->name('user-dashboard')->middleware('verified','auth');
        Route::get('/edit/{id}',[userController::class,'edit'])->name('customer.edit');
        Route::post('/update/{id}' , [userController::class,'update'])->name('user.update');
    });
    
    Route::get('/add-listing' , [companyController::class , 'index'] )->name('add-listing');
    Route::post('/business-store' , [companyController::class , 'store'] )->name('store-listing');
    Route::get('/listig-edit/{id}' , [companyController::class , 'edit'] )->name('edit-listing');
    Route::post('/listig-update/{id}' , [companyController::class , 'update'] )->name('update-listing');

    Route::post('/favorities' , [favoritiesController::class , 'store'])->name('favorities.store');
});



// Frontedn Route

Route::middleware('auth','role','verified')->group(function (){
    // Backend Route Group
    Route::group(['prefix' => 'admin'],function(){
        Route::get('/dashboard'  , [pageController::class , 'index'])->name('admin.dashboard');

        // Category Route
        Route::group(['prefix' => '/post'],function(){
            Route::get('/manage' , [postController::class , 'index'])->name('post.index');
            Route::get('/create' , [postController::class , 'create'])->name('post.create');
            Route::post('/store' , [postController::class , 'store'])->name('post.store');
            Route::get('/edit{id}' , [postController::class , 'edit'])->name('post.edit');
            Route::post('/update{id}' , [postController::class , 'update'])->name('post.update');
            Route::post('/destroy{id}' , [postController::class , 'destroy'])->name('post.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/business'],function(){
            Route::get('/manage' , [userCompany::class , 'index'])->name('business.index');
            Route::get('/create' , [userCompany::class , 'create'])->name('business.create');
            Route::post('/store' , [userCompany::class , 'store'])->name('business.store');
            Route::get('/edit{id}' , [userCompany::class , 'edit'])->name('business.edit');
            Route::post('/update{id}' , [userCompany::class , 'update'])->name('business.update');
            Route::post('/destroy{id}' , [userCompany::class , 'destroy'])->name('business.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/user'],function(){
            Route::get('/manage' , [backendUserController::class , 'index'])->name('user.index');
            Route::get('/edit{id}' , [backendUserController::class , 'edit'])->name('user.edit');
            Route::post('/update{id}' , [backendUserController::class , 'update'])->name('adminuser.update');
            Route::post('/destroy{id}' , [backendUserController::class , 'destroy'])->name('user.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/category'],function(){
            Route::get('/manage' , [categoryController::class , 'index'])->name('category.index');
            Route::get('/create' , [categoryController::class , 'create'])->name('category.create');
            Route::post('/store' , [categoryController::class , 'store'])->name('category.store');
            Route::get('/edit{id}' , [categoryController::class , 'edit'])->name('category.edit');
            Route::post('/update{id}' , [categoryController::class , 'update'])->name('category.update');
            Route::post('/destroy{id}' , [categoryController::class , 'destroy'])->name('category.destroy');
        });

        // Post Comment Route
        Route::group(['prefix' => '/comment'],function(){
            Route::get('/manage' , [adminCommintController::class , 'postComment'])->name('comment.index');
            Route::post('/update{id}' , [adminCommintController::class , 'update'])->name('comment.update');
            Route::post('/destroy{id}' , [adminCommintController::class , 'destroy'])->name('comment.destroy');
        });
        // Company Comment Route
        Route::group(['prefix' => '/company-comment'],function(){
            Route::get('/manage' , [adminCommintController::class , 'companyComment'])->name('companycomment.index');
            Route::post('/update{id}' , [adminCommintController::class , 'companyupdate'])->name('companycomment.update');
            Route::post('/destroy{id}' , [adminCommintController::class , 'companydestroy'])->name('companycomment.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/division'],function(){
            Route::get('/manage' , [divisionController::class , 'index'])->name('division.index');
            Route::get('/create' , [divisionController::class , 'create'])->name('division.create');
            Route::post('/store' , [divisionController::class , 'store'])->name('division.store');
            Route::get('/edit{id}' , [divisionController::class , 'edit'])->name('division.edit');
            Route::post('/update{id}' , [divisionController::class , 'update'])->name('division.update');
            Route::post('/destroy{id}' , [divisionController::class , 'destroy'])->name('division.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/district'],function(){
            Route::get('/manage' , [districtController::class , 'index'])->name('district.index');
            Route::get('/create' , [districtController::class , 'create'])->name('district.create');
            Route::post('/store' , [districtController::class , 'store'])->name('district.store');
            Route::get('/edit{id}' , [districtController::class , 'edit'])->name('district.edit');
            Route::post('/update{id}' , [districtController::class , 'update'])->name('district.update');
            Route::post('/destroy{id}' , [districtController::class , 'destroy'])->name('district.destroy');
        });

        // Category Route
        Route::group(['prefix' => '/cuntry'],function(){
            Route::get('/manage' , [cuntryController::class , 'index'])->name('cuntry.index');
            Route::get('/create' , [cuntryController::class , 'create'])->name('cuntry.create');
            Route::post('/store' , [cuntryController::class , 'store'])->name('cuntry.store');
            Route::get('/edit{id}' , [cuntryController::class , 'edit'])->name('cuntry.edit');
            Route::post('/update{id}' , [cuntryController::class , 'update'])->name('cuntry.update');
            Route::post('/destroy{id}' , [cuntryController::class , 'destroy'])->name('cuntry.destroy');
        });
    });
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
