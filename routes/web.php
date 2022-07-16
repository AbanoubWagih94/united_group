<?php

use Illuminate\Support\Facades\Route;
use App\Models\E_Tower\Slider;
use App\Models\E_Tower\Setting;
use App\Models\E_Tower\Facility;
use App\Models\E_Tower\PageDetail;
use App\Http\Controllers\Admin\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin_panel/login', [AdminLoginController::class, 'login'])->name('login');
Route::post('/admin_panel/login', [AdminLoginController::class, 'login_post'])->name('admin_login');
Route::get('/admin_panel/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin_panel'], function () {
    require_once __DIR__ . '/admin.php';
});

Route::group(['middleware' => ['Localization:en'], 'prefix' => '/'], function () {
    require_once __DIR__ . '/user.php';
});

Route::group(['middleware' => ['Localization:ar'], 'prefix' => '/ar'], function () {
    require_once __DIR__ . '/user_ar.php';
});

Route::get('/united-group', function () {
    $setting = Setting::find(1);
    $sliders = Slider::get();
    $pageDetail = PageDetail::find(1);
    $bigBlockFacilities = Facility::where('description', '!=', NULL)->get();
    $smallBlockFacilities = Facility::where('description', NULL)->get();
    return view('front.e-tower.welcome', compact('setting', 'sliders', 'pageDetail', 'bigBlockFacilities', 'smallBlockFacilities'));
});


Route::get('/download-brochure', function () {
    $pageDetail = PageDetail::find(1);
    $file = public_path() . '/uploads/' . $pageDetail->brochure_file;
    return response()->download($file, 'brochure.pdf');
})->name('download-brochure');
