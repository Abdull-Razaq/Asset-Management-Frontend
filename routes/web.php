<?php

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
});

 /* Companies  */

 Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index']);
 Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');



 /* Licences  */

 Route::get('/licences', function () {
    return view('licences/index');
});
