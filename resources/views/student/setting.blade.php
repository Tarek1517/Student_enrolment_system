@extends('stdlayout')
@section('stdcontent')


<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Update Email and Password</h2>

            <p class="alert-success"><?php 
              
                $exception=Session::get('exception');
  
                   if($exception){
                    echo $exception;
                    Session::put('exception',null);
                   }
                
                ?>
                <p class="alert-danger"><?php 
              
                    $exception=Session::get('massage');
      
                       if($exception){
                        echo $exception;
                        Session::put('massage',null);
                       }
                    
                    ?>
                </p>

            <form class="forms-sample"  method="POST" action="{{route('updateSetting',$Student_description->std_id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputPassword1">Current Password*</label>
                    <input type="password" class="form-control p-input" name="Current_password" >
                    <div style="color:red">{{ $errors->first('Current_password') }}</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password*</label>
                    <input type="password" class="form-control p-input" name="std_password" >
                    <div style="color:red">{{ $errors->first('std_password') }}</div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">confirm new Password*</label>
                    <input type="password" class="form-control p-input" name="confirm_std_password" >
                    <div style="color:red">{{ $errors->first('confirm_std_password') }}</div>
                </div>
                
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection