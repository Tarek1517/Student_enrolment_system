<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

Session_start();

class AddStudentController extends Controller
{
    public function add_student()
    {

        return view('admin.addstudent');

    }

    public function saveStudent(Request $request)
    {

        request()->validate([

            'std_name' => 'required',
            'std_email' => 'required|email|unique:student_tbl',
            'std_password' => 'required',
        ]);

        $data = array();
        $data['std_name'] = $request->std_name;
        $data['std_email'] = $request->std_email;
        $data['std_password'] = md5($request->std_password);
        $data['std_phone'] = $request->std_phone;
        $data['std_roll'] = $request->std_roll;
        $data['std_fatherName'] = $request->std_fatherName;
        $data['std_motherName'] = $request->std_motherName;
        $data['std_Address'] = $request->std_Address;
        $data['std_department'] = $request->std_department;
        $data['std_admissionYear'] = $request->std_admissionYear;
        $image = $request->file('std_image');

        if ($image) {

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {

                $data['std_image'] = $image_url;
                DB::table('student_tbl')->insert($data);

                Session::put('exception', 'Student save successfully');
                return redirect::to('add_student');

            }

        }

        $data['std_image'] = $image_url;
        DB::table('student_tbl')->insert($data);

        Session::put('exception', 'Student save successfully');
        return redirect::to('add_student');

        DB::table('student_tbl')->insert($data);

        Session::put('exception', 'Student save successfully');
        return redirect::to('add_student');

    }
}
