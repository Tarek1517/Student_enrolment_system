@extends('layout')
@section('content')

<div class="col-12 col-lg-9 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student Information</h2>

            <p class="alert-success"><?php 
              
                $exception=Session::get('exception');
  
                   if($exception){
                    echo $exception;
                    Session::put('exception',null);
                   }
                
                ?>
                </p>

            <form class="forms-sample"  method="POST" action="{{route('saveStudent')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control p-input"  name="std_name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" class="form-control p-input" value="{{ old('std_email') }}" name="std_email" placeholder="Enter Your Email">
                    <div style="color:red">{{ $errors->first('std_email') }}</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password*</label>
                    <input type="password" class="form-control p-input" name="std_password" placeholder="Enter Password">
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control p-input"  name="std_phone" placeholder="Enter Phone Number">
                </div>

                <div class="form-group">
                    <label>Student Roll</label>
                    <input type="text" class="form-control p-input"  name="std_roll" placeholder="Enter Your Roll">
                </div>

                <div class="form-group">
                    <label>Fathers Name</label>
                    <input type="text" class="form-control p-input"  name="std_fatherName" placeholder="Your Father Name">
                </div>

                <div class="form-group">
                    <label>Mothers Name</label>
                    <input type="text" class="form-control p-input"  name="std_motherName" placeholder="Your Mother Name">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control p-input"  name="std_Address" placeholder="Enter Your Address">
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <select class="form-control p-input" name="std_department">
                        <option value="1">CSE</option>
                        <option value="2">EEE</option>
                        <option value="3">BBA</option>
                        <option value="4">Civil</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Admission Year</label>
                    <input type="date" class="form-control p-input"  name="std_admissionYear" placeholder="Enter Your Admission Year">
                </div>
                
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Upload file</label>
                    <div class="col-sm-8">
                      <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                      <input type="file" class="form-control-file" name="std_image" id="exampleInputFile" aria-describedby="fileHelp2">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection