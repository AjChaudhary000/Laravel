<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserPollController extends Controller
{
    public function userpolldata( )
    {    
        $data = DB::table('pollmaster')->where(['status'=>1])->get();
            return view('UserHome',['pollData'=>$data]);
    }
    public function showresultdata(request $req)
    {   $id =  $req->get('id');
        $list = DB::table('pollmaster')->where(['id'=>$id])->get();
       
        if($req->get('q1')=="r1"){
            $no = $list[0]->o1_result;
            $no ++;
            $data = DB::table('pollmaster')->where(['id'=>$id])->update(['o1_result'=>$no]);
           
        }else if($req->get('q1')=="r2"){
            
            $no = $list[0]->o2_result;
            $no ++;

            $data = DB::table('pollmaster')->where(['id'=>$id])->update(['o2_result'=>$no]);
            
            
        }else if($req->get('q1')=="r3"){
            $no = $list[0]->o3_result;
            $no ++;
            $data = DB::table('pollmaster')->where(['id'=>$id])->update(['o3_result'=>$no]);
           
        }else if($req->get('q1')=="r4"){
            $no = $list[0]->o4_result;
            $no ++;
            $data = DB::table('pollmaster')->where(['id'=>$id])->update(['o4_result'=>$no]);
           
        }
        $list = DB::table('pollmaster')->where(['id'=>$id])->get();
        $total = $list[0]->o1_result + $list[0]->o2_result + $list[0]->o3_result + $list[0]->o4_result;
        $p1  = $list[0]->o1_result/$total*100;
        $p2  = $list[0]->o2_result/$total*100;
        $p3  = $list[0]->o3_result/$total*100;
        $p4  = $list[0]->o4_result/$total*100;
        return view('UserHome',['pollData'=>[],'total'=>$total,'p1'=>round($p1),'p2'=>round($p2),'p3'=>round($p3),'p4'=>round($p4)]);
    }

}
