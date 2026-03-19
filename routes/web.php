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
