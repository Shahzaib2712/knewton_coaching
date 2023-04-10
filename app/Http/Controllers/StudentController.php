<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function Student(){

            $student = Db::select('select * from student inner join class on class.class_id = student.class_id inner join field on field.field_id = student.field_id');
            return view('DashboardView.student', compact('student'));
        }
    public function StudentAddStudent(){ 

        $student = Db::select('select * from student');
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');

        return view('DashboardView.student-add-student', compact('student','class','field'));
    }
    public function StudentStoreStudent(Request $req){
      
        $req->validate(
        [
            'student_name' => 'required | max:30',
            'student_fname' => 'required | max:30',
            'student_contact' => 'required | max:11',
            'student_cnic' => 'max:14',
            'class_id' => 'required',
            'field_id' => 'required',
            'student_email' => 'required | max:50',
            'student_password' => 'required',
            'student_status' => 'required'
        ]
        );

        Db::insert('insert into student(student_name,student_fname,student_contact,
        student_cnic,class_id,field_id,student_email,student_password,student_status)
        values(?,?,?,?,?,?,?,?,?)',
        [$req->student_name, $req->student_fname, $req->student_contact, $req->student_cnic, $req->class_id, $req->field_id, 
         $req->student_email,$req->student_password,$req->student_status]);

        return redirect('student');
    }


    public function StudentEditStudent($id){

        $field = Db::select('select * from field');

        $student = Db::select('select * from student where student_id = ? ', [$id]);
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');

        if ($student != null) {

            $student = $student[0];

        return view('DashboardView.student-edit-student', compact('student','class','field'));
        }
    
    }

    public function StudentUpdateStudent(Request $req, $id){
        $req->validate(
            [
                'student_name' => 'required | max:30',
                'student_fname' => 'required | max:30',
                'student_contact' => 'required | max:11',
                'student_cnic' => 'max:14',
                'class_id' => 'required',
                'field_id' => 'required',
                'student_email' => 'required | max:50',
                'student_password' => 'required',
                'student_status' => 'required'
            ]
            );

            $student = Db::select('select * from student where student_id = ?', [$id]);

           if($student != null){
            $student = DB::update('update student set student_name = ? ,student_fname = ? ,student_contact = ? ,
            student_cnic = ? ,class_id = ? ,field_id = ? ,student_email = ? ,student_password = ? ,student_status = ? where student_id = ?',
            
            [$req->student_name, $req->student_fname, $req->student_contact, $req->student_cnic, $req->class_id, $req->field_id, 
             $req->student_email,$req->student_password,$req->student_status, $id ]);

             return redirect('/student');
            }
    
            return redirect('/student');

    }

    public function StudentDeleteStudent($id){
        $delete = Db::select('select * from student where student_id = ?',[$id]);
        
        if($delete != null){

            Db::delete('delete from student where student_id = ?',[$id]);
         return redirect('/student');
 
        }
 
        return redirect('/student');
 
    }
}
