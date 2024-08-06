<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurent;

use App\Models\user;
use crypt;

class restocontroller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data= restaurent::all();
        return view('list',['data'=>$data]);
    }
    function add(Request $req)
    {

        $resto=new restaurent;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->address=$req->input('address');
        $resto->save();
$req->session()->flash('status','restaurent submitted sucessfully');
return redirect('list');

    }
    function delete($id)
    {
   restaurent::find($id)->delete();
  Session::flash('status','restaurent deleted sucessfully');
  return redirect('list');

    }

function edit($id)
{
    $data= restaurent::find($id);
    return view('edit',['data'=>$data]);
}

function update(Request $req)
{

    $resto= restaurent::find($req->input('id'));
    $resto->name=$req->input('name');
    $resto->email=$req->input('email');
    $resto->address=$req->input('address');
    $resto->save();
$req->session()->flash('status','restaurent updated sucessfully');
return redirect('list');

}


function register(Request $req){
  /*   echo crypt::encrypt('123') */

/* return $req->input(); */
$user=new user;
$user->name=$req->input('');
$user->email=$req->input('email');
$user->password=crypt::encrypt($req->input('password'));
$user->contact=$req->input('contact');
$user->save();
$req->session()->put('user',$req->input('name'));
return redirect('/');

}


function login(Request $req)
{
    $user= user::where("email",$req->input('email'))->get();
 if(crypt::decrypt($user[0]->password)==$req->input('password'));
 {
    $req->session()->put('user',$user[0]->name);
    
return redirect('/');
 }

}


}

