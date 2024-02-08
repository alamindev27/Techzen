<?php

use App\Http\Controllers\Admin\AdminAttributeController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminColorController;
use App\Http\Controllers\Admin\AdminCouponController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSubCategoryController;
use App\Http\Controllers\FrontnedContrller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserHomeController;
use App\Models\Banner;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    // composer dump-autoload
    dd('Done');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/', [FrontnedContrller::class, 'index'])->name('frontend.index');
Route::get('product/{slug}/details', [FrontnedContrller::class, 'details'])->name('frontend.product.details');









// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.index');
    Route::get('/customars', [AdminHomeController::class, 'listCustomar'])->name('admin.customar.index');
    Route::get('/customar/create', [AdminHomeController::class, 'createCustomar'])->name('admin.customar.create');
    Route::post('/customar/store', [AdminHomeController::class, 'storeCustomar'])->name('admin.customar.store');
    Route::get('/customar/{id}/edit', [AdminHomeController::class, 'editCustomar'])->name('admin.customar.edit');
    Route::post('/customar/{id}/Update', [AdminHomeController::class, 'UpdateCustomar'])->name('admin.customar.update');

    // Admin Setting Routes
    Route::get('/site-setting', [AdminSettingController::class, 'siteSetting'])->name('admin.setting.site');
    Route::post('/site-setting', [AdminSettingController::class, 'siteSettingUpdate'])->name('admin.setting.siteUpdate');
    Route::get('/general-setting', [AdminSettingController::class, 'generalSetting'])->name('admin.setting.general');
    Route::post('/general-setting', [AdminSettingController::class, 'generalSettingUpdate'])->name('admin.setting.generalUpdate');
    Route::get('/security-setting', [AdminSettingController::class, 'securitySetting'])->name('admin.setting.security');
    Route::post('/security-setting', [AdminSettingController::class, 'securitySettingUpdate'])->name('admin.setting.securityUpdate');
    Route::get('/site-meta-setting', [AdminSettingController::class, 'siteMetaSetting'])->name('admin.setting.siteMeta');
    Route::post('/site-meta-setting', [AdminSettingController::class, 'siteMetaSettingUpdate'])->name('admin.setting.siteMetaUpdate');
    Route::get('/custom', [AdminSettingController::class, 'custom'])->name('admin.setting.custom');
    Route::post('/custom', [AdminSettingController::class, 'customUpdate'])->name('admin.setting.customUpdate');

    // Admin Category Routes
    Route::resource('category', AdminCategoryController::class);
    Route::resource('subcategory', AdminSubCategoryController::class);
    Route::resource('brand', AdminBrandController::class);
    Route::resource('product', AdminProductController::class);
    Route::post('/getSubCategory', [AdminProductController::class, 'getSubCategory'])->name('admin.product.getSubCategory');
    Route::resource('color', AdminColorController::class);
    Route::resource('coupon', AdminCouponController::class);
    Route::resource('banner', AdminBannerController::class);
    Route::resource('attributes', AdminAttributeController::class);
    Route::get('/attribute/{id}/add-new', [AdminAttributeController::class, 'addNewAttributes'])->name('admin.attribute.addNew');
    Route::post('/attribute/{id}/store-new', [AdminAttributeController::class, 'storeNewAttributes'])->name('admin.attribute.storeNew');
    Route::get('/varient/{id}/edit', [AdminAttributeController::class, 'varientEdit'])->name('admin.varient.edit');
    Route::post('/varient/{id}/update', [AdminAttributeController::class, 'varientUpdate'])->name('admin.varient.update');
    Route::get('/varient/{id}/delete', [AdminAttributeController::class, 'varientDelete'])->name('admin.varient.delete');




});


// User Routes
Route::group(['middleware' => ['auth', 'is_user', 'is_blocked']], function(){
    Route::get('/dashboard', [UserHomeController::class, 'index'])->name('user.index');
});
