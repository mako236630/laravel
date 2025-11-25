<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Whoops\Run;
use App\Http\Controllers\HelloController;

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
Route::get("/",[TestController::class, "index"]);
route::get("/test",[TestController::class, "index"]);
route::get("/hello", [HelloController::class, "index"]);
