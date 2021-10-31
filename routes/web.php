<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
//     return view('posts.index');
// });

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::get('/display/{post_id}', [PostController::class, 'show'])->name('show');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('/edit/{edit_post_id}', [PostController::class, 'edit'])->name('edit');
Route::post('/update/{update_post_id}', [PostController::class, 'update'])->name('update');
Route::get('/delete/{delete_post_id}', [PostController::class, 'destroy'])->name('delete');

// USER LOGIN
Route::get('/register', [UserController::class, 'registerView'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.store');

Route::get('/login', [UserController::class, 'loginView'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');
