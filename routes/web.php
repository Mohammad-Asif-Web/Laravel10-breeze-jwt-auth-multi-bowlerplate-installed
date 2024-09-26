<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\BarcodeController;
use App\Http\Controllers\Web\Backend\SettingController;

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

// free routes, they can be access from any users like guest/auth both
Route::get('/welcome', function(){
    return view('welcome');
});

// guest routes will be here
Route::middleware('guest')->group(function () {

});

// authenticated routes will be here
Route::middleware('auth')->group(function () {
    Route::get('/home', function(){
        return view('home');
    });

});

// admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Profile routes
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'show'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminController::class, 'edit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store', [AdminController::class, 'store'])->name('admin.profile.store');
    Route::post('/admin/profile/update-email', [AdminController::class, 'updateEmail'])->name('admin.profile.update.email');
    Route::post('/admin/profile/update-password', [AdminController::class, 'updatePassword'])->name('admin.profile.update.password');
    // general setting
    Route::get('/admin/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/admin/setting/update', [SettingController::class, 'update'])->name('admin.setting.update');

    // QR code
    Route::get('/admin/qr/list', [BarcodeController::class, 'index'])->name('admin.qr.index');
    Route::get('/admin/active/qr/list', [BarcodeController::class, 'ActiveCodes'])->name('admin.active.qr.index');
    Route::get('/admin/de-active/qr/list', [BarcodeController::class, 'Deactivecodes'])->name('admin.deactive.qr.index');
    Route::post('/admin/qr/generate', [BarcodeController::class, 'generate'])->name('admin.generate.qr.code');
    Route::get('/admin/qr/list/search', [BarcodeController::class, 'searchCode'])->name('admin.barcodes.search');
    Route::get('/admin/qr/{id}/print_pdf/', [BarcodeController::class, 'printPdf'])->name('admin.barcodes.print.pdf');

    // Route::delete('/admin/qr/{id}', [BarcodeController::class, 'destroy'])->name('barcodes.destroy');

    // bulk Delete for multiple and singel item
    Route::delete('/admin/qr/bulk-delete', [BarcodeController::class, 'bulkDelete'])->name('admin.barcodes.bulkDelete');



});

require __DIR__.'/auth.php';

//      http://127.0.0.1:8000/admin/dashboard/login
