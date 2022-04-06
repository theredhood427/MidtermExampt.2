<?php

use Illuminate\Support\Facades\Route;

Route::get('begin', [ClassGradesController::class, 'startClass']);
Route::post('enter-grades', [ClassGradesController::class, 'enterGrades']);
Route::post('compute-grades', [ClassGradesController::class, 'computeFinals']);
