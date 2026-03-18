<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    function phimaction() {
        $phimaction_tbl = DB::table('movie')
        ->select('movie.movie_name','release_date','overview','image_link')
        ->join('movie_genre','movie.id','=','movie_genre.id_movie')
        ->join('genre','movie_genre.id_genre','=','genre.id')
        ->where('genre.genre_name','Action')
        ->get();
        return view('movies.phimaction',compact('phimaction_tbl'));
    }

}
