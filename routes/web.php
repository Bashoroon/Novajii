<?php

use App\Models\Product;
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


Route::get('/', function () {
    $products = Product::all();
    return view('/dashboard', compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/products', function () {
    $products = Product::all();
    return response()->json($products);
})->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/dashboard', function () {
    $products = Product::all();
    return view('dashboard', compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('deleteproduct/{id}', 'App\Http\Controllers\ProductController@destroy')->name('deleteproduct');
    Route::post('/dashboard', 'App\Http\Controllers\ProductController@store')->name('store');
    Route::get('edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('edit');
    Route::post('/update', 'App\Http\Controllers\ProductController@update')->name('update');
    Route::post('/', 'App\Http\Controllers\ProductController@store')->name('store');
    Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/send-notification', 'App\Http\Controllers\NotificationController@sendOfferNotification')->name('sendOfferNotification');
});

require __DIR__ . '/auth.php';
