<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminPollController extends Controller
{
    public function AdminLoginCheck(request $req)
        {
        $username = $req->get('email');
        $password = $req->get('password');
        $user = DB::table('userMaster')->where('email',$username)->where('password',$password)->first();
        if($user){
            return redirect('/AdminHome');
        }else{
            return redirect('/');
        }
    }
    public function adminaddpoll(request $req)
    {
       $poll_name =  $req->get('pollname');
       $Option_1 =  $req->get('Option_1');
       $Option_2 =  $req->get('Option_2');
       $Option_3 =  $req->get('Option_3');
       $Option_4 =  $req->get('Option_4');
       $Status   = 1;
       $addpoll = DB::table('pollmaster')->insert(['pollname'=>$poll_name,'option_1'=>$Option_1,'option_2'=>$Option_2,'option_3'=>$Option_3,'option_4'=>$Option_4,'status'=>$Status]);
       if($addpoll){
         
           return  redirect('/AdminHome');
       }else{
           return "not insert data ";
       }
    }
    public function AdminHomePage()
    {
        $data = DB::table('pollmaster')->get();
        return view('AdminHome',['poll_list'=>$data]);
    }
}
