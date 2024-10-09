<?php

use App\Http\Controllers\FrontEndController;
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



Route::get('/', [FrontEndController::class, 'home']);

Route::get('/admission', [FrontEndController::class, 'admission'])->name('admission');
Route::post('/admission', [FrontEndController::class, 'application'])->name('application');


Auth::routes();


Route::post('students/save', [StudentController::class, 'save'])->name('students.save');
Route::get('students/approve/list', [StudentController::class, 'approve_list'])->name('students.approve_list');
Route::get('students/approve/{id}', [StudentController::class, 'approve'])->name('students.approve');
Route::get('students/print/{id}', [StudentController::class, 'print'])->name('students.print');

Route::resource('schools', SchoolController::class);
Route::resource('students', StudentController::class);

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'permissions' => PermissionController::class
]);
