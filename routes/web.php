<?php

use App\Http\Controllers\Chef\CategoryController;
use App\Http\Controllers\Chef\DishController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\Manager\PosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;





Route::get('/', [HomeControler::class, 'index'])->name('home');
Route::get('/about', [HomeControler::class, 'about'])->name('about');
// Route::get('/about', [HomeControler::class, 'about'])->name('about');
Route::get('/get-subcategories/{categoryId}', [PosController::class, 'getSubcategories']);
Route::get('/get-subcategories-dish/{categoryId}', [DishController::class, 'getSubcategories_dish']);
Route::get('/ai_page', [HomeControler::class, 'ai_page'])->name('ai_page');
Route::get('/contact', [HomeControler::class, 'contact'])->name('contact');
Route::get('/reporting_analytics', [HomeControler::class, 'reporting_analytics'])->name('reporting_analytics');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('lead-contact/lead-store', [ContactController::class, 'leadstore'])->name('contact.leadstore');


Route::get('set-language/{locale}', function ($locale) {
    // Ensure the locale is valid ('en' or 'ar')
    if (in_array($locale, ['en', 'ar'])) {
        // Store the locale in the session
        session(['locale' => $locale]);
    }
    // Redirect back to the previous page
    return redirect()->back();
})->name('set.language');


Route::get(
    '/access-panel',
    function () {
        return view('welcome');
    }
);


// Display the list of subscriptions
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');

// Store a new subscription
Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');

// Delete a subscription
Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
require __DIR__ . '/manager-auth.php';
require __DIR__ . '/chef-auth.php';
require __DIR__ . '/waiter-auth.php';
