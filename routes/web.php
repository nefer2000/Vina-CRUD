<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index']) ->name('All Students Controller');

// Route::get('student/{id}', [StudentController::class, 'index2']) ->name('Student Controller');

// Route::get('get20up', [StudentController::class, 'index3']) ->name('Students Controller');



//User Route
Route::get('login', [UserController::class, 'login']) ->name('login');

Route::post('login/process', [UserController::class, 'process']) -> name('Login Account');

Route::get('signup', [UserController::class, 'signUp']) ->name('register');

Route::post('store', [UserController::class, 'store']) -> name('Store Data');

Route::post('logout', [UserController::class, 'logout']) ->name('logout');


//Student Route
Route::get('admin', [StudentController::class, 'studentList']) -> name('adminHome');

Route::get('newStudentPage', [StudentController::class, 'newStudent']) -> name('newStudent');

Route::post('newStudent', [StudentController::class, 'store']) -> name('newStudent');

Route::get('student/{id}', [StudentController::class, 'show']) -> name('editData');

Route::put('editStudent/{id}', [StudentController::class, 'update']) -> name('changeData');

Route::delete('studentDelete/{id}', [StudentController::class, 'deleteStudent']) -> name('deleteData');