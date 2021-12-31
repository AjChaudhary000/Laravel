<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoolController extends Controller
{
    public function register(Request $request)
    {

        
       $username = $request->get("username");
       $userpass = $request->get("userpwd");

       $user = DB::table('admin_login')->where('username', $username) ->where('userpassword', $userpass)->first();  

       if($user == null)
       {
           return "wrong id or password";
       }
       else
       {
        return "success";
       }

      
    }

    public function addpool(Request $request)
    {
        $Question = $request->get("question");
        $opt1 = $request->get("que1");
        $opt2 = $request->get("que2");
        $opt3 = $request->get("que3");
        $opt4 = $request->get("que4");

        DB::table('pool')->insert(
            ['Question' => $Question, 'opt1' =>  $opt1,'opt2' =>  $opt2,'opt3' =>  $opt3,'opt4' =>  $opt4,'status' =>  0]
        );

        // $userpass = $request->get("userpwd"); 
        return "inserted";
    }

    public function displaypool()
    {
        $POOL = DB::table('pool')->get();

        return view('Viewpool', ['pools' =>  $POOL]);

        
    }
    public function active($pid)
    { 
         DB::table('pool')->update(['status' => 0]);
         DB::table('pool')->where(['id' => $pid])->update(['status' => 1]);

         return "updated";
         
    }

    public function user()
    {
        

        $POOL = DB::table('pool')->where(['status'=> 1])->get();

        return view('Usersite', ['pools' =>  $POOL]);
    }
    public function Answer(Request $request)
    {
        $answer = $request->get('ans');
        $id = $request->get('poolid');

        $cnt = DB::table('pool_ans')->where(['answer'=> $answer ])->get('cn')->count();

        if($cnt == 0)
        {
            $cnt ==1;
        }
        else
        {
            $cnt = $cnt +1;
        }
       
        DB::table('pool_ans')->insert(
            ['pool_id' => $id, 'answer' =>  $answer , 'cn' =>  $cnt]
        );

        return "inserted";
    }

    public function poolanswer($id)
    {
        $POOL = DB::table('pool')->where(['id'=> $id])->get();

        $total = DB::table('pool_ans')->where(['pool_id'=> $id])->get()->count(); 

        $opt1 = DB::table('pool_ans')->where(['pool_id'=> $id , 'answer' =>1])->get('cn')->max('cn'); 
        $opt2 = DB::table('pool_ans')->where(['pool_id'=> $id , 'answer' =>2])->get('cn')->max('cn'); 
        $opt3 = DB::table('pool_ans')->where(['pool_id'=> $id , 'answer' =>3])->get('cn')->max('cn'); 
        $opt4 = DB::table('pool_ans')->where(['pool_id'=> $id , 'answer' =>4])->get('cn')->max('cn'); 
        
        $per1 = $opt1 *100 / $total;
        $per2 = $opt2 *100 / $total;
        $per3 = $opt3 *100 / $total;
        $per4 = $opt4 *100 / $total;

        
        

         return view('result', compact("per1", "per2", "per3","per4","POOL") );

           
        
        
    }
}
