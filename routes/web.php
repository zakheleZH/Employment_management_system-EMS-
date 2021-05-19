<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\LoginController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class,'logout']);

Auth::routes();

Route::group(['middleware'=>'auth'],function(){


Route::get('/', function () {
    return view('welcome');
});

    // Department Controller departments
Route::resource('departments', DepartmentController::class);


// Roles Controller roles
Route::resource('roles', RolesController::class);


// Users Controller
Route::resource('users', UserController::class);



// permission Controller
Route::resource('permissions', PermissionController::class);

// leaves Controller
Route::resource('leaves', LeaveController::class);
Route::post('accept-reject-leave/{id}',[LeaveController::class,'acceptReject'])->name('accept.reject');

// Notice Controller
Route::resource('notices', NoticeController::class);

Route::get('/mail',[MailController::class,'create'])->name('mails.create');
Route::post('/mail',[MailController::class,'store'])->name('mails.store');


});


