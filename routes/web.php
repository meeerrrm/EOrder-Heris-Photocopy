<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPage;
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

Route::get('/',[LandingPage::class,'index'])->name('welcome');

Route::get('/check-orders',[LandingPage::class,'checkOrder'])->name('check_orders');
Route::post('/check-orders',[LandingPage::class,'checkOrderAction'])->name('check_orders.action');

Route::get('/orders',[LandingPage::class,'order'])->name('orders');
Route::post('/orders',[LandingPage::class,'orderAction'])->name('orders_action');

Route::get('/orders/{uniq_id}',[LandingPage::class,'detailOrder'])->name('detailOrder');
Route::get('/orders/{uniq_id}/payment',[LandingPage::class,'orderPayment'])->name('order_payment');

Route::post('/orders/quick-count',[LandingPage::class,'quickCount'])->name('quick_count');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::name('admin.')
     ->prefix('admin')
     ->group(function(){
        Route::controller(App\Http\Controllers\Product\AdminController::class)
         ->prefix('product')
         ->name('product.')
         ->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
            Route::put('/','update')->name('update');
            Route::get('/{id}','show')->name('show');
            Route::delete('/','destroy')->name('destroy');

            Route::get('/fetch/{id}','fetchProduct')->name('fetch_product');
        });
        Route::controller(App\Http\Controllers\Order\AdminController::class)
         ->prefix('order')
         ->name('order.')
         ->group(function(){
            Route::get('/','index')->name('index');
            Route::get('/{id}','show')->name('show');
            Route::post('/{id}','update')->name('update');
        });
    });

});

require __DIR__.'/auth.php';
