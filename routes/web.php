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