<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClassController extends Controller
{
    // Class
    public function Class(){

        $data = Db::select('select * from class');

        return view('DashboardView.class',compact('data'));        
    }
// Classes
    public function ClassAddClass(){

        $data = Db::select('select * from class');

        return view('DashboardView.class-add-class',compact('data'));
    }
    public function ClassStoreClass(Request $req){
        $req->validate(
            [
                'class_name' => 'required | max:30',
            ]
            );
            
        Db::insert('insert into class(class_name) values(?)',[$req->class_name]);
        return redirect('/class');
    }
// Classes
    public function ClassEditClass($id){

        
        $class = Db::select('select * from class where class_id = ?',[$id]);

        if($class != null){

            
            return view('DashboardView.class-edit-class',compact('class'));
        }

        return redirect('/class');



    }
    public function ClassUpdateClass($id,Request $req){


        
        $class = Db::select('select * from class where class_id = ?',[$id]);

        if($class != null){

            Db::update('update class set class_name = ? where class_id = ?',[$req['class_name'],$id]);

        return redirect('/class');

        }
        
        return redirect('/class');

        
    }

    public function ClassDeleteClass($id){

         
        $class = Db::select('select * from class where class_id = ?',[$id]);

        if($class != null){

            Db::delete('delete from class where class_id = ?',[$id]);

        return redirect('/class');

        }

        return redirect('/class');


    }   

}
