<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Sử dụng Query Builder

class MovieController extends Controller
{
    public function getTopBudgetMovies()
    {
        // Lấy 10 bộ phim có budget cao nhất, sắp xếp giảm dần
        $movies = DB::table('movie')
                    ->orderBy('budget', 'desc')
                    ->limit(10)
                    ->get();

        // Truyền dữ liệu sang view
        return view('top_budget', compact('movies'));
    }
}