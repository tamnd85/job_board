<?php

use App\Http\Controllers\EmploymentController;
use Illuminate\Support\Facades\Route;


Route::get('', fn() => to_route('employments.index'));

Route::resource('employments', EmploymentController::class)
    ->only(['index', 'show']);
