<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function danhSachTheLoai()
    {
        
        $theLoai = DB::table('genres')->get();
        return view('theloai', ['danh_sach_the_loai' => $theLoai]);
    }
}
