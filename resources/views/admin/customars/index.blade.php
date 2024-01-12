@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Customar List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Customar List</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="card card-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Customar List</h3>
                            <a href="{{ route('admin.customar.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Create Customar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>#</th>
                            <th>Customar</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($data->avatar) }}" alt="{{ $data->name }}" width="60" class="border p-1 rounded mr-2">
                                            <b>{{ $data->name }}</b>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $data->phone }}</td>

                                    <td class="align-middle">
                                        @if ($data->status == 'active')
                                            <span class="badge badge-success">Active</span>
                                        @elseif($data->status == 'deactive')
                                            <span class="badge badge-danger">Deactive</span>

                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}
                                    </td>
                                    <td class="align-middle">
                                        <a href="#" class="text-success mx-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('admin.customar.edit', $data->id) }}" class="text-info mx-1"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
