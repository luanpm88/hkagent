<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

// app assets
Route::get('app/assets/{path}', [function ($path) {
    $path = base64_decode($path);

    if (Storage::exists($path)) {
        return Storage::response($path);
    } else {
        abort(404);
    }
}])->name('app_assets');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function() {
        return redirect()->action('App\Http\Controllers\ContactController@index');
    });

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/contacts', 'App\Http\Controllers\ContactController');

    Route::get('/prices/seller', 'App\Http\Controllers\PriceController@seller');
    Route::get('/prices/customer', 'App\Http\Controllers\PriceController@customer');
});

require __DIR__.'/auth.php';

