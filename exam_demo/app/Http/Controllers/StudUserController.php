<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudUserController extends Controller
{
public function Adduser(Request $req)
{
  $uname = $req->get("uname");
  $pass = $req->get("upass");
  $mobileno = $req->get("umobile");
  $index = DB::table('User')->insert(['uname'=>$uname,'pass'=>$pass,'mobileno'=>$mobileno]);
   if($index){
       return redirect('/UserData');
   }else{
    return $req;
   }
}
public function ShowData()
{
 
  $data = DB::table('User')->get();
   
       return view('home',['user'=>$data]);
}
public function deleteData($id)
{
 
    $index = DB::table('user')->where('id',$id)->delete();
    $data = DB::table('User')->get();
   if($index){
    
    return view('home',['user'=>$data]);
   }else{
       return view('home',['user'=>$data]);
   }
}
}
