<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    //return view('welcome');
    return view('Home');
});

Route::get('/api', function () {
    return "api";//view('welcome');
});

Route::get('/profile-path', function () {
    return view('profiles');
});

Route::get('/php-codes', function () {
    return view('codes');
});

// Route::controller(AuthController::class)->group(function () {
//     Route::get('register', 'register')->name('register');
//     Route::post('register', 'registerSave')->name('register.save');
  
//     Route::get('login', 'login')->name('login');
//     Route::post('login', 'loginAction')->name('login.action');
  
//     Route::get('logout', 'logout')->middleware('auth')->name('logout');
// });
  
Route::middleware('auth')->group(function () {
    // Route::get('dashboard', function () {
    //     $productController = new ProductController(); // Create an instance of the ProductController
    //     $countProduct = $productController->getProductCount(); // Call the method to get the count of products
    //     return view('dashboard', compact('countProduct'));
    // })->name('dashboard');
 
    // Route::controller(ProductController::class)->prefix('products')->group(function () {
    //     Route::get('', 'index')->name('products');
    //     Route::get('create', 'create')->name('products.create');
    //     Route::post('store', 'store')->name('products.store');
    //     Route::get('show/{id}', 'show')->name('products.show');
    //     Route::get('edit/{id}', 'edit')->name('products.edit');
    //     Route::put('edit/{id}', 'update')->name('products.update');
    //     Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    // });
 
    Route::get('/admin-profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('admin-profile');

    // Route::controller(ProfilesController::class)->prefix('profile')->group(function () {
    //     // Route::get('', 'index')->name('profile');
    //     // Route::get('create', 'create')->name('profiles.create');
    //     // Route::post('store', 'store')->name('profiles.store');
    //     // Route::get('show/{id}', 'show')->name('profiles.show');
    //     // Route::get('edit/{id}', 'edit')->name('profiles.edit');
    //     // Route::put('edit/{id}', 'update')->name('profiles.update');
    //     // Route::delete('destroy/{id}', 'destroy')->name('profiles.destroy');
       
    // });

    Route::controller(ApiController::class)->prefix('profile/api')->group(function () {
        Route::get('', 'index')->name('profile/api');
        // Route::get('create', 'create')->name('profiles.create');
        // Route::post('store', 'store')->name('profiles.store');
        // Route::get('show/{id}', 'show')->name('profiles.show');
        // Route::get('edit/{id}', 'edit')->name('profiles.edit');
        // Route::put('edit/{id}', 'update')->name('profiles.update');
        // Route::delete('destroy/{id}', 'destroy')->name('profiles.destroy');
       
    });
    
    
    // Route::get('profile-apis', function () {
    //     return view('api.proApis');
    // });
    

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'profile' => ProfilesController::class,
]);
