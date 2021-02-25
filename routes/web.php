<?php
use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return  redirect('login');
});

Auth::routes();

Route::resource('projects',ProjectController::class);
Route::post('/projects/{project}/tasks', [App\Http\Controllers\TaskController::class, 'store']);
Route::patch('/projects/{project}/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update']);
Route::delete('/projects/{project}/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy']);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



