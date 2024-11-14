<?php

use App\Http\Controllers\Backoffice\SchoolController;
use Illuminate\Support\Facades\Route;



Route::middleware([])->prefix('admin')->name('admin.')->group(function(){
    Route::controller(SchoolController::class)->prefix('school')->name('school.')->group(function () {
        route::get('/', 'index')->name('index');
        route::get('/create', 'create')->name('create');
        route::post('/store', 'store')->name('store');
        route::get('/{id}/edit', 'edit')->name('edit');
        route::put('/{id}/update', 'update')->name('update');
        route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });
});


