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
//Route::get('/biodata', 'BiodataController@getAllAPISoftDelete');
Route::get('/biodata', 'BiodataController@getAllAPI');
/*
Route::get('biodata', function () {
    return Biodata::all();
});
*/

//get id
Route::get('/biodata/{biodata}', 'BiodataController@getOneAPI');
/*
Route::get('biodata/{id}', function ($id) {
    return Biodata::find($id);
});
*/

//create
Route::post('/biodata', 'BiodataController@createOneAPI');
/*
Route::post('biodata', function () {
    Biodata::create(request()->all());
    return [
        'message' => 'berhasil menambahkan',
    ];
});
*/

//update
Route::patch('biodata/{biodata}', 'BiodataController@updateOneAPI');

//delete id
Route::delete('/biodata/{biodata}', 'BiodataController@deleteOneAPI');
/*
Route::delete('biodata/{id}', function ($id) {
    Biodata::destroy($id);
    return [
        'message' => 'berhasil menghapus data',
    ];
});
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
