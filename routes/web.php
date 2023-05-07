<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Auth::routes();


Route::controller(App\Http\Controllers\Fronted\FrontedController::class)->group(function () {

    Route::get('/','index');

    Route::get('/about-us','about');
    Route::get('/contact-us','contact');
    Route::get('/collections','categories');
    Route::get('/collections/{category_slug}','products');
    Route::get('/collections/{category_slug}/{product_slug}','productView');
    Route::get('/new-arrivals','newArrival');

});

Route::middleware(['auth'])->group(function () {

    Route::get('cart', [App\Http\Controllers\Fronted\CartController::class, 'index']);
    Route::get('checkout', [App\Http\Controllers\Fronted\CheckoutController::class, 'index']);


    Route::get('orders',[App\Http\Controllers\Fronted\OrderController::class, 'index']);
    Route::get('orders/{orderId}',[App\Http\Controllers\Fronted\OrderController::class, 'show']);

    Route::get('profile',[App\Http\Controllers\Fronted\UserController::class, 'index']);

    Route::post('profile',[App\Http\Controllers\Fronted\UserController::class, 'updateUserDetails']);

    Route::get('change-password',[App\Http\Controllers\Fronted\UserController::class, 'passwordCreate']);

    Route::post('change-password',[App\Http\Controllers\Fronted\UserController::class, 'changePassword']);
});

Route::get('thank-you',[App\Http\Controllers\Fronted\FrontedController::class,'thankyou']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('settings',[App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('settings',[App\Http\Controllers\Admin\SettingController::class, 'store']);

    //slider routes
    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders','index');
        Route::get('sliders/create','create');
        Route::post('sliders/create','store');
        Route::get('/sliders/{slider}/edit', 'edit');
        Route::put('sliders/{slider}','update');
        Route::get('sliders/{slider}/delete','destroy');
    });

    //category routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('category/{category}','update');
    });


     //product routes
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products','store');
        Route::get('/products/{product}/edit','edit');
        Route::put('/products/{product}','update');
        Route::get('products/{product_id}/delete','destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');

        Route::post('product-color/{prod_color_id}','updateProdColorQty');
        Route::get('product-color/{prod_color_id}/delete','deleteProdColor');
    });

         //color routes
    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
            Route::get('/colors', 'index');
            Route::get('/colors/create', 'create');
            Route::post('/colors/create','store');
            Route::get('/colors/{color}/edit','edit');
            Route::put('/colors/{color}','update');
            Route::get('/colors/{color_id}/delete','destroy');

    });

    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'updateOrderStatus');

        Route::get('/invoice/{orderId}','viewInvoice');
        Route::get('/invoice/{orderId}/generate','generateInvoice');

        Route::get('/invoice/{orderId}/mail','mailInvoice');


});

Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/create', 'create');
    Route::post('/users','store');
    Route::get('/users/{user_id}/edit', 'edit');
    Route::put('/users/{user_id}', 'update');
    Route::get('users/{user_id}/delete','destroy');
});

});
