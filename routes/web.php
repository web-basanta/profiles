<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('Home');
// });

Route::get('/api', function () {
    return "api";//view('welcome');
});

Route::get('/profile-path', function () {
    return view('profiles');
});

Route::get('/php-codes', function () {
    return view('codes');
});


Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//game added
Route::get('/ticktak', [GameController::class, 'ticktak'])->name('games.ticktak');
Route::get('/tetris', [GameController::class, 'tetris'])->name('games.tetris');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'profile' => ProfilesController::class,
    'games' => GameController::class,
]);
