<?php

use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PermissionController;

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
     $schools = School::all();
    return view('admission',compact('schools'));
});


Auth::routes();



Route::resource('schools', SchoolController::class);

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'permissions'=>PermissionController::class
]);
Route::resource('students', StudentController::class);
