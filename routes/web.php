<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\BuildingFloorController;
use App\Http\Controllers\FloorController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('admins', AdminController::class);
Route::resource('sections', SectionController::class);
Route::resource('students', StudentController::class);
Route::resource('buildings', BuildingController::class);
Route::resource('floors',FloorController::class);
Route::resource('buildings.floors', BuildingFloorController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
