@extends('layout')
@section('content')


<div class="col-12 col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data table</h2>
        <div class="row">
          <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
              <thead>
                <tr>
                    <th>St Name</th>
                    <th>St Roll</th>
                    <th>St Email</th>
                    <th>St Phone</th>
                    <th>St Address</th>
                    <th>St Department</th>
                    <th>St Image</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
  
                @foreach ($CSE_student_info as $Cse_student)
  
                <tr>
                    <td>{{ $Cse_student->std_name }}</td>
                    <td>{{ $Cse_student->std_roll }}</td>
                    <td>{{ $Cse_student->std_email }}</td>
                    <td>{{ $Cse_student->std_phone }}</td>
                    <td>{{ $Cse_student->std_Address }}</td>
                    <td>
                        @if($Cse_student->std_department==1)
                        <span >{{'CSE'}}</span>
                        @elseif($Cse_student->std_department==2)
                        <span >{{'EEE'}}</span>
                        @elseif($Cse_student->std_department==3)
                        <span >{{'BBA'}}</span>
                        @elseif($Cse_student->std_department==4)
                        <span >{{'Civil'}}</span>
                        @else
                        <span >{{'Not Defined'}}</span>
                        @endif
                    </td>
                    <td><img src="{{url($Cse_student->std_image)}}" height="50" width="60" style="border-radius:50%"></td>
                    <td>
                      <a class="btn btn-outline-primary" href="{{url('View_profile'.$Cse_student->std_id)}}">View</a>
                      <a class="btn btn-outline-warning" href="{{url('Edit_profile'.$Cse_student->std_id)}}">Update</a>
                      <a class="btn btn-outline-danger delete-std" onclick="return confirm('Are you sure you want to delete this item?')" href="{{url('delete_students'.$Cse_student->std_id)}}" id="delete">Delete</a>
                     </td>
                </tr> 
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection