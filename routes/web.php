<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanntController;

Route::get('/', [GanntController::class, 'index'])->name('application.index');
