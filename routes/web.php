<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'homepage'])->name('hp');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/mentions-legales', [Controller::class, 'mentionsLegales'])->name('mentions-legales');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
