<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    // Class
    public function Subject(){

        $data = Db::select('select * from subject');

        return view('DashboardView.subject',compact('data'));        
    }
// Classes
    public function SubjectAddSubject(){

        $data = Db::select('select * from subject');

        return view('DashboardView.subject-add-subject',compact('data'));
    }
    public function SubjectStoreSubject(Request $req){
        $req->validate(
            [
                'subject_name' => 'required | max:30',
            ]
            );
            
        Db::insert('insert into subject(subject_name) values(?)',[$req->subject_name]);
        return redirect('/subject');
    }
// Classes
    public function SubjectEditSubject($id){

        
        $subject = Db::select('select * from subject where subject_id = ?',[$id]);

        if($subject != null){

            
            return view('DashboardView.subject-edit-subject',compact('subject'));
        }

        return redirect('/subject');



    }
    public function SubjectUpdateSubject($id,Request $req){


        
        $subject = Db::select('select * from subject where subject_id = ?',[$id]);

        if($subject != null){

            Db::update('update subject set subject_name = ? where subject_id = ?',[$req['subject_name'],$id]);

        return redirect('/subject');

        }
        
        return redirect('/subject');

        
    }

    public function SubjectDeleteSubject($id){

         
        $subject = Db::select('select * from subject where subject_id = ?',[$id]);

        if($subject != null){

            Db::delete('delete from subject where subject_id = ?',[$id]);

        return redirect('/subject');

        }

        return redirect('/subject');


    }   

}
