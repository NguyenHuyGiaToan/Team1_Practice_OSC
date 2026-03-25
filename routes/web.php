<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});

Route::get('/nguyentrongminh', function () {
    return 'Nguyễn Trọng Minh';
});


// 7.6. Tạo một đường dẫn để hiển thị các bộ phim thuộc thể loại (genre_name) là Action. Nội 
// dung hiển thị tại file giao diện (view) gồm tên bộ phim (movie_name), ngày phát hành 
// (release_date), Mô tả (overview), ảnh đại diện (image_link). 
Route::get('/phimaction', [App\Http\Controllers\MovieController::class, 'phimaction']);

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

Route::get('/sach','App\Http\Controllers\BookController@sach');
Route::get('/sach/theloai/{id}','App\Http\Controllers\BookController@theloai');
Route::get('/sach/chitietsach/{id}',"App\Http\Controllers\BookController@chitiet");