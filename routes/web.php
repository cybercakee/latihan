<?php

use App\Http\Controllers\Admin\GeneralController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::controller(GeneralController::class)->group(function(){
    route::get('/', 'about');
    route::get('/experience', 'experience');
    route::get('/award', 'award');
    route::get('/education', 'education');
    route::get('/skill', 'skill');
    route::get('/interest', 'interest');
});
