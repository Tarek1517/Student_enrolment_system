<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <h3 class="card-title text-center mb-3">Register Now</h3>
                            <p class="alert-success"><?php
                            
                            $exception = Session::get('exception');
                            
                            if ($exception) {
                                echo $exception;
                                Session::put('exception', null);
                            }
                            
                            ?>
                            <p class="alert-danger"><?php
                            
                            $exception = Session::get('massage');
                            
                            if ($exception) {
                                echo $exception;
                                Session::put('massage', null);
                            }
                            
                            ?>
                            </p>
                            <form method="post" action="{{ route('Student_Register') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control p_input" name="std_name"
                                        value="{{ old('std_name') }}" id="userName">
                                    <div style="color:red">{{ $errors->first('std_name') }}</div>
                                    <span id="username_exists" class="" style="display: ;"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email*</label>
                                    <input type="email" class="form-control p-input" value="{{ old('std_email') }}"
                                        name="std_email" placeholder="Enter Your Email" id="email">
                                    <div style="color:red">{{ $errors->first('std_email') }}</div>
                                    <span id="Email_exists" class="" style="display: ;"></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control p_input" name="std_password" id="Pass">
                                    <div style="color:red">{{ $errors->first('std_password') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control p_input" name="confirm_std_password" id="conPass">
                                    <div style="color:red">{{ $errors->first('confirm_std_password') }}</div>
                                    <span id="confirm_password" class="" style="display: ;"></span>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control p_input" name="std_phone"
                                        value="{{ old('std_phone') }}">
                                    <div style="color:red">{{ $errors->first('std_phone') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Student Roll</label>
                                    <input type="text" class="form-control p_input" name="std_roll"
                                        value="{{ old('std_roll') }}">
                                    <div style="color:red">{{ $errors->first('std_roll') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" class="form-control p_input" name="std_fatherName"
                                        value="{{ old('std_fatherName') }}">
                                    <div style="color:red">{{ $errors->first('std_fatherName') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Mother Name</label>
                                    <input type="text" class="form-control p_input" name="std_motherName"
                                        value="{{ old('std_motherName') }}">
                                    <div style="color:red">{{ $errors->first('std_motherName') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control p_input" name="std_Address"
                                        value="{{ old('std_Address') }}">
                                    <div style="color:red">{{ $errors->first('std_Address') }}</div>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control p-input" name="std_department"
                                        value="{{ old('std_department') }}">
                                        <option value="1">CSE</option>
                                        <option value="2">EEE</option>
                                        <option value="3">BBA</option>
                                        <option value="4">Civil</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Admission Year</label>
                                    <input type="date" class="form-control p-input" name="std_admissionYear"
                                        placeholder="Enter Your Admission Year" value="{{ old('std_roll') }}">
                                    <div style="color:red">{{ $errors->first('std_admissionYear') }}</div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-sm-2 col-form-label">Upload file</label>
                                    <div class="col-sm-8">
                                        <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i
                                                class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                        <input type="file" class="form-control-file" name="std_image"
                                            id="exampleInputFile" aria-describedby="fileHelp2">
                                    </div>
                                    <div style="color:red; margin-left:10px;">{{ $errors->first('std_image') }}</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-primary btn-block enter-btn">Register</button>
                                </div>
                                {{-- <div class="d-flex justify-content-center mb-4">
                  <a href="{{url('/')}}" class="facebook-login btn btn-facebook mr-2">Sign in</a>
                </div> --}}
                                <small class="text-center d-block mb-3">Already have an Account?<a
                                        href="{{ url('/') }}"> Sign Up</a></small>
                                <small class="text-center d-block">By creating an account you are accepting our<a
                                        href="#"> Terms & Conditions</a></small>
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
    <script>
        $(document).ready(function() {

            $('#userName').on('blur', function() {
                let username = $(this).val();

                $.ajax({
                    url: '{{ route('check.username') }}',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        username
                    },
                    success: function(response) {
                        // console.log('exists ', response.exists);
                        if(response.exists) {
                            $('#username_exists').show();
                            $('#username_exists').addClass('text-danger');
                            $('#username_exists').text(response.message);
                        } else {
                            $('#username_exists').show();
                            $('#username_exists').addClass('text-success');
                            $('#username_exists').text(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#email').on('blur', function() {
                let email = $(this).val();

                $.ajax({
                    url: '{{ route('check.email') }}',
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        email
                    },
                    success: function(response) {
                        // console.log('exists ', response.exists);
                        if(response.exists) {
                            $('#Email_exists').show();
                            $('#Email_exists').addClass('text-danger');
                            $('#Email_exists').text(response.message);
                        } else {
                            $('#Email_exists').show();
                            $('#Email_exists').addClass('text-success');
                            $('#Email_exists').text(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#conPass').keyup(function(){

            let Pass = $('#Pass').val();
            let conPass = $('#conPass').val();

                if(Pass != conPass){

                    $('#confirm_password').html('password not matching');
                    $('#confirm_password').css('color','red');
                    return false;
                }else{
                    $('#confirm_password').html('password matched');
                    $('#confirm_password').css('color','green');
                    return false;
                }

            });
        });
    </script>

    


</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->

</html>
