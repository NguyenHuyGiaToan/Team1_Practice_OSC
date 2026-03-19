<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getCanadaMovies()
{
    // Lấy danh sách phim có quốc gia là Canada
    $movies = DB::table('movie')
                ->where('country_name', 'Canada')
                ->get();

    // Truyền dữ liệu sang view tên là canada_movies
    return view('canada_movies', compact('movies'));
}
}