<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;

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

Route::get("/api/agencies", [AgencyController::class, "index"]);
Route::get("/api/agencies/{id}",[AgencyController::class, "show"]);
Route::post("/api/agencies", [AgencyController::class, "store"]);
Route::put("/api/agencies/{id}", [AgencyController::class, "update"]);
Route::delete("/api/agencies/{id}", [AgencyController::class, "destroy"]);

Route::get("/agencies/list", [AgencyController::class, "listView"]);
Route::get("/agencies/new", [AgencyController::class, "newView"]);
Route::get('/agencies/edit/{id}', [AgencyController::class, 'editView']);