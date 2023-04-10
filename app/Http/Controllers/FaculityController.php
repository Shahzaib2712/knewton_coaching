<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FaculityController extends Controller
{
    public function Faculity(){

        $data = Db::select('select * from faculity');

        return view('DashboardView.faculity',compact('data'));        
    }


    public function FaculityAddFaculity(){
        return view('DashboardView.faculity-add-faculity');
    }
    public function FaculityStoreFaculity(Request $req){
      
        $req->validate(
        [
            'faculity_name' => 'required | max:30',
            'faculity_contact' => 'required | max:11',
            'faculity_address' => 'required | max:200',
            'faculity_cnic' => 'required | max:14',
            'faculity_qualification' => 'required | max:50',
            'faculity_gender' => 'required',
            'faculity_joining' => 'required',
            'faculity_image' => 'required  | max:50 | mimes:png,jpg',
            'faculity_cv' => 'required  | max:50',
            'faculity_email' => 'required | max:50 | email',
            'faculity_password' => 'required | max:10',
            'faculity_status' => 'required'
        ]
        );

        $img = $req['faculity_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/faculityinfo', $imgname);

        $cv = $req['faculity_cv'];
        $cvname = $cv->getClientOriginalName();
        $cvname = Str::random(8) . "_" . $cvname;
        $cv->move('public/faculityinfo', $cvname);

        Db::insert('insert into faculity(faculity_name,faculity_contact,faculity_address,
        faculity_cnic,faculity_qualification,faculity_gender,faculity_joining,faculity_image,faculity_cv,
        faculity_email,faculity_password,faculity_status)
        values(?,?,?,?,?,?,?,?,?,?,?,?)', [$req->faculity_name, $req->faculity_contact, $req->faculity_address,
         $req->faculity_cnic, $req->faculity_qualification, $req->faculity_gender, $req->faculity_joining, $imgname,
          $cvname , $req->faculity_email, $req->faculity_password, $req->faculity_status]);

        return redirect('faculity');
    }
    public function FaculityEditFaculity($id)
    {


        $faculity = Db::select('select * from faculity where faculity_id = ?', [$id]);

        if ($faculity != null) {

            $faculity = $faculity[0];

            return view('DashboardView.faculity-edit-faculity', compact('faculity'));
        }
        return redirect('/faculity');
    }
    public function FaculityUpdateFaculity(Request $req, $id)
    {

        
        $req->validate(
            [
            'faculity_name' => 'required | max:30',
            'faculity_contact' => 'required | max:11',
            'faculity_address' => 'required | max:200',
            'faculity_cnic' => 'required | max:14',
            'faculity_qualification' => 'required | max:50',
            'faculity_gender' => 'required',
            'faculity_joining' => 'required',
            'faculity_email' => 'required | max:50 | email',
            'faculity_password' => 'required | max:10',
            'faculity_status' => 'required'
            ]
        );
        $faculity = Db::select('select * from faculity where faculity_id = ?', [$id]);

        if ($faculity != null) {

            if ($req['faculity_image'] != null) {

                $img = $req['faculity_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/faculityinfo/', $imgname);
                unlink('public/faculityinfo/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            if ($faculity != null) {

                if ($req['faculity_cv'] != null) {

                    $cv = $req['faculity_cv'];
                    $cvname = $cv->getClientOriginalName();
                    $cvname = Str::random(8) . "_" . $cvname;
                    $cv->move('public/faculityinfo/', $cvname);
                    unlink('public/faculityinfo/' . $req['oldcv']);
                } else {
                    $cvname = $req['oldcv'];
                }
            }
            Db::update(
                'update faculity set faculity_name = ? , faculity_contact = ?, faculity_address = ? , faculity_cnic = ? ,
                faculity_qualification = ? , faculity_gender = ? , faculity_joining = ? ,
                faculity_image  = ? , faculity_cv = ? , faculity_email = ?, 
                faculity_password = ? , faculity_status = ? where faculity_id = ? ',
                [
                    $req['faculity_name'], $req['faculity_contact'], $req['faculity_address'], $req['faculity_cnic'],
                    $req['faculity_qualification'], $req['faculity_gender'], $req['faculity_joining'], $imgname,$cvname,
                    $req['faculity_email'], $req['faculity_password'], $req['faculity_status'], $id
                ]
            );


            return redirect('/faculity');
        }

        return redirect('/faculity');
    }
    public function FaculityDeleteFaculity($id){
           
        $delete = Db::select('select * from faculity where faculity_id = ?',[$id]);
        
        if($delete != null){
 
         unlink('public/faculityinfo/'.$delete[0]->faculity_image);
         unlink('public/faculityinfo/'.$delete[0]->faculity_cv);

            Db::delete('delete from faculity where faculity_id = ?',[$id]);
         return redirect('/faculity');
 
        }
 
        return redirect('/faculity');
 
 
     }

}