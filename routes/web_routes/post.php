<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => 'posts',
        'middleware' => ['prevent-back-button', 'auth'],
        'as' => 'posts.'
    ],
    function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{post}', 'edit')->middleware('can:view,post')->name('edit');
            Route::post('/', 'store')->name('store');
            Route::put('/{post}', 'update')->middleware('can:update,post')->name('update');
            Route::delete('/{post}', 'destroy')->middleware('can:delete,post')->name('destroy');
        });
    }
);
