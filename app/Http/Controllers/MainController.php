<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function login(){
        return view('DashboardView.login');
    }

    public function loginstore(Request $req){
   
        $result = DB::select('select * from admin where admin_email = ?' ,[$req['email']]);
     
        if($result != null){
     
           session()->put('admin_email',$req['email']);
           return redirect('/');
        }else{
     
           session()->flash('status',"login Failed");
                return redirect('/login');
        }
      
     
     }

    public function logout(){

        session()->forget('email');
        
        return redirect('/login');
     
     }

}