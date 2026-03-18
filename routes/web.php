<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});


Route::get('/the-loai-phim', 'App\Http\Controllers\MovieController@danhSachTheLoai');