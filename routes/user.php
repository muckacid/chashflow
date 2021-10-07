<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\BalanceController;

Route::get('dashboard', [UserController::class, 'index']);


Route::get('update', [BalanceController::class, 'update']);

Route::resource('balances', BalanceController::class)->names('user/balances');

