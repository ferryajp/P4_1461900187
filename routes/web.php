<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0187;
use App\Http\Controllers\UsersExport;
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
Route::get('buku0187', [Controller0187::class,'buku']);
Route::get('jenisbuku', [Controller0187::class,'jenisbuku']);
// Route::get('jenisbuku0187', [Controller0187::class,'jenisbuku']);
Route::get('rakbuku0187', [Controller0187::class,'rakbuku']);
Route::get('home0187', [Controller0187::class,'home']);
Route::get('export0187', [Controller0187::class, 'export']);