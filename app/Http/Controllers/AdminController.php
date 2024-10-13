<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

Session_start();

class AdminController extends Controller
{

    #admin dashboard.......

    public function admin_dashboard()
    {

        return view('admin.dashboard');

    }

    public function adminDashboard(Request $request)
    {
        #  return view('admin.dashboard');

        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $results = DB::table('admin_table')
            ->where('admin_email', $email)
            ->where('admin_password', $password)
            ->first();

        if ($results) {

            Session::put('admin_id', $results->admin_id);

            return redirect::to('/admin_dashboard');
        } else {

            Session::put('exception', 'Email or password invalid');
            return redirect::to('/backend');
        }

    }

    #logout........

    public function logout()
    {

        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return redirect::to('/backend');

    }

    public function Admin_Register(Request $request)
    {

        // request()->validate([

        //     'std_name'=> 'required',
        //     'std_email'=> 'required|email|unique:admin_table',
        //     'std_password'=> 'required'
        // ]);

        $pass = $request->admin_password;
        $compass = $request->Confirm_admin_password;

        if ($pass === $compass) {

            $pass = $compass;

        } else {
            Session::put('massage', 'password do not mach !!');
            return redirect::to('/Admin_Register');
        }

        $data = array();
        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['admin_password'] = md5($request->admin_password);
        $data['admin_phone'] = $request->admin_phone;
        $image = $request->file('admin_img');

        if ($image) {

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {

                $data['admin_img'] = $image_url;
                DB::table('admin_table')->insert($data);

                Session::put('exception', 'Register successfully');
                return redirect::to('/Admin_Register');

            }

        }

        $data['admin_img'] = $image_url;
        DB::table('admin_table')->insert($data);

        Session::put('exception', 'Register successfully');
        return redirect::to('/Admin_Register');

        DB::table('admin_table')->insert($data);

        Session::put('exception', 'Register successfully');
        return redirect::to('/Admin_Register');

    }

    // public function StudentLogin(){

    //     return view('student.StdDasgboard');

    // }

}
