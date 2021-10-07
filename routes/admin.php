<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;


Route::get('dashboard', [AdminController::class, 'index']);

Route::resource('users', UserController::class)->names('admin/users');




