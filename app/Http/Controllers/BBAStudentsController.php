<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAStudentsController extends Controller
{
    public function BBA_students(){

        $bbaStudents_info=DB::table('student_tbl')
                         ->where(['std_department'=>3])
                         ->get();


        $manage_bba= view('admin.bbastudent')->with('BBA_student_info',$bbaStudents_info);

        return view('layout')->with('bbastudent',$manage_bba);

    }
}
