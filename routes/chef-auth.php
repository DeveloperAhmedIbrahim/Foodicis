<?php

use App\Http\Controllers\Chef\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Chef\Auth\RegisteredUserController;
use App\Http\Controllers\Chef\CategoryController;
use App\Http\Controllers\Chef\DishController;
use App\Http\Controllers\Chef\PrepareDishController;
use App\Http\Controllers\Chef\ProfileController;
use App\Http\Controllers\Chef\SubcategoryController;
use Illuminate\Events\Dispatcher;
use App\Http\Controllers\Chef\ChefOrderController;
use App\Http\Controllers\Chef\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:chef')->prefix('chef')->name('chef.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('password/forgot', [AuthenticatedSessionController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [AuthenticatedSessionController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [AuthenticatedSessionController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [AuthenticatedSessionController::class, 'reset'])->name('password.update');
});
Route::get('ingredients/{id}/stock', [PrepareDishController::class, 'getStockAvailability'])->name('ingredients.stock');

Route::middleware(['auth:chef'])->prefix('chef')->name('chef.')->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('chef_panel.admin_dashboard.dashboard');
    // })->middleware(['verified'])->name('dashboard');
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'index'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::controller(CategoryController::class)->as('Category.')->group(function () {

        Route::get('/all-Category',  'index')->name('all-Category');
        Route::get('/add-Category',  'add_Category')->name('add-Category');
        Route::post('/save-Category',  'store')->name('store_Category');
        Route::get('edit-Category/{id}', 'edit')->name('editCategory');
        // Route::post('update-Category/{id}', 'update')->name('updateCategory');
        Route::get('delete-Category/{id}', 'deleteCategory')->name('deleteCategory');
    });

    Route::controller(SubcategoryController::class)->as('Subcategory.')->group(function () {

        Route::get('/all-Subcategory',  'index')->name('all-Subcategory');
        Route::get('/add-Subcategory',  'add_Subcategory')->name('add-Subcategory');
        Route::post('/save-Subcategory',  'store')->name('store_Subcategory');
        Route::get('edit-Subcategory/{id}', 'edit')->name('editSubcategory');
        // Route::post('update-Subcategory/{id}', 'update')->name('updateSubcategory');
        Route::get('delete-Subcategory/{id}', 'deleteSubcategory')->name('deleteSubcategory');
    });
    Route::controller(DishController::class)->as('dish.')->group(function () {

        Route::get('/all-dish',  'index')->name('all-dish');
        Route::get('/add-dish',  'add_dish')->name('add-dish');
        Route::post('/save-dish',  'store')->name('store_dish');
        Route::get('edit-dish/{id}', 'edit')->name('editdish');
        // Route::post('update-dish/{id}', 'update')->name('updatedish');
        Route::get('delete-dish/{id}', 'deletedish')->name('deletedish');
    });
    Route::controller(PrepareDishController::class)->as('PrepareDish.')->group(function () {

        Route::get('/all-PrepareDish',  'index')->name('index');
        Route::get('/add-PrepareDish',  'add')->name('add');
        Route::post('/save-PrepareDish',  'store')->name('store');
        Route::get('edit-PrepareDish/{id}', 'edit')->name('edit');
        // Route::post('update-dish/{id}', 'update')->name('updatedish');
        Route::get('delete-PrepareDish/{id}', 'destroy')->name('destroy');
    });

    Route::controller(OrderController::class)->as('orders.')->group(function () {

        Route::get('/active-order',  'active_order')->name('active_order');
        Route::get('/completed-order',  'completed_order')->name('completed_order');
    });



    // Route::middleware(['auth:chef'])->name('orders.')->group(function () {
    //     // Store Order Route
    //     Route::post('/store-order', [ChefOrderController::class, 'store_order'])->name('store.order');

    //     // Grouped routes for order actions (list, active, completed, cancelled, pending)
    //     Route::controller(ChefOrderController::class)->group(function () {
    //         Route::get('/all-order', 'list')->name('index');
    //         Route::get('/active-order', 'active_order')->name('active_order');
    //         Route::get('/completed-order', 'completed_order')->name('completed_order');
    //         Route::get('/cancelled-order', 'cancelled_order')->name('cancelled_order');
    //         Route::get('/pending-order', 'pending_order')->name('pending_order');
    //     });
    // });
    Route::get('profile-setting',[ProfileController::class,'index'])->name('profile-setting');


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
