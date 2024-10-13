<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rule;
use ValidateRequests;


Session_start();

class AllStudentController extends Controller
{
    public function all_students()
    {

        $allStudent_info = DB::table('student_tbl')->get();

        $manage_student = view('admin.allstudent')->with('all_student_info', $allStudent_info);

        return view('layout')->with('allstudent', $manage_student);

    }

    public function delete_students($std_id)
    {

        DB::table('student_tbl')->where('std_id', $std_id)->delete();

        return redirect::to('/all_students');
    }

    #profile view

    public function View_profile($std_id)
    {

        $StudentView = DB::table('student_tbl')
            ->select('*')
            ->where('std_id', $std_id)
            ->first();

// echo "</pre>";
// print_r($StudentView);
// echo "</pre>";

        $student_profile_description = view('admin.profile')->with('Student_description', $StudentView);

        return view('layout')->with('profile', $student_profile_description);

    }

    public function Edit_profile($std_id)
    {


        $StudentView = DB::table('student_tbl')
            ->select('*')
            ->where('std_id', $std_id)
            ->first();

// echo "</pre>";
// print_r($StudentView);
// echo "</pre>";

        $student_profile_description = view('admin.editProfile')->with('Student_description', $StudentView);

        return view('layout')->with('editProfile', $student_profile_description);

    }

    public function updateStudent(Request $request, $std_id)
    {

        $data = array();
        $data['std_name'] = $request->std_name;
        $data['std_email'] = $request->std_email;
        $data['std_password'] = md5($request->std_password);
        $data['std_phone'] = $request->std_phone;
        $data['std_roll'] = $request->std_roll;
        $data['std_fatherName'] = $request->std_fatherName;
        $data['std_motherName'] = $request->std_motherName;
        $data['std_Address'] = $request->std_Address;
        $data['std_admissionYear'] = $request->std_admissionYear;

        DB::table('student_tbl')->where('std_id', $std_id)->update($data);

        Session::put('exception', 'Profile Update Successfully');
        return redirect::to('/all_students');

    }

    

}
