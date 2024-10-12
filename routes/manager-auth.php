<?php

use App\Http\Controllers\Manager\AddchefController;
use App\Http\Controllers\Manager\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Manager\Auth\RegisteredUserController;
use App\Http\Controllers\Manager\IngredidientController;
use App\Http\Controllers\Manager\Ingredient\IngredientNameController;
use App\Http\Controllers\Manager\MenuController;
use App\Http\Controllers\Manager\OrderTakerController;
use App\Http\Controllers\Manager\PosController;
use App\Http\Controllers\Manager\OrderController;
use App\Http\Controllers\Manager\ProfileController;
use App\Http\Controllers\Manager\PurchaseIngredidientController;
use App\Http\Controllers\Manager\StatsController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:manager')->prefix('manager')->name('manager.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
 
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('get-yearly-chart-data', [AuthenticatedSessionController::class, 'getYearlyChartData']);
    Route::get('get-monthly-chart-data', [AuthenticatedSessionController::class, 'getMonthlyChartData']);


    Route::get('password/forgot', [AuthenticatedSessionController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [AuthenticatedSessionController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [AuthenticatedSessionController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [AuthenticatedSessionController::class, 'reset'])->name('password.update');


});
Route::get('/orders/{order}/items', [OrderController::class, 'getOrderItems']);
Route::post('/orders/{orderId}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

Route::middleware(['auth:manager'])->prefix('manager')->name('manager.')->group(function () {

    Route::post('/sales-states', [StatsController::class, "sales"])->name('sales.stats');
    Route::post('/purchases-states', [StatsController::class, "purchases"])->name('purchases.stats');

    Route::get('/dashboard', function () {
        return view('manager_panel.admin_dashboard.dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/Ingredients-list', [IngredidientController::class, 'list'])->name('ingredients_list');
    Route::get('/purchase-Ingredients', [PurchaseIngredidientController::class, 'purchase'])->name('purchase_ingredients');

    // Route::get('/Purchase-View', [PurchaseIngredidientController::class, 'purchase_view'])->name('purchase_view');
    Route::get('/purchase-ingredient-data', [PurchaseIngredidientController::class, 'getPurchaseIngredientData'])->name('PurchaseIngredidient.getData');




    // ------------------purchase report routes----------------
    Route::get('purchase-report', [ReportController::class, 'purchase_report_view'])->name('purchase_report_view');
    Route::match(['GET', 'POST'], 'save-report',  [ReportController::class, 'purchase_report'])->name('purchase_report');
    Route::post('/download-purchase-report', [ReportController::class, 'download_purchase_report']);
    // ---------------- waste report routes------------

    Route::get('waste-report', [ReportController::class, 'waste_report_view'])->name('waste_report_view');
    Route::post('save-waste',  [ReportController::class, 'waste_report'])->name('waste_report');
    Route::post('/download-waste-report', [ReportController::class, 'download_waste_report'])->name('download_waste_report');

    // ---------------- waste report routes------------

    Route::get('sales-report', [ReportController::class, 'sales_report_view'])->name('sales_report_view');
    Route::post('save-sales',  [ReportController::class, 'sales_report'])->name('sales_report');
    Route::post('/download-sales-report', [ReportController::class, 'download_sales_report'])->name('download_sales_report');
    Route::post('/download-order-report', [ReportController::class, 'download_order_report'])->name('download_order_report');



    Route::controller(PurchaseIngredidientController::class)->as('PurchaseIngredidient.')->group(function () {
        // total purchase route
        Route::get('/total-Purchase-Ingredidient',  'total')->name('total');

        Route::get('/all-PurchaseIngredidient',  'index')->name('index');
        Route::get('/add-PurchaseIngredidient',  'add')->name('add');
        Route::post('/save-PurchaseIngredidient',  'save')->name('save');
        Route::get('edit-PurchaseIngredidient/{id}', 'edit')->name('edit');
        Route::post('update-PurchaseIngredidient/{id}', 'update')->name('update');
        Route::get('delete-PurchaseIngredidient/{id}', 'destroy')->name('destroy');
    });
    // ------------------------------------------------------------------------------

    Route::controller(IngredientNameController::class)->as('IngredientName.')->group(function () {

        Route::get('/all-IngredientName',  'index')->name('index');
        Route::get('/add-IngredientName',  'create')->name('add');
        Route::post('/save-IngredientName',  'save')->name('save');
        Route::get('edit-IngredientName/{id}', 'edit')->name('edit');
        Route::post('update-IngredientName/{id}', 'update')->name('update');
        Route::get('delete-IngredientName/{id}', 'destroy')->name('destroy');
    });

    Route::controller(MenuController::class)->as('menu.')->group(function () {

        Route::get('/all-menu',  'index')->name('index');
        Route::get('/add-menu',  'create')->name('add');
        Route::post('/save-menu',  'save')->name('save');
        Route::get('edit-menu/{id}', 'edit')->name('edit');
        Route::post('update-menu/{id}', 'update')->name('update');
        Route::get('delete-menu/{id}', 'destroy')->name('destroy');
    });
    Route::controller(PosController::class)->as('pos.')->group(function () {

        Route::get('/all-pos',  'index')->name('index');
        Route::get('/add-pos',  'create')->name('add');
        Route::post('/save-pos',  'save')->name('save');
        Route::get('edit-pos/{id}', 'edit')->name('edit');
        Route::post('update-pos/{id}', 'update')->name('update');
        Route::get('delete-pos/{id}', 'destroy')->name('destroy');
    });

    Route::post('/store-order', [OrderController::class, 'store_order'])->name('store.order');

    Route::controller(OrderController::class)->as('orders.')->group(function () {

        Route::get('/all-order',  'list')->name('index');
        Route::get('/active-order',  'active_order')->name('active_order');
        Route::get('/completed-order',  'completed_order')->name('completed_order');
        Route::get('/Cancelled-order',  'cancelled_order')->name('cancelled_order');
        Route::get('/Pending-order',  'pending_order')->name('pending_order');
    });


    Route::controller(AddchefController::class)->as('chef.')->group(function () {

        Route::get('/all-chef',  'index')->name('index');
        Route::get('/add-chef',  'add')->name('add');
        Route::get('/save-chef',  'save')->name('save');
        Route::post('/save-chef',  'save')->name('save');
        Route::get('edit-chef/{id}', 'edit')->name('edit');
        Route::post('update-chef/{id}', 'update')->name('update');
        Route::get('delete-chef/{id}', 'destroy')->name('destroy');
    });

    Route::controller(OrderTakerController::class)->as('ordertaker.')->group(function () {

        Route::get('/all-ordertaker',  'index')->name('index');
        Route::get('edit-ordertaker/{id}', 'edit')->name('edit');
        Route::post('update-ordertaker/{id}', 'update')->name('update');
        Route::get('delete-ordertaker/{id}', 'destroy')->name('destroy');
    });


    Route::get('profile-setting',[ProfileController::class,'index'])->name('profile-setting');

    Route::get('dashboard', [AuthenticatedSessionController::class, 'index'])
        ->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
