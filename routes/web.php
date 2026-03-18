<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});
Route::get("/topmovies", "App\Http\Controllers\MovieController@layTopPhim");

