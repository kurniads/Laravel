<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Biodata;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//get all
Route::get('biodata', function () {
    return Biodata::all();
});

//get id
Route::get('biodata/{id}', function ($id) {
    return Biodata::find($id);
});

//create
Route::post('biodata', function () {
    Biodata::create(request()->all());
    return [
        'message' => 'berhasil menambahkan',
    ];
});

//delete id
Route::delete('biodata/{id}', function ($id) {
    Biodata::destroy($id);
    return [
        'message' => 'berhasil menghapus data',
    ];
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
