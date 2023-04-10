<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

Class TestController extends Controller
{
    public function Test(){

        $test = Db::select('select * from test');

        return view('DashboardView.test',compact('test'));        
    }
    public function TestAddTest(){

        $test = Db::select('select * from test');

        return view('DashboardView.test-add-test',compact('test'));
    }
    public function TestStoreTest(Request $req)
    {

        $req->validate(
            [
                'test_title' => 'required | max:30',
                'test_marks' => 'required',
            ]
        );

        // lanat he 

        Db::insert('insert into test(test_title,test_marks)
        values(?,?)', [$req->test_title, $req->test_marks]);

        return redirect('/test');
    }
    public function TestEditTest($id)
    {


        $test = Db::select('select * from test where test_id = ?', [$id]);

        if ($test != null) {

            $test = $test[0];

            return view('DashboardView.test-edit-test', compact('test'));
        }
        return redirect('/test');
    }
    public function TestUpdateTest($id,Request $req){


        
        $test = Db::select('select * from test where test_id = ?',[$id]);

        if($test != null){

            Db::update('update test set test_title = ? , test_marks = ? where test_id = ?',
            [
                $req['test_title'], $req['test_marks'],$id
            ]
        );

        return redirect('/test');
    }

    return redirect('/test');
}
public function TestDeleteTest($id){

         
    $test = Db::select('select * from test where test_id = ?',[$id]);

    if($test != null){

        Db::delete('delete from test where test_id = ?',[$id]);

    return redirect('/test');

    }

    return redirect('/test');


}   

}
