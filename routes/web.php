<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});

Route::get('/nguyentrongminh', function () {
    return 'Nguyễn Trọng Minh';
});

Route::get('/doanleduylong', function () {
    return 'Đoàn Lê Duy Long';
});
Route::get('/nguyenthinhu', function () {
    return 'Nguyễn Thị Như';
});

Route::get('/huynhthithanhngoc', function () {
    return 'Huỳnh Thị Thanh Ngọc';
});

Route::get('/nguyenthibichngan', function () {
    return 'Nguyễn Thị Bích Ngân';
});

Route::get('/the-loai-phim', 'App\Http\Controllers\MovieController@danhSachTheLoai');
Route::get("/top-phim-theo-binh-chon", "App\Http\Controllers\MovieController@layTopPhim");
Route::get('/top-phim-theo-doanh-thu', "App\Http\Controllers\MovieController@getTopBudgetMovies");
Route::get('/phim-thoi-luong-tren-120', [App\Http\Controllers\MovieController::class, 'moviesByRuntime']);
Route::get('/phim-canada', "App\Http\Controllers\MovieController@getCanadaMovies");
Route::get('/phim-action', [App\Http\Controllers\MovieController::class, 'phimaction']);
