<?php


use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/text', function () {
    return view('text');
});
Route::post('/text', function (Request $request) {
    $inputvalue = $request->input('first-input');
    return view('text',['inputvalue' => $inputvalue]);
});

Route::get('/hello',[TestController::class, 'testFunction']);


Route::get('/table', function () {
    $nom = "Laghfour";
    $prenom = "Adil";
    $age = "19";
    return view('table' ,["data" => [$nom, $prenom, $age]]);
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/{id}', function (Request $request, string $id) {
    echo $id;
});