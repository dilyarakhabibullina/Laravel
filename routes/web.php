<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello/{name}', function($name) {
    return "Hi, $name. WELCOME!";
});

Route::get('/about', function() {
    return view('about');
});

// Route::get('/news', function (){
// return "Soon you will see here a lot of NEWS!";
// });

Route::get('/news', [NewsController::class, 'index'])->name('newsList');

Route::get('/new/{id}', [NewsController::class, 'show'])->name('showOneNew');

Route::get('/categories', [CategoriesController::class, 'showCategories']);

Route::get('/categories/{cid}', [CategoriesController::class, 'showNewsByCategory']);

Route::prefix('admin')->group(function () {

Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.newsList');

Route::get('/new/{id}', [NewsController::class, 'adminshow'])->name('admin.showOneNew');
});