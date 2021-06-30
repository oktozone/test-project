<?php

use App\Http\Controllers\Dashbord\DashabordController;
use App\Http\Controllers\Item\ItemController;
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

Route::get('/', [DashabordController::class, "index"])->name('index');
Route::get('item', [ItemController::class, "index"])->name('item');

