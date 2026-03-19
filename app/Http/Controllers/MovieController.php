<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function moviesByRuntime()
    {
        $movies = DB::table('movies')
                    ->where('runtime', '>', 120)
                    ->orderBy('runtime', 'desc')
                    ->limit(10)
                    ->get();

        return view('movies_by_runtime', ['movies' => $movies]);
    }
}