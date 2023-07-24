<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::view('/about', 'about');
Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
// Route::view('/profile', 'profile');
// Route::get('/profile/{username}', function (Request $request, $username) {
//     $post = $request->get('post');
//     return view('profile', [
//         'username' => $username,
//         'post' => $post
//     ]);
// });

Route::get('/', HomeController::class);
Route::get('profile/{username}', ProfileInformationController::class);
// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
Route::resource('tasks', TaskController::class);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('user.show');