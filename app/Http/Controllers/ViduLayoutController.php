<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViduLayoutController extends Controller
{
    function chitiet($id)
    {
        $data = DB::select("select * from sach where id = ?", [$id])[0]; //DB::table("sach")->where("id",$id)->first();
        return view("vidusach.chitiet", compact("data"));
    }
}
