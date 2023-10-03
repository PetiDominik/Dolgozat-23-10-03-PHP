<?php

use App\Http\Controllers\ProductTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/ptype/", [ProductTypeController::class, "listView"]);
Route::get("/ptype/edit/{id}", [ProductTypeController::class, "editView"]);
Route::get("/ptype/new/", [ProductTypeController::class, "newView"]);
Route::get("/ptype/del/", [ProductTypeController::class, "delView"]);

Route::get("/api/ptype/", [ProductTypeController::class, "list"]);
Route::put("/api/ptype/{id}", [ProductTypeController::class, "edit"]);
Route::post("/api/ptype/", [ProductTypeController::class, "new"]);
Route::delete("/api/ptype/{id}", [ProductTypeController::class, "del"]);