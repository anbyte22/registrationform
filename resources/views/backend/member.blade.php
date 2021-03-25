@extends('backend.master')
@section('title','Registered | Member')
@section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Member</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Members</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Members</h3>
            {{-- <a href="{{ url('admin/product/addproduct') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Add New</a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->company }}</td>
                    <td>{{ $data->state}}</td>
                    <td>{{ $data->city}}</td>
                    <td>{{ $data->mobile}}</td>
                    <td>{{ $data->email}}</td>
                    <td>
                        <a href="#" title="View Detail"><img src="{{ asset('public/icon/eye.png') }}"></a>&nbsp;
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    {{-- <tr>
                        <td colspan="8">{{ $datas->links() }}</td>
                    </tr> --}}
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  @include('sweetalert::alert')
@endsection
@push('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset ('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
<!-- DataTables -->
<script src="{{ asset ('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
     /* $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });*/
     $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<!--Data Table End -->
@endpush
@push('hjs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endpush
