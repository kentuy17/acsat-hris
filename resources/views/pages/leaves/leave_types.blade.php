@extends('hrms.layouts.base3')

@section('content')
<div class="content">
  <div class="container-fluid">
    <!-- <form method="post" action="/add-employee-tmp"> -->
    <div class="row">
      <!-- Form -->
      
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title"> Leave Types</h3>
            </div>
            <div class="card-body p-0">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Leave Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($types as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->leave_type}}</td>
                    <td>{{$item->description}}</td>
                    <td>Edit | Delete</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
    </div>
    <!-- </form> -->
  </div>
</div>
@endsection


@section('title')
  Leave Types
@endsection

@section('crumbs')
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{route('add-leave-type')}}">Add Leave Type</a></li>
      <li class="breadcrumb-item active">List</li>
    </ol>
  </div><!-- /.col -->
@endsection

@push('scripts')
<script src="{{ URL::asset('assets/bower/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@section('jsfunction')
<!-- Custom Script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true
    });
  });
</script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/bower/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush