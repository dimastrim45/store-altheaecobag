<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// navbar test
Route::get('/home', function () {
    return view('store.partials.store');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function() {
    return view('management.partials.dashboard');
});

Route::get('/profile', function() {
    return view('management.partials.userProfile');
});

Route::get('/users', function() {
    return view('management.partials.showUsers');
});

Route::get('/categories', function() {
    return view('management.partials.categories');
});

Route::get('/products', function() {
    return view('management.partials.products');
});

Route::get('/products/edit/product_name', function() {
    return view('management.partials.product_edit');
});

Route::get('/products/edit/product_add', function() {
    return view('management.partials.product_add');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
