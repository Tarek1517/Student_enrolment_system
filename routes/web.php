<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\AllStudentController;
use App\Http\Controllers\CSEStudentsController;
use App\Http\Controllers\EEEStudentsController;
use App\Http\Controllers\BBAStudentsController;
use App\Http\Controllers\CivilStudentsController;
use App\Http\Controllers\AddTeacherController;
use App\Http\Controllers\ViewTeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\studentViewController;



Route::get('/', function () {
    return view('student.std_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

Route::get('/Admin_Register', function () {
    return view('admin.adminregister');
});

Route::get('/Student_Register', function () {
    return view('student.stdregister');
});

#admin Login

Route::post('/adminDashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
Route::post('/Admin_Register', [AdminController::class, 'Admin_Register'])->name('Admin_Register');

#student login
Route::post('/Student_Login', [StudentController::class, 'Student_Login'])->name('Student_Login');
Route::get('/Student_Dashboard', [StudentController::class, 'Student_Dashboard'])->name('Student_Dashboard');
Route::post('/Student_Register', [StudentController::class, 'Student_Register'])->name('Student_Register');
Route::get('/Student_profile{std_id}', [studentViewController::class, 'Student_profile'])->name('Student_profile');
Route::get('/Settings{std_id}', [studentViewController::class, 'Settings'])->name('Settings');
Route::post('/updateSetting{std_id}', [studentViewController::class, 'updateSetting'])->name('updateSetting');
Route::get('/Std_Logout', [studentViewController::class, 'Std_Logout'])->name('Std_Logout');
Route::get('/Student_redirect', [StudentController::class, 'Student_redirect'])->name('Student_redirect');
Route::post('/check-username', [StudentController::class, 'checkUsername'])->name('check.username');
Route::post('/check-email', [StudentController::class, 'checkEmail'])->name('check.email');




#logout

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

#add student.....

Route::get('/add_student', [AddStudentController::class, 'add_student'])->name('add_student');

#add student form......

Route::post('/saveStudent', [AddStudentController::class, 'saveStudent'])->name('saveStudent');

#all student show......

Route::get('/all_students', [AllStudentController::class, 'all_students'])->name('all_students');
Route::get('/delete_students{std_id}', [AllStudentController::class, 'delete_students'])->name('delete_students');
Route::get('/View_profile{std_id}', [AllStudentController::class, 'View_profile'])->name('View_profile');
Route::get('/Edit_profile{std_id}', [AllStudentController::class, 'Edit_profile'])->name('Edit_profile');
Route::post('/updateStudent{std_id}', [AllStudentController::class, 'updateStudent'])->name('updateStudent');

#Courses

Route::get('/CSE_students', [CSEStudentsController::class, 'CSE_students'])->name('CSE_students');
Route::get('/EEE_students', [EEEStudentsController::class, 'EEE_students'])->name('EEE_students');
Route::get('/BBA_students', [BBAStudentsController::class, 'BBA_students'])->name('BBA_students');
Route::get('/Civil_students', [CivilStudentsController::class, 'Civil_students'])->name('Civil_students');

#teacher
Route::get('/Add_Teacher', [AddTeacherController::class, 'Add_Teacher'])->name('Add_Teacher');
Route::post('/SaveTeacher', [AddTeacherController::class, 'SaveTeacher'])->name('SaveTeacher');
Route::get('/View_Teachers', [ViewTeacherController::class, 'View_Teachers'])->name('View_Teachers');
Route::get('/delete_Teacher{Teacher_id}', [ViewTeacherController::class, 'delete_Teacher'])->name('delete_Teacher');


