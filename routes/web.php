<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name("home.index");

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/list', [App\Http\Controllers\UserController::class, 'list'])->name('user.list');
Route::get('user/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
Route::get('user/save', [App\Http\Controllers\UserController::class, 'save'])->name('user.save');
Route::get('user/addViewedMovie/{id}', [App\Http\Controllers\UserController::class, 'addViewedMovie'])->name('user.addViewedMovie');

Route::get('watchlist/create', [App\Http\Controllers\WatchlistController::class, 'create'])->name('watchlist.create');
Route::get('watchlist/list', [App\Http\Controllers\WatchlistController::class, 'list'])->name('watchlist.list');
Route::get('watchlist/show/{id}', [App\Http\Controllers\WatchlistController::class, 'show'])->name('watchlist.show');
Route::post('watchlist/save', [App\Http\Controllers\WatchlistController::class, 'save'])->name('watchlist.save');
Route::post('watchlist/delete/{id}', [App\Http\Controllers\WatchlistController::class, 'delete'])->name('watchlist.delete');
Route::post('watchlist/addMovie', [App\Http\Controllers\WatchlistController::class, 'addMovie'])->name('watchlist.addMovie');
Route::get('watchlist/removeMovie', [App\Http\Controllers\WatchlistController::class, 'removeMovie'])->name('watchlist.removeMovie');
Route::post('watchlist/removeMovie/{id}', [App\Http\Controllers\WatchlistController::class, 'removeMovie'])->name('watchlist.removeMovie');

Route::get('movie/create', [App\Http\Controllers\MovieController::class, 'create'])->name("movie.create");
Route::post('movie/save', [App\Http\Controllers\MovieController::class, 'save'])->name("movie.save");
Route::get('movie/list', [App\Http\Controllers\MovieController::class, 'list'])->name("movie.list");
Route::get('movie/show/{id}', [App\Http\Controllers\MovieController::class, 'show'])->name("movie.show");
Route::post('movie/delete/{id}', [App\Http\Controllers\MovieController::class, 'delete'])->name("movie.delete");
Route::post('movie/filter', [App\Http\Controllers\MovieController::class, 'filter'])->name("movie.filter");
Route::get('movie/update/{id}', [App\Http\Controllers\MovieController::class, 'update'])->name("movie.update");

Route::post('review/create/{id}', [App\Http\Controllers\ReviewController::class, 'create'])->name("review.create");
Route::post('review/save', [App\Http\Controllers\ReviewController::class, 'save'])->name("review.save");
Route::get('review/list', [App\Http\Controllers\ReviewController::class, 'list'])->name("review.list");
Route::get('review/show/{id}', [App\Http\Controllers\ReviewController::class, 'show'])->name("review.show");
Route::post('review/delete/{id}', [App\Http\Controllers\ReviewController::class, 'delete'])->name("review.delete");
Route::get('review/truncateReview', [App\Http\Controllers\ReviewController::class, 'truncateReview'])->name("review.truncateReview");
Route::get('review/update/{id}', [App\Http\Controllers\ReviewController::class, 'update'])->name("review.update");
Route::post('review/updateProcess/{id}', [App\Http\Controllers\ReviewController::class, 'updateProcess'])->name("review.updateProcess");

Route::get('order/create', [App\Http\Controllers\OrderController::class, 'create'])->name("order.create");
Route::post('order/save', [App\Http\Controllers\OrderController::class, 'save'])->name("order.save");
Route::get('order/list', [App\Http\Controllers\OrderController::class, 'list'])->name("order.list");
Route::get('order/show/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name("order.show");
Route::get('order/update/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name("order.update");
Route::post('order/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete'])->name("order.delete");
Route::post('order/updateProcess/{id}', [App\Http\Controllers\OrderController::class, 'updateProcess'])->name("order.updateProcess");

Route::get('item/list/{id}', [App\Http\Controllers\ItemController::class, 'list'])->name("item.list");

Route::post('cart/add', [App\Http\Controllers\CartController::class, 'add'])->name("cart.add");
Route::get('cart/show', [App\Http\Controllers\CartController::class, 'show'])->name("cart.show");
Route::get('cart/empty', [App\Http\Controllers\CartController::class, 'empty'])->name("cart.empty");
Route::post('cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name("cart.checkout");

Route::get('admin/movie/list', [App\Http\Controllers\MovieController::class, 'list'])->name('admin.movie.list');
Route::get('admin/movie/show/{id}', [App\Http\Controllers\MovieController::class, 'show'])->name('admin.movie.show');
Route::get('admin/movie/create', [App\Http\Controllers\MovieController::class, 'create'])->name('admin.movie.create');
Route::post('admin/movie/filter', [App\Http\Controllers\MovieController::class, 'filter'])->name('admin.movie.filter');
Route::get('admin/movie/update/{id}', [App\Http\Controllers\MovieController::class, 'update'])->name('admin.movie.update');
Route::post('admin/movie/saveUpdate', [App\Http\Controllers\MovieController::class, 'saveUpdate'])->name("admin.movie.saveUpdate");
Route::post('admin/movie/save', [App\Http\Controllers\MovieController::class, 'save'])->name("admin.movie.save");

Route::get('admin/watchlist/list', [App\Http\Controllers\WatchlistController::class, 'list'])->name('admin.watchlist.list');
Route::get('admin/watchlist/create', [App\Http\Controllers\WatchlistController::class, 'create'])->name('admin.watchlist.create');
Route::get('admin/watchlist/show/{id}', [App\Http\Controllers\WatchlistController::class, 'show'])->name('admin.watchlist.show');
Route::post('admin/watchlist/save', [App\Http\Controllers\WatchlistController::class, 'save'])->name('admin.watchlist.save');
Route::post('admin/watchlist/delete/{id}', [App\Http\Controllers\WatchlistController::class, 'delete'])->name('admin.watchlist.delete');

Route::post('admin/review/create/{id}', [App\Http\Controllers\ReviewController::class, 'create'])->name('admin.review.create');