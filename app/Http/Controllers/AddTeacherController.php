<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Str;
use Session;

Session_start();

class AddTeacherController extends Controller
{
    public function Add_Teacher()
    {
        return view("admin.addteacher");
    }

    public function SaveTeacher(Request $request)
    {

        $data = array();
        $data['Teacher_name'] = $request->Teacher_name;
        $data['Teacher_phn'] = $request->Teacher_phn;
        $data['Teacher_address'] = $request->Teacher_address;
        $data['Teacher_department'] = $request->Teacher_department;
        $image = $request->file('Teacher_img');

        if ($image) {

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $images_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {

                $data['Teacher_img'] = $images_url;
                DB::table('teacher_tbl')->insert($data);

                Session::put('exception', 'Teacher save successfully');
                return redirect::to('Add_Teacher');

            }

        }

        $data['Teacher_img'] = $images_url;
        DB::table('teacher_tbl')->insert($data);

        Session::put('exception', 'Teacher save successfully');
        return redirect::to('Add_Teacher');

        DB::table('teacher_tbl')->insert($data);

        Session::put('exception', 'Teacher save successfully');
        return redirect::to('Add_Teacher');

    }

}
