<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, "index"]);

Route::get('/users', [AdminController::class, "user"]);

Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);

Route::get('/foodmenu', [AdminController::class, "foodmenu"]);

Route::post('/uploadfood', [AdminController::class, "upload"]);

Route::get('/deletefoodmenu/{id}', [AdminController::class, "deletefoodmenu"]);

Route::get('/editfoodmenu/{id}', [AdminController::class, "editfoodmenu"]);

Route::post('/update/{id}', [AdminController::class, "update"]);

Route::get('/redirects', [HomeController::class, "redirects"]);

Route::post('/reservation', [AdminController::class, "reservation"]);

Route::get('/viewreservationlists', [AdminController::class, "viewreservationlists"]);

Route::get('/viewchef', [AdminController::class, "viewchef"]);

Route::post('/uploadchef', [AdminController::class, "uploadchef"]);

Route::get('/editchef/{id}', [AdminController::class, "editchef"]);

Route::post('/updatefoodchef/{id}', [AdminController::class, "updatefoodchef"]);

Route::get('/deletechef/{id}', [AdminController::class, "deletechef"]);

Route::post('/addcart/{id}', [HomeController::class, "addcart"]);

Route::get('/showcart/{id}', [HomeController::class, "showcart"]);

Route::get('/remove/{id}', [HomeController::class, "remove"]);

Route::post('/orderConfirm', [HomeController::class, "orderConfirm"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
