@extends('layout')
@section('content')

             <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family: cursive; font-size:20px; text-align:center;">All Students</h2>
                  @php
                      $students=DB::table('student_tbl')
                              ->count('std_id');
                  @endphp
                  <p style="font-family: cursive; font-size:30px; text-align:center; font-weight:bold;">{{$students}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family: cursive; font-size:20px; text-align:center;">All Teachers</h2>
                  @php
                      $teachs=DB::table('teacher_tbl')
                              ->count('Teacher_id');
                  @endphp
                  <p style="font-family: cursive; font-size:30px; text-align:center; font-weight:bold;">{{$teachs}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="font-family: cursive; font-size:20px; text-align:center;">Total courses</h2>
                  <p style="font-family: cursive; font-size:30px; text-align:center; font-weight:bold;">4</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          <div class="col-md-4 grid-margin d-flex align-items-stretch">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-facebook"><i class=""></i><p class="mb-0">COURSES YOU GET</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-facebook"><i class="fa-solid fa-laptop"></i><p class="mb-0">CSE</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-twitter"><i class="fa-solid fa-plug-circle-plus"></i><p class="mb-0">EEE</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-google"><i class="fa-solid fa-graduation-cap"></i><p class="mb-0">BBA</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12">
                <div class="social-panel bg-linkedin"><i class="fa-solid fa-person-digging"></i><p class="mb-0">Civil</p></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin d-flex align-items-stretch">
            <div class="row">
              <div class="col-12 global-card">
                <div class="card bg-warning ">
                  <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                    <h2>Best enrolment System for you</h2>
                    <p>We began with intensive and in-depth session to collate the needs of stakeholders</p>
                    <a href="#" class="btn btn-outline-secondary">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin d-flex align-items-stretch">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-facebook"><i class=""></i><p class="mb-0">what you will get?</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-facebook"><i class="fa-regular fa-folder-open"></i><p class="mb-0">Add students</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-twitter"><i class="fa-solid fa-eye"></i><p class="mb-0">See student info</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12 mb-3">
                <div class="social-panel bg-google"><i class="fa-regular fa-folder-open"></i><p class="mb-0">Add Teachers</p></div>
              </div>
              <div class="col-12 col-sm-6 col-md-12">
                <div class="social-panel bg-linkedin"><i class="fa-solid fa-eye"></i><p class="mb-0">See student info</p></div>
              </div>
            </div>
          </div>
          
@endsection