<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use PhpParser\Node\Expr\BinaryOp\BooleanOr;
use App\Http\Controllers\user;

class studentViewController extends Controller
{

    public function Student_profile($std_id)
    {

        $StudentView = DB::table('student_tbl')
            ->select('*')
            ->where('std_id', $std_id)
            ->first();



        $student_profile_description = view('student.studentprofile')->with('Student_description', $StudentView);

        return view('stdlayout')->with('studentprofile', $student_profile_description);

    }

    public function Settings($std_id)
    {

        $StudentView = DB::table('student_tbl')
            ->select('*')
            ->where('std_id', $std_id)
            ->first();



        $student_profile_description = view('student.setting')->with('Student_description', $StudentView);

        return view('stdlayout')->with('setting', $student_profile_description);

    }


    public function updateSetting(Request $request, $std_id)
    {
        request()->validate([

            'Current_password'=> 'required',
            'std_password'=> 'required',
            'confirm_std_password'=> 'required | same:std_password'

        ]);

        $user = DB::table('student_tbl')->where('std_id', $std_id)->first();
        $password = $user -> std_password;
        
        $Current_password = md5($request-> Current_password);

        if($Current_password === $password){

            $data = array();
            $data['std_password'] = md5($request->std_password);

            DB::table('student_tbl')->where('std_id', $std_id)->update($data);

            Session::put('exception', 'Profile Update Successfully');
            return redirect::to('/Settings'. $std_id);

        }else{

            Session::put('massage', 'Current password do not match !!');
            return redirect::to('/Settings'. $std_id);

        }

    }
    
    public function Std_Logout(){

        Session::put('std_name',null );
        Session::put('std_id',null );

        return redirect::to('/');

    }


}
