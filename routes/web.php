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


 /* components  */

 Route::get('/components', function () {
    return view('components/index');
});



 /* Licences  */

 Route::get('/licences', function () {
    return view('licences/index');
});


 /* Consumables  */

 Route::get('/consumables', function () {
    return view('consumables/index');
});


// Accesories

Route::get('/accesories', function () {
    return view('accesories/index');
});

// Assets 
// Deployed
    Route::get('/deployed', function () {
        return view('asset/deployed');
    });

// Ready to Deploy
    Route::get('/ready-to-deploy', function () {
        return view('asset/ready');
    });

// Pending
    Route::get('/pending', function () {
        return view('asset/pending');
    });

// Due for Audit
    Route::get('/due-for-audit', function () {
        return view('asset/audit');
    });
