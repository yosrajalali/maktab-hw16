<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

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

Route::get('/{title}/{id}/{cat}',[CatController::class, 'index'])
    ->whereAlpha('title')
    ->whereNumber('id')
    ->where('cat', 'sport|economy');

//Route::get('/{title}/{id}/{cat}', function ($title, $id, $cat){
////    dd('Title:'. $title . ' Id:' . $id . ' Cat:' . $cat);
//
//    return view('cat.index', compact('title', 'id', 'cat'));
//})->whereAlpha('title')->whereNumber('id')->where('cat', 'sport|economy');
