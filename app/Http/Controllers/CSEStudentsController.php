<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEStudentsController extends Controller
{
    public function CSE_students(){

        $cseStudents_info=DB::table('student_tbl')
                         ->where(['std_department'=>1])
                         ->get();


        $manage_Cse= view('admin.CSEstudents')->with('CSE_student_info',$cseStudents_info);

        return view('layout')->with('CSEstudents',$manage_Cse);

    }

}



