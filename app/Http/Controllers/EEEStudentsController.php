<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EEEStudentsController extends Controller
{
    public function EEE_students(){

        $eeeStudents_info=DB::table('student_tbl')
                         ->where(['std_department'=>2])
                         ->get();


        $manage_eee= view('admin.EEEstudent')->with('EEE_student_info',$eeeStudents_info);

        return view('layout')->with('EEEstudent',$manage_eee);

    }
}
