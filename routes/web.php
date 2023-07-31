<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('user.Pages.About');
})->name('about-us');

Route::get('/products', function () {
    return view('user.Pages.Product');
})->name('product-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Category Routes
Route::controller(CategoryController::class)->prefix('category')->group(function(){
    Route::get('/','index')->name('category.index');
    Route::post('/create','create')->name('category.create');
    Route::post('/update','update')->name('category.update');
    Route::post('/delete/{id}','destroy')->name('category.destroy');
});

//Product Routes


    Route::controller(ProductController::class)->group(function(){
        Route::get('/product-list','productList')->name('product.list');
        Route::post('/product-create', 'create')->name('product.create');
        Route::get('/product-add', 'index')->name('product.add');
        Route::get('/specific-product-data-{id?}', 'specificProductList')->name('specific.product.data');
        Route::post('/prodduct-delete-{id?}', 'delete')->name('product.delete');
    });


require __DIR__.'/auth.php';
