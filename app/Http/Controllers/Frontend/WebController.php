<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    public function home()
    {

        $topstudent = DB::select('select * from alumnai ');
        
        $announcement = DB::select('select * from announcement ');

        $faculity = DB::select('select * from faculity ');

        return view('frontend.home', compact('topstudent','announcement','faculity'));

    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.aboutus');
    }

    public function announce()
    {
        $announcement = DB::select('select * from announcement ');
        return view('frontend.announcements')->with('announcement', $announcement);
    }

    public function announcedetails($id)
    {
        $announcedetails = DB::select('select * from announcement where announcement_id = ?',[$id]);
        return view('frontend.announcement_details')->with('announcedetails',$announcedetails[0]);
    }

    public function teacher()
    {

        $faculity = DB::select('select * from faculity ');

        return view('frontend.teachers', compact('faculity'));
    }

    public function std()
    {
        $topstudent = DB::select('select * from alumnai');

        return view('frontend.top_students')->with('topstudent',$topstudent[0]);
    }



}
