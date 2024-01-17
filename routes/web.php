<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'home' ])->name('home');
Route::get('about', [PageController::class, 'about' ])->name('about');
Route::get('service', [PageController::class, 'service' ])->name('service');
Route::get('shop', [PageController::class, 'shop' ])->name('shop');
// Route::get('blog', [PageController::class, 'index' ])->name('index');
Route::get('contact', [PageController::class, 'contact' ])->name('contact');

Route::resource('posts', PostController::class);

Route::resource('comments', CommentController::class);


Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'users' => UserController::class
]);








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
