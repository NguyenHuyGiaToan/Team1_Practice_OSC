<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});


Route::get('/top-movies', "App\Http\Controllers\MovieController@getTopBudgetMovies");
