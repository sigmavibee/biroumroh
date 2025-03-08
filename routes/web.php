<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PaketController::class, 'index']);
Route::post('/search', [PaketController::class, 'search']);

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::middleware(['role:biro'])->group(function () {
        Route::get('/paket/create',[PaketController::class, 'create']);
        Route::post('/paket/create',[PaketController::class, 'store']);
    });
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/dashboard/member', [DashboardController::class, 'memberBiro']);
        Route::get('/dashboard/paket', [DashboardController::class, 'getPackage']);
        Route::post('/dashboard/paket/update/{id}', [DashboardController::class, 'postPackage']);
        Route::get('/dashboard/{carousel_id}', [DashboardController::class, 'destroyCarousel']);
        Route::post('/create/carousel', [DashboardController::class, 'createCarousel']);
    });
});


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'registration']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



