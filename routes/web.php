<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
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

// Route::get('/', function () { return view('welcome');});
Route::get('/', [PageController::class,'index']);


// Route::get('/mahasiswa', function () {
//     $param['list_mahasiswa'] = array("Andi","Budi","Chandra","Dodi");
//     $param['list_Dosen'] = array("Ayu","Benny");
//     return view('mahasiswa',$param);
// });
Route::get('/mahasiswa', [PageController::class,'show']);


//List Nilai
// Mtk 1  : A
// Mtk 2  : B+
// Mtk 3  : A

// IPK : 3.8 <<== Hitung di Controller