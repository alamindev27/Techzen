<?php

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









// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.index');

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




});


// User Routes
Route::group(['middleware' => ['auth', 'is_user', 'is_blocked']], function(){
    Route::get('/dashboard', [UserHomeController::class, 'index'])->name('user.index');
});
