<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TDetailsController extends Controller
{
    public function testdetail(){
        $student = Db::select('select std.studenttest_id,std.student_id,std.test_id,std.test_marks,std.obtain_marks from student_test as std inner join student on student.student_id = std.student_id inner join test on test.test_id = std.test_id');
        return view('DashboardView.test-detail')->with('student',$student);    
    }

    public function testdetailAdd(){
        $test_detail = Db::select('select * from student_test');
        $student = Db::select('select * from student');
        $test = Db::select('select * from test');

        return view('DashboardView.test-detail-add', compact('test_detail','student','test'));
    }

    public function testdetailStore(Request $req){
        $req->validate(
            [
                'student_id' => 'required',
                'test_id' => 'required',
                'test_marks' => 'required',
                'obtain_marks' => 'required'
            ]
            );
    
            Db::insert('insert into student_test(student_id,test_id,test_marks,obtain_marks)
            values(?,?,?,?)',
            [$req->student_id, $req->test_id, $req->test_marks, $req->obtain_marks]);
    
            return redirect('test-detail');
       
    }

    public function testdetailEdit($id){
        
        $test_detail = Db::select('select * from student_test where studenttest_id = ? ', [$id]);
        $student = Db::select('select * from student');
        $test = Db::select('select * from test');

        if ($test_detail != null) {

            $test_detail = $test_detail[0];

        return view('DashboardView.test-detail-edit', compact('test_detail','student','test'));
        }
    }

    public function testdetailUpdate(Request $req, $id){
        $req->validate(
            [
                'student_id' => 'required',
                'test_id' => 'required',
                'test_marks' => 'required',
                'obtain_marks' => 'required'
            ]
            );

        $test_detail = Db::select('select * from student_test where studenttest_id = ? ', [$id]);
    
        if($test_detail != null){
            $test_detail = DB::update('update student_test set student_id = ? ,test_id = ? ,test_marks = ?, obtain_marks = ?  where studenttest_id = ?',
            
            [$req->student_id, $req->test_id, $req->test_marks, $req->obtain_marks,$id]);

             return redirect('/test-detail');
            }
    
            return redirect('/test-detail');
    }

    public function testdetailDelete($id){
        $delete = Db::select('select * from student_test where studenttest_id = ?',[$id]);
        
        if($delete != null){

            Db::delete('delete from student_test where studenttest_id = ?',[$id]);
         return redirect('/test-detail');
 
        }
 
        return redirect('/test-detail');
    }
}
