<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class CivilStudentsController extends Controller
{
    public function Civil_students(){

        $civilStudents_info=DB::table('student_tbl')
                         ->where(['std_department'=>4])
                         ->get();


        $manage_civil= view('admin.civilstudent')->with('Civil_student_info',$civilStudents_info);

        return view('layout')->with('civilstudent',$manage_civil);

    }
}
