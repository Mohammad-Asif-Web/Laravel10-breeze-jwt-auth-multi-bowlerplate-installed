<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

// google Login  Routes
Route::get('/auth/google', [GoogleLoginController::class, 'loginWithGoogle'])->name('google.login');
Route::any('/auth/google/callback', [GoogleLoginController::class, 'callbackFromGoogle'])->name('google.callback');

// Facebook Login Routes
Route::get('/auth/facebook', [GoogleLoginController::class, 'loginWithFacebook'])->name('facebook.login');
Route::any('/auth/facebook/callback', [GoogleLoginController::class, 'callbackFromFacebook'])->name('facebook.callback');

// Github Login Routes
Route::get('/auth/github', [GoogleLoginController::class, 'loginWithGithub'])->name('github.login');
Route::any('/auth/github/callback', [GoogleLoginController::class, 'callbackFromGithub'])->name('github.callback');


Route::get('/auth/linkedin', [GoogleLoginController::class, 'loginWithLinkedin'])->name('linkedin.login');
Route::any('/auth/linkedin/callback', [GoogleLoginController::class, 'callbackFromLinkedin'])->name('linkedin.callback');


Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('email/verify/{token}', [RegisteredUserController::class, 'verifyEmailPage'])->name('email.verify');
    Route::post('email/verify/{token}', [RegisteredUserController::class, 'verifyEmail']);

    // admin login/store
    Route::get('admin/dashboard/login', [AuthenticatedSessionController::class, 'adminLogin'])
                ->name('admin.login');

    Route::post('admin/dashboard/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
