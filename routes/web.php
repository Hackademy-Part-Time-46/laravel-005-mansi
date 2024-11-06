<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])
    ->name('homepage');
Route::get('/dettaglio/{string}', [PageController::class, 'detail'])
    ->name('detail');
Route::get('/contatti', [PageController::class, 'contact'])
    ->name('contact');

    // Route::controller(PageController::class)->group(function () {
    //     Route::get('/', 'welcome')
    //         ->name('homepage');
    //     Route::get('/dettaglio/{string}', 'detail')
    //         ->name('detail');
    // });
