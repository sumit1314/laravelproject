<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use\App\Models\User;
use illuminate\Support\Facades\Validator;

class usercontroller
{
    //
public function createuser(Request $request)
{

$validator=validator::make($request->all(),[

    'name'=>'required|string',
    'email'=>'required|string',
    'phone'=>'required|numeric',
    'password'=>'required|min:6'
]);
if($validator->fails()){
    $result=array('status'=>false,'message'=>"validation error occcured",'error_message'=>$validator->error());
    return response()->json($result,400);

}


   $user=User::create([
'name' =>$request->name,
'email' =>$request->email,
'phone' =>$request->phone,
'password' =>bcrypt($request->password),
   ]);

   if($user->id){
    $result=array('status'=>true,'message'=>"user created",'data '=>$user);
    $responsecode=200;
   }
   else{
    $result=array('status'=>false,'message'=>"something went wrong");
    $responsecode=400;
   }


return response()->json($result,$responsecode);

}


}
