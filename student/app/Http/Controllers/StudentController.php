<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function RegData(request  $req)
  {

      return redirect('/SignUp/');
  }
}
