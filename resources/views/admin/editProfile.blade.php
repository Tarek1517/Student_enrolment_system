@extends('layout')
@section('content')


<div class="col-12 col-lg-9 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Basic form elements</h2>

            <form class="forms-sample"  method="POST" action="{{route('updateStudent',$Student_description->std_id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control p-input"  name="std_name" value="{{$Student_description->std_name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" class="form-control p-input" id="email_id" name="std_email" value="{{$Student_description->std_email}}">
                    <div style="color:red">{{ $errors->first('std_email') }}</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password*</label>
                    <input type="password" class="form-control p-input" name="std_password" value="{{$Student_description->std_password}}">
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control p-input"  name="std_phone" value="{{$Student_description->std_phone}}">
                </div>

                <div class="form-group">
                    <label>Student Roll</label>
                    <input type="text" class="form-control p-input"  name="std_roll" value="{{$Student_description->std_roll}}">
                </div>

                <div class="form-group">
                    <label>Fathers Name</label>
                    <input type="text" class="form-control p-input"  name="std_fatherName" value="{{$Student_description->std_fatherName}}">
                </div>

                <div class="form-group">
                    <label>Mothers Name</label>
                    <input type="text" class="form-control p-input"  name="std_motherName" value="{{$Student_description->std_motherName}}">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control p-input"  name="std_Address" value="{{$Student_description->std_Address}}">
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <select class="form-control p-input" name="std_department" value="{{$Student_description->std_department}}">
                        <option value="1">CSE</option>
                        <option value="2">EEE</option>
                        <option value="3">BBA</option>
                        <option value="4">Civil</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Admission Year</label>
                    <input type="date" class="form-control p-input"  name="std_admissionYear" value="{{$Student_description->std_admissionYear}}">
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection