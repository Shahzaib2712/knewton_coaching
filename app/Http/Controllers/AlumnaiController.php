<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlumnaiController extends Controller
{
    public function Alumnai()
    {

        $alumnai = Db::select('select * from alumnai inner join field on alumnai.field_id = field.field_id');



        return view('DashboardView.alumnai', compact('alumnai'));
    }

    public function AlumnaiAddAlumnai()
    {

        $alumnai = Db::select('select * from field');
        return view('DashboardView.alumnai-add-alumnai', compact('alumnai'));
    }

    public function AlumnaiStoreAlumnai(Request $req)
    {

        $req->validate(
            [
                'alumnai_name' => 'required | max:30',
                'field_id' => 'required',
                'alumnai_achivement' => 'required',
                'alumnai_qualification' => 'required | max:50',
                'alumnai_desc' => 'required',
                'alumnai_image' => 'required | image',
            ]
        );

        // lanat he 

        $img = $req['alumnai_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/alumnaiinfo', $imgname);

        Db::insert('insert into alumnai(alumnai_name,field_id,alumnai_achivement,
        alumnai_qualification,alumnai_desc,alumnai_image)
        values(?,?,?,?,?,?)', [$req->alumnai_name, $req->field_id, $req->alumnai_achivement, $req->alumnai_qualification, $req->alumnai_desc, $imgname]);

        return redirect('/alumnai');
    }
    public function AlumnaiEditAlumnai($id)
    {


        $alumnai = Db::select('select * from alumnai where alumnai_id = ?', [$id]);

        $field = Db::select('select * from field');

        if ($alumnai != null) {

            $alumnai = $alumnai[0];

            return view('DashboardView.alumnai-edit-alumnai', compact('alumnai', 'field'));
        }
        return redirect('/alumnai');
    }
    public function AlumnaiUpdateAlumnai(Request $req, $id)
    {

        
        $req->validate(
            [
                'alumnai_name' => 'required | max:30',
                'field_id' => 'required',
                'alumnai_achivement' => 'required',
                'alumnai_qualification' => 'required | max:50',
                'alumnai_desc' => 'required',

            ]
        );
        $alumnai = Db::select('select * from alumnai where alumnai_id = ?', [$id]);

        if ($alumnai != null) {

            if ($req['alumnai_image'] != null) {

                $img = $req['alumnai_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/alumnaiinfo', $imgname);
                unlink('public/alumnaiinfo/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            Db::update(
                'update alumnai set alumnai_name = ? , field_id = ?, alumnai_achivement = ? , alumnai_qualification = ? ,
                 alumnai_desc = ? , alumnai_image = ? where alumnai_id = ? ',
                [
                    $req['alumnai_name'], $req['field_id'], $req['alumnai_achivement'], $req['alumnai_qualification'],
                    $req['alumnai_desc'], $imgname,$id
                ]
            );
            return redirect('/alumnai');
        }

        return redirect('/alumnai');
    }
    public function AlumnaiDeleteAlumnai($id){
           
        $delete = Db::select('select * from alumnai where alumnai_id = ?',[$id]);
        
        if($delete != null){
 
         unlink('public/alumnaiinfo/'.$delete[0]->alumnai_image);

            Db::delete('delete from alumnai where alumnai_id = ?',[$id]);
         return redirect('/alumnai');
 
        }
 
        return redirect('/alumnai');
 
 
     }
}
