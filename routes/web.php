<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeCtrl;
use App\Http\Controllers\projCtrl;
use App\Http\Controllers\svCtrl;

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


Route::get("/",[homeCtrl::class,"index"]);

Route::get("/redirect",[homeCtrl::class,"redirectFunct"]);

Route::get('/addProject', function () {
    return view('admin.addproj');
});
Route::get('/delProj', function () {
    return view('admin.delProj');
});

Route::get('/projDetail', function () {
    return view('admin.projDetail');
});

Route::post('/add', [projCtrl::class, 'addData']);
Route::get('project', [projCtrl::class, 'dispData']); 
Route::get('show/{id}', [projCtrl::class, 'showData']);
Route::get('del/{id}', [projCtrl::class, 'delData']);



Route::get('list', [svCtrl::class, 'index']); 
Route::get('disp', [svCtrl::class, 'dispData']); 
Route::get('upd/{id}', [svCtrl::class, 'showData']);
Route::post('/edit', [svCtrl::class, 'updateData']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
