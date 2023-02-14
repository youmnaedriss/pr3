<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('students', [StudentController::class, 'index']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);


Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('images.store');
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
Route::get('/allstu', [StudentController::class,'index1']);
Route::get('/student/simple', [StudentController::class,'simple'])->name('simple_search');


