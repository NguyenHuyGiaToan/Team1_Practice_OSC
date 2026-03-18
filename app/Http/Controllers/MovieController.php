<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function layTopPhim()
    {
        $ds_phim = DB::table('movie')
            ->select('movie_name', 'release_date', 'vote_average')
            ->orderBy('vote_average', 'desc') 
            ->limit(10)                       
            ->get();

        // Truyền dữ liệu sang view 'movies.top_rated'
        return view('top_rated', compact('ds_phim'));
    }
}
?>