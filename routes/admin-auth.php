
<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\ContactRequestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DetailsController;
use App\Http\Controllers\Admin\ManagerRequestController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    // Admin Registration Routes
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    // Admin Login Routes
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // Forgot Password Routes
    Route::get('forgot-password', [AuthenticatedSessionController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('forgot-password', [AuthenticatedSessionController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset Password Routes
    Route::get('reset-password/{token}', [AuthenticatedSessionController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('reset-password', [AuthenticatedSessionController::class, 'resetPassword'])->name('password.update');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('profile-setting',[ProfileController::class,'index'])->name('profile-setting');

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['verified'])->name('dashboard');

    Route::get('/restaurant-details{id}', [DetailsController::class, 'restaurant_details'])->name('restaurant_details');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/manager-Requests', [ManagerRequestController::class, 'manager_request'])->name('manager_request');
    Route::post('/approve-manager', [ManagerRequestController::class, 'approveManager'])->name('manager.approve');

    Route::controller(ContactRequestController::class)->as('contact.')->group(function () {
        Route::get('/contact-Requests', 'contact_request')->name('contact_request');
        Route::get('delete-Requests/{id}', 'destroy')->name('destroy');
        Route::get('/lead_contact-Requests', 'lead_contact_request')->name('lead_contact_request');
        Route::get('lead-delete-Requests/{id}', 'lead_destroy')->name('lead_destroy');
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// AJAX routes for Dashboard data
Route::get('/admin/print-total-leads', [DashboardController::class, 'printTotalLeadsData'])->name('print.total.leads');
Route::get('/admin/print-weekly-leads', [DashboardController::class, 'printWeeklyLeadsData'])->name('print.weekly.leads');

