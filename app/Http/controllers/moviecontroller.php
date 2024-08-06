<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class moviecontroller
{
    //
    public function showmovies(Request $request){
        $movies=DB::select("select * from movietbl");
        return view('display',compact('movies'));
    }

    public function findshows(Request $requests){
        if(isset($request->val)){
            $shows=db::select("select * from showstbl where movieid=?",[$request->val]);
        }
        return $shows;


    }
}



