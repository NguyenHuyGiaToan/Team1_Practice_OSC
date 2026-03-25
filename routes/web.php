<?php

use Illuminate\Support\Facades\Route;

Route::get('/nguyenhuygiatoan', function () {
    return 'Nguyễn Huy Gia Toàn';
});


Route::get('/nguyentrongminh', function() { 
    return 'Nguyễn Trọng Minh '; 
});

// 7.6. Tạo một đường dẫn để hiển thị các bộ phim thuộc thể loại (genre_name) là Action. Nội 
// dung hiển thị tại file giao diện (view) gồm tên bộ phim (movie_name), ngày phát hành 
// (release_date), Mô tả (overview), ảnh đại diện (image_link). 
Route::get('/phimaction', [App\Http\Controllers\MovieController::class, 'phimaction']);

Route::get('/sach','App\Http\Controllers\BookController@sach');