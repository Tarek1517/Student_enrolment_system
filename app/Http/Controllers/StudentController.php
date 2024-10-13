<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\ DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\User;


Session_start();


class StudentController extends Controller
{
    
    #admin dashboard.......

    public function Student_Dashboard(){
       
        return view('student.StdDasgboard');

    }
    
    public function Student_Login(Request $request){
    

      $email     = $request->std_email;
      $password  = md5($request->std_password);

      #dd($email, $password);

      $results    = DB::table('student_tbl')
                 -> where('std_email',$email )
                 -> where('std_password',$password )
                 ->first();




     if($results){

        Session::put('std_id', $results->std_id );

        return redirect::to('/Student_Dashboard');
     }
     
     else{

        Session::put('exception','Email or password invalid' );
        return redirect::to('/');
     }

    }

    public function Student_redirect(){
         return view('student.std_login');
    }

    public function Student_Register(Request $request){

        request()->validate([

            'std_name'=> 'required|unique:student_tbl',
            'std_email'=> 'required|email:rfc,dns|unique:student_tbl',
            'std_password'=> 'required',
            'confirm_std_password'=> 'required | same:std_password',
            'std_roll'=> 'required',
            'std_department'=> 'required',
            'std_image'=> 'required',
            'std_admissionYear'=> 'required',
            'std_fatherName'=> 'required',
            'std_motherName'=> 'required',
            'std_phone'=> 'required',
            'std_Address'=> 'required'

        ]);

        
        $data=array();
            $data['std_name']=$request->std_name;
            $data['std_email']=$request->std_email;
            $data['std_password']=md5($request->std_password);
            $data['std_phone']=$request->std_phone;
            $data['std_roll']=$request->std_roll;
            $data['std_fatherName']=$request->std_fatherName;
            $data['std_motherName']=$request->std_motherName;
            $data['std_Address']=$request->std_Address;
            $data['std_department']=$request->std_department;
            $data['std_admissionYear']=$request->std_admissionYear;
            $image=$request->file('std_image');
                
            
        if($image){

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

                if($success){

                    $data['std_image']=$image_url;
                    DB::table('student_tbl')->insert($data);

                    Session::put('massage','Your Registration is complete !!');
                    return redirect::to('/Student_redirect');

                }


        }

         $data['std_image']=$image_url;
                    DB::table('student_tbl')->insert($data);

                    Session::put('massage','Student save successfully');
                    return redirect::to('/Student_redirect');

                    DB::table('student_tbl')->insert($data);

                    Session::put('massage','Student save successfully');
                    return redirect::to('/Student_redirect');
    }

    public function checkUsername(Request $request)
    {
        $username = $request->input('username');

        $exists = DB::table('student_tbl')->where('std_name', $username)->exists();
        $message = $exists ? "Username {$username} already exists!!" : "Username {$username} is available!!";
        return response()->json(['exists' => $exists, 'message'=> $message ]);
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $exists = DB::table('student_tbl')->where('std_email', $email)->exists();
        $message = $exists ? "email {$email} already exists!!" : "email {$email} is available!!";
        return response()->json(['exists' => $exists, 'message'=> $message ]);
    }

    

}
