<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.html" />
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              <p class="alert-success"><?php 
              
                $exception=Session::get('exception');
  
                   if($exception){
                    echo $exception;
                    Session::put('exception',null);
                   }
                
                ?>
                </p>
                <p class="alert-danger"><?php 
              
                  $exception=Session::get('massage');
    
                     if($exception){
                      echo $exception;
                      Session::put('massage',null);
                     }
                  
                  ?>
                  </p>
              <form method="post" action="{{route('Admin_Register')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input" name="admin_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" class="form-control p-input" value="{{ old('admin_email') }}" name="admin_email" placeholder="Enter Your Email">
                    <div style="color:red">{{ $errors->first('admin_email') }}</div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" name="admin_password">
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control p_input" name="Confirm_admin_password">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control p_input" name="admin_phone">
                  </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Upload file</label>
                    <div class="col-sm-8">
                      <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                      <input type="file" class="form-control-file" name="admin_img" id="exampleInputFile" aria-describedby="fileHelp2">
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="{{url('/backend')}}" class="facebook-login btn btn-facebook mr-2">Sign in</a>
                </div>
                <small class="text-center d-block mb-3">Already have an Account?<a href="#"> Sign Up</a></small>
                <small class="text-center d-block">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
