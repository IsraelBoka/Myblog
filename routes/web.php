<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryArticleController;

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
     return view('index');
});

Route::get('/blog1', function () {
     return view('blog1');
 });
Route::resource('articles', ArticleController::class);

Route::get('/Ajouter_Articles', [ArticleController::class, 'index'])->middleware(['auth','role'])->name('add');
Route::Post('/AddArticle', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->middleware(['auth','role'])->name('articles.edit');
Route::put('/article/{id}/update', [ArticleController::class, 'update'])->middleware(['auth','role'])->name('articles.update');
Route::get('/', [ArticleController::class, 'index2']);
Route::get('/Listes_des_articles', [ArticleController::class, 'All'])->middleware(['auth','role'])->name('dashboard');
//Route::get('/article/{id}/show', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Toute les routes de categoryarticle
Route::resource('categoryarticles', CategoryArticleController::class);
Route::get('/ajouter_categorieArticle', [CategoryArticleController::class, 'index'])->middleware(['auth','role'])->name('ajouterarticle');
Route::put('/categoryarticles/{id}/update', [CategoryArticleController::class, 'update'])->name('categoryarticles.update');

//commenter un articles
Route::Post('/comment', [ArticleController::class, 'commentaire'])->middleware(['auth'])->name('articles.commentaire');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role'])->name('dashboard');

require __DIR__.'/auth.php';
