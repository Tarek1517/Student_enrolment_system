@extends('layout')
@section('content')

<div class="col-12 col-lg-9 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Teacher Information</h2>

            <p class="alert-success"><?php 
              
                $exception=Session::get('exception');
  
                   if($exception){
                    echo $exception;
                    Session::put('exception',null);
                   }
                
                ?>
                </p>

            <form class="forms-sample"  method="POST" action="{{route('SaveTeacher')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Teacher Name*</label>
                    <input type="text" class="form-control p-input"  name="Teacher_name" placeholder="Enter Teacher Name">
                </div>
                
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control p-input"  name="Teacher_phn" placeholder="Enter Phone Number">
                </div>


                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control p-input"  name="Teacher_address" placeholder="Enter Your Address">
                </div>

                <div class="form-group">
                    <label>Department</label>
                    <select class="form-control p-input" name="Teacher_department">
                        <option >Add Teacher Department</option>
                        <option value="1">CSE</option>
                        <option value="2">EEE</option>
                        <option value="3">BBA</option>
                        <option value="4">Civil</option>
                    </select>
                </div>

                
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Upload file</label>
                    <div class="col-sm-8">
                      <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                      <input type="file" class="form-control-file" name="Teacher_img" id="exampleInputFile" aria-describedby="fileHelp2">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection