<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Providers\RouteServiceProvider;


//home route
Route::get('/' , [HomeController::class, "index"]);

//user route
Route::get('/users' , [AdminController::class, "user"]);

Route::get('/deleteuser/{id}' , [AdminController::class, "deleteuser"]);

//food route
Route::get('/deletefoodmenu/{id}' , [AdminController::class, "deletemenu"]);

Route::get('/foodmenu' , [AdminController::class, "foodmenu"]);

Route::post('/uploadfood' , [AdminController::class, "upload"]);

Route::get('/updateview/{id}' , [AdminController::class, "updateview"]);

Route::post('/update/{id}' , [AdminController::class, "update"]);

//route reservation

Route::post('/reservation' , [AdminController::class, "reservation"]);

Route::get('/viewreservation' , [AdminController::class, "viewreservation"]);

//route chef

Route::get('/viewchef' , [AdminController::class, "viewchef"]);

Route::post('/uploadchef' , [AdminController::class, "uploadchef"]);

Route::get('/updatechef/{id}' , [AdminController::class, "updatechef"]);

Route::post('/updatefoodchef/{id}' , [AdminController::class, "updatefoodchef"]);

Route::get('/deletechef/{id}' , [AdminController::class, "deletechef"]);

//Home controller route
Route::post('/addcart/{id}' , [HomeController::class, "addcart"]);

Route::get('/showcart/{id}' , [HomeController::class, "showcart"]);

Route::get('/remove/{id}' , [HomeController::class, "remove"]);

Route::post('/orderconfirm' , [HomeController::class, "orderconfirm"]);

//order admin route
Route::get('/orders' , [AdminController::class, "orders"]);

Route::get('/search' , [AdminController::class, "search"]);

//redirects controller route
Route::get('/redirects', [HomeController::class, 'redirects']);



//auth
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/redirects');  
    })->name('dashboard');
    Route::get('/redirects', [HomeController::class, 'redirects']);
});




