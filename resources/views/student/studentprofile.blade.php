@extends('stdlayout')

@php
    function Convert_department($value){

        $values=[
              1=>'CSE',
              2=>'EEE',
              3=>'BBA',
              4=>'Civil'
            ];


            return $values[$value];


    }



@endphp


@section('stdcontent')


<div class="col-12 col-lg-12 grid-margin">
    <h1 class="page-title">Profile</h1>
    <div class="row user-profile">
      <div class="col-lg-4 side-left">
        <div class="card mb-4">
          <div class="card-body avatar">
            <img src="{{url($Student_description->std_image)}}" height="50" width="60" style="border-radius:50%">
            <p class="name">{{ $Student_description->std_name }}</p>
            <p class="designation">Roll: {{ $Student_description->std_roll }}</p>
            <a class="email">{{ $Student_description->std_email }}</a>
            <a class="number" >{{ $Student_description->std_phone }}</a>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body overview">
            
            <div class="wrapper about-user">
              <h2 class="card-title mt-4 mb-3">About</h2>
              <p>The total information of this student given bellow</p>
            </div>
            <div class="info-links">
              <a class="website">
                <i class="icon-globe icon">Father's Name : </i>
                <span>{{ $Student_description->std_fatherName }}</span>
              </a>

              <a class="website">
                <i class="icon-globe icon">Mothers's Name : </i>
                <span>{{ $Student_description->std_motherName }}</span>
              </a>

              <a class="website">
                <i class="icon-globe icon">Student Address : </i>
                <span>{{ $Student_description->std_Address }}</span>
              </a>

              <a class="website">
                <i class="icon-globe icon">Department : </i>
                <span>{{ Convert_department($Student_description->std_department) }}</span>
              </a>

              <a class="website">
                <i class="icon-globe icon">Admission Year : </i>
                <span>{{ $Student_description->std_admissionYear }}</span>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection