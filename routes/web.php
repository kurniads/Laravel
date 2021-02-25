<?php

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
    return view('vhomepage');
});


Route::get('/biodata/{nama_bio?}/{umur_bio?}', function ($nama_bio,$umur_bio) {
    return view('biodata.vbiopage', ['nama_bio'=>$nama_bio, 'umur_bio'=>$umur_bio]);
});

/*
Route::view('/biodata','biodata.vbiopage', [
    'nama' => 'Kurnia',
    'umur' => '23'
]);
*/
