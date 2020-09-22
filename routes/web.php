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
Route::get('/contact/{demo?}', [Controller::class, 'contact'])->name('contact');
Route::get('/demo', [Controller::class, 'contact'])->name('demo');
Route::get('/mentions-legales', [Controller::class, 'mentionsLegales'])->name('mentions-legales');
Route::get('/produit-ms-erp', [Controller::class, 'produitMsErp'])->name('produit-ms-erp');
Route::get('/fonctionnalites-ms-erp', [Controller::class, 'fonctionMsErp'])->name('fonction-ms-erp');
Route::get('/produit-appli-mobile', [Controller::class, 'produitApplication'])->name('produit-appli');
Route::get('/fonctionnalites-appli-mobile', [Controller::class, 'fonctionApplication'])->name('fonction-appli');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post(
    '/contact', 
    [Controller::class,'contactPost']
)->name('contact_post');