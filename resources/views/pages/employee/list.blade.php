@extends('hrms.layouts.base3')

@section('content')
<div class="content">
  <div class="container-fluid">
    <form method="post" action="/add-employee-tmp">
    <div class="row">
      <!-- Form -->
      
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
            <h3 class="card-title"> Employees</h3>
            </div>
            <div class="card-body p-0">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Code</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($employees as $employee)
                    <!-- {{print_r($employee)}} -->
                    <?php
                      $status_emp = ['Inactive', 'Active', 'Fired', 'Retired'];
                    ?>
                    <tr>
                      <td>{{$employee->id}}</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->employee->code}}</td>
                      <td>{{$status_emp[$employee->employee->status]}}</td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- @foreach($employees as $employee)
                {{print_r($employee)}}
              @endforeach -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
    </div>
    </form>
  </div>
</div>
@endsection


@section('title')
  List Employee
@endsection

@section('crumbs')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{route('list-employee')}}">Employees</a></li>
      <li class="breadcrumb-item active">List</li>
    </ol>
  </div><!-- /.col -->
@endsection

@push('scripts')
  <!-- <script src="{{ URL::asset('assets/bower/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
  <script src="{{ URL::asset('assets/bower/plugins/jquery/jquery.js') }}"></script>
  <script src="{{ URL::asset('assets/bower/js/jquery.datetimepicker.full.min.js') }}"></script> -->
@endpush

@section('jsfunction')
  <script>
    
    
  </script>

@endsection

@push('styles')
  <!-- <link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/bs-stepper/css/bs-stepper.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/bower/css/jquery.datetimepicker.css') }}"> -->
@endpush