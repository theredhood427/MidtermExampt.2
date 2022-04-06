<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassGradesController;

Route::get('begin', [ClassGradesController::class, 'startClass']);
Route::post('enter-grades', [ClassGradesController::class, 'enterGrades']);
Route::post('compute-grades', [ClassGradesController::class, 'computeFinals']);
