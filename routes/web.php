<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('cards', CardsController::class);



Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    

    if (isset($category)){


        if (isset($item)){
            return  "loja de {$category} na seção de {$item}";

        }
        return 'loja de ' . strip_tags($category);
    }
    return 'loja de tudo ';
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
