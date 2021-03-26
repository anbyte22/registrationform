@extends('backend.master')
@section('title', 'Registered| Member')
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Member Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Member</li>
                        <li class="breadcrumb-item active">Member Details</li>
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
                        {{-- <div class="card-header">
                            <h3 class="card-title">User Details</h3>
                        </div> --}}
                        <div id="details" style="background-color:rgb(165, 172, 241);">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Name :</label>
                                        <span id="name">{{ $item->name }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Registration Id :</label>
                                        <span id="member">{{ $item->reg_id }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Company :</label>
                                        <span id="dob">{{ $item->company }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Job :</label>
                                        <span id="address">{{ $item->job }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address :</label>
                                        <span id="city">{{ $item->address }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City :</label>
                                        <span id="district">{{ $item->city }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Pin Code :</label>
                                        <span id="state">{{ $item->pin }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>State :</label>
                                        <span id="pin">{{ $item->state }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country :</label>
                                        <span id="aadhar">{{ $item->country }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile :</label>
                                        <span id="mobile">{{ $item->mobile }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email :</label>
                                        <span id="email">{{ $item->email }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Telephone :</label>
                                        <span id="pan">{{ $item->tel }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Fax :</label>
                                        <span id="pan">{{ $item->fax }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Website :</label>
                                        <span id="pan">{{ $item->website }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Business :</label>
                                        <span id="pan">
                                            <ul>
                                                @if ($item->activity != '')
                                                    @foreach (explode('+', $item->activity) as $info)
                                                        <li>{{$info}}</li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Interest :</label>
                                        <span id="pan">
                                            <ul>
                                                @if ($item->interest != '')
                                                    @foreach (explode('+', $item->interest) as $info)
                                                        <li>{{$info}}</li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>About Aahar :</label>
                                        <span id="pan">
                                            <ul>
                                                @if ($item->about != '')
                                                    @foreach (explode('+', $item->about) as $info)
                                                        <li>{{$info}}</li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Anual Turnover :</label>
                                        <span id="pan">{{ $item->turnover }}</span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Transaction ID :</label>
                                        <span id="pan">{{ $item->transaction_id }}</span>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label>Balance :</label>
                                        <span id="balance" style="color:green;"></span>
                                    </div> --}}
                                </div>
                                <button type="button" class="btn btn-primary" onclick="window.history.back()">Back</button>
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
    {{-- @include('sweetalert::alert') --}}
@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
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
