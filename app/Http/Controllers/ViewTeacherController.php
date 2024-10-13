<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\redirect;
use Session;


Session_start();

class ViewTeacherController extends Controller
{
    public function View_Teachers(){

        $AllTeacher_info=DB::table('teacher_tbl')->get();

        $manage_teacher=view('admin.viewteacher')->with('all_teachers_info',$AllTeacher_info);

        return view('layout')->with('viewteacher',$manage_teacher);


                        
    }

    #delete Teacher
    

    public function delete_Teacher($Teacher_id){
       
        DB::table('teacher_tbl')->where('Teacher_id',$Teacher_id)->delete();
        
        return redirect::to('/View_Teachers');
 }

}
