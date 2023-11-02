<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerDetailController;
use App\Http\Controllers\Api\OrderDetailControllers;

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

Route::get('/test-data', function () {
    Artisan::call('migrate:rollback');
    Artisan::call('migrate');
    return User::all();
    // return view('welcome');
});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
});
Route::get('/optimize', function () {
    Artisan::call('optimize');
});

// Route::get('/dashboard', function () {
//     // return view('dashboard');
//     return view('pages.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('contact/us', ContactUsController::class)->names([
        'index' => 'contact.us.index',
    ]);

    Route::resource('orders', CustomerDetailController::class)->names([
        'index' => 'orders.index',
    ]);

    Route::get('/export/contact-us', [ContactUsController::class, 'exportContactUs'])->name('export.contact.us');
    Route::get('/export/orders', [CustomerDetailController::class, 'exportOrders'])->name('export.orders');

});

require __DIR__ . '/auth.php';
