<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function messages()
    {

        $messages = DB::select('select * from user_msg');

        return view('DashboardView.messages', compact('messages'));

    }
}
