<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\moviecontroller;
use App\Http\Controllers\restocontroller;
use App\Mail\samplemail;

use Illuminate\Support\str;






 Route::get('/',function(){
     return view('welcome'); 

});
