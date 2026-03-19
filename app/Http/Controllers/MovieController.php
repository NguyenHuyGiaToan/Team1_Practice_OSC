<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   
    public function danhSachTheLoai()
    {
        $theLoai = DB::table('genre')->get();
        return view('theloai', ['danh_sach_the_loai' => $theLoai]);
    } 
  
    public function layTopPhim()
    {
        $ds_phim = DB::table('movie')
                    ->select('movie_name', 'release_date', 'vote_average')
                    ->orderBy('vote_average', 'desc') 
                    ->limit(10)                       
                    ->get();

        return view('top_rated', compact('ds_phim'));
    }
  
    public function getTopBudgetMovies()
    {
        
        $movies = DB::table('movie')
                    ->orderBy('budget', 'desc')
                    ->limit(10)
                    ->get();

        return view('top_budget', compact('movies'));
    }
  
    public function moviesByRuntime()
    {
        $movies = DB::table('movie')
                    ->where('runtime', '>', 120)
                    ->orderBy('runtime', 'desc')
                    ->limit(10)
                    ->get();

        return view('movies_by_runtime', ['movies' => $movies]);
    }
  
    public function getCanadaMovies()
    {
    
        $movies = DB::table('movie')
                    ->where('country_name', 'Canada')
                    ->get();

        return view('canada_movies', compact('movies'));
    }

    public function phimaction() 
    {
        $phimaction_tbl = DB::table('movie')
                            ->select('movie.movie_name','release_date','overview','image_link')
                            ->join('movie_genre','movie.id','=','movie_genre.id_movie')
                            ->join('genre','movie_genre.id_genre','=','genre.id')
                            ->where('genre.genre_name','Action')
                            ->get();
                            
        return view('movies.phimaction',compact('phimaction_tbl'));
    }
}
?>
