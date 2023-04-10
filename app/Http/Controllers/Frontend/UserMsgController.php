<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_msg;

class UserMsgController extends Controller
{
    public function user(){
        return view('frontend.home');
    }
    function DataInsert(Request $request){

        $user_name = $request->input('user_name');
        $user_contact = $request->input('user_contact');
        $user_email = $request->input('user_email');
        $user_date = $request->input('user_date');
        $user_message = $request->input('user_message');

        $isInsertSuccess = user_msg::insert(['user_name' => $user_name, 'user_contact' => $user_contact,
         'user_email' => $user_email, 'user_date' => $user_date, 'user_message' => $user_message]);
        if($isInsertSuccess) echo '<h2> Insert Success </h2>';
        else echo '<h2>Insert Failed</h2>';
    }
}









// public function register(Request $req){
//     $req->validate(
//         [
//             'user_name' => 'required | max:30',
//             'user_contact' => 'required | max:11',
//             'user_email' => 'required | email | max:50',
//             'user_date' => 'required | date',
//             'user_message' => ''
//         ]
//     );
//     echo"<pre>";
//     print_r($req->all());
// }