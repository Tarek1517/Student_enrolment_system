@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Data table</h2>
      <p class="alert-success"><?php 
              
        $exception=Session::get('exception');

           if($exception){
            echo $exception;
            Session::put('exception',null);
           }
        
        ?>
        </p>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Teacher Name</th>
                  <th>Teacher Phone</th>
                  <th>Teacher Address</th>
                  <th>Teacher Department</th>
                  <th>Teacher Image</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($all_teachers_info as $view_teacher)

              <tr>
                  <td>{{ $view_teacher->Teacher_name }}</td>
                  <td>{{ $view_teacher->Teacher_phn }}</td>
                  <td>{{ $view_teacher->Teacher_address }}</td>
                  <td>
                    @if($view_teacher->Teacher_department==1)
                    <span >{{'CSE'}}</span>
                    @elseif($view_teacher->Teacher_department==2)
                    <span >{{'EEE'}}</span>
                    @elseif($view_teacher->Teacher_department==3)
                    <span >{{'BBA'}}</span>
                    @elseif($view_teacher->Teacher_department==4)
                    <span >{{'Civil'}}</span>
                    @else
                    <span >{{'Not Defined'}}</span>
                    @endif
                  </td>
                  <td><img src="{{url($view_teacher->Teacher_img)}}" height="50" width="60" style="border-radius:50%"></td>
                  <td>
                   <a class="btn btn-outline-primary" href="{{url('View_profile'.$view_teacher->Teacher_id )}}">View</a>
                   <a class="btn btn-outline-warning" href="{{url('Edit_profile'.$view_teacher->Teacher_id )}}">Update</a>
                   <a class="btn btn-outline-danger delete-teacher" onclick="return confirm('Are you sure you want to delete this item?')" href="{{url('delete_Teacher'.$view_teacher->Teacher_id)}}" id="delete">Delete</a>
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
