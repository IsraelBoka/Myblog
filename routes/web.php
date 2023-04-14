<?php

use Illuminate\Support\Facades\Route;
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
    $images = [
        'image1.jpg',
        'image2.jpg',
        'image3.jpg'
    ];
    return view('index', ['images' => $images]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['web'])->name('dashboard');



Route::get('/form1', function () {
    return view('form1');
})->middleware(['web'])->name('form1');


Route::get("/dashboard-user", function () {
    return view("dashboard-user");
})->middleware(['web'])->name("dashboard-user");

Route::get('/blog1', function () {
    return view("blog1");
});


Route::get('/users', UserController::class)->name("users");


require __DIR__.'/auth.php';
