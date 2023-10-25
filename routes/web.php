<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CartController;



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





Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('categories')->group(function(){
    Route::get('/',[CategorieController::class, 'index'])->name('categories.index');
    Route::get('/create',[CategorieController::class, 'create'])->name('categories.create');
    Route::get('/',[CategorieController::class, 'index'])->name('categories.index');
    Route::post('/create',[CategorieController::class, 'store'])->name('categories.store');
    Route::get('/delete/{categorie}',[CategorieController::class, 'delete'])->name('categories.delete');
    Route::get('/edit/{categorie}',[CategorieController::class, 'edit'])->name('categories.edit');
    Route::get('/update/{categorie}',[CategorieController::class, 'update'])->name('categories.update');


});

Route::prefix('produits')->group(function(){
    Route::get('/index',[ProduitController::class, 'index'])->name('index.produits');
    Route::get('/create',[ProduitController::class, 'create'])->name('produits.create');
    Route::post('/create',[ProduitController::class, 'store'])->name('produits.store');

});
Route::get('/pageShop',[ProduitController::class, 'pageShop'])->name('shops.pageShop');
Route::get('/detailShop/{id}',[ProduitController::class, 'detailShop'])->name('shops.detailShop');


//panier route
Route::get('/panier',[CartController::class, 'index'])->name('cart.index'); //Methode pour afficher le contenu du panier
Route::post('/store',[CartController::class, 'store'])->name('cart.store'); //Methode pour ajouter un produit au panier

// Route::get('/videpanier', function(){
//     Cart::destroy();
// });

Route::delete('/destroy/{{rowId}}',[CartController::class, 'destroy'])->name('cart.destroy'); //Methode pour ajouter un produit au panier


