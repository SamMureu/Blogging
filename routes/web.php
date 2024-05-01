<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'homepage']);
Route::get('/home_page', function () {
    return view('home_page');
})->middleware(['auth', 'verified'])->name('home_page');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('admin.dashboard',[HomeController::class,'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');

Route::get('/task', [admincontroller::class,'taskForm'])->name('admintask.form');
Route::post('/task', [admincontroller::class,'assignTask'])->name('admintask.assign');
Route::get('/usertask', [Homecontroller::class,'viewTasks'])->name('task.view');
Route::get('/adminpost',[adminController::class,'admin_post'])->name('adminpost');
Route::post('/add_post',[admincontroller::class,'add_post'])->name('add_post');

Route::get('/adminview',[admincontroller::class,'adminview'])->name('adminview');
Route::get('/delete_post/{id}',[admincontroller::class,'delete_post']);
Route::get('/update_post/{id}',[admincontroller::class,'update_post']);

