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

Route::get('/', [\App\Http\Controllers\Frontend\MainController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

Route::get('/widget', [\App\Http\Controllers\Frontend\WidgetController::class, 'index'])->name('widget');

Route::get('/property', [\App\Http\Controllers\Frontend\PropertyController::class, 'index'])->name('property');

Route::get('/blog/list', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog_list');
Route::get('/blog/detail', [\App\Http\Controllers\Frontend\BlogController::class, 'detail'])->name('blog_detail');

Route::get('/category', [\App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('category');

Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

Route::get('/post/add', [\App\Http\Controllers\Frontend\PostController::class, 'index'])->name('add_post');

Route::get('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class, 'index'])->name('login');
Route::get('/register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class, 'index'])->name('register');

Route::get('/add/list', [\App\Http\Controllers\Frontend\Auth\Dashboard\AddlistController::class, 'index'])->name('add_list');
Route::get('/manage', [\App\Http\Controllers\Frontend\Auth\Dashboard\ManagedController::class, 'index'])->name('manage');
Route::get('/my/ad', [\App\Http\Controllers\Frontend\Auth\Dashboard\MyAdController::class, 'index'])->name('my_ad');
Route::get('/my/dash', [\App\Http\Controllers\Frontend\Auth\Dashboard\MyDashController::class, 'index'])->name('my_dash');
Route::get('/my/favorite', [\App\Http\Controllers\Frontend\Auth\Dashboard\MyFavoriteController::class, 'index'])->name('my_favorite');
Route::get('/order', [\App\Http\Controllers\Frontend\Auth\Dashboard\OrderController::class, 'index'])->name('order');
Route::get('/payment', [\App\Http\Controllers\Frontend\Auth\Dashboard\PaymentController::class, 'index'])->name('payment');
Route::get('/setting', [\App\Http\Controllers\Frontend\Auth\Dashboard\SettingController::class, 'index'])->name('setting');
Route::get('/tip', [\App\Http\Controllers\Frontend\Auth\Dashboard\TipController::class, 'index'])->name('tip');
Route::get('/user/profile', [\App\Http\Controllers\Frontend\Auth\Dashboard\UserprofileController::class, 'index'])->name('user_profile');











